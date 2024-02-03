<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\{User,Medico,Consulta,Utente, Especialidade,Contato,Endereco,Exame};
use App\Http\Requests\{MedicoRequest,UtenteRequest};

class AdminController extends Controller
{
    //

    public function adminDashobrd(){

        $response['medicos'] = Medico::get(); 
        $response['utentes'] = Utente::get(); 
        $response['exames'] = Exame::get(); 
        $response['consultas'] = Consulta::get(); 

        return view('admin.index', $response);
    }

    public function listarUtilizador(){

        $users = User::where('perfil','=', 'admin')
            ->get();
        return view('admin.include.user', compact('users'));
    }

    public function getUtentes(){

        $utentes = Utente::get();
        return view('admin.include.utente', compact('utentes'));
    }

    

    public function getEspecialidades(){
        $especialidades = Especialidade::get();

        return view('admin.include.especialidades', compact('especialidades'));
    }


    //GERENCIAR ESPECIALIDADES
    public function storeEspecialidade(Request $request){

        try {
            $data = $request->all();

            
            //VARIAL PARA AMRAZENAR O HASH DO FICHE
            $imagem = '';

            //preparar os ficheiros para upload
            if($data['imagem']){
                $imagem = md5($data['imagem']->getClientOriginalName()).'.'.$data['imagem']->getClientOriginalExtension();   
            }

            //Fazer upload dos ficheiros
            $data['imagem']->storeAs('public/especialidade',$imagem);

            $especialidade = Especialidade::create([
                'especialidade'=>$data['especialidade'],
                'imagem'=>$imagem
            ]);

            return redirect()->route("sis.admin.listar.especialidades")->with('success', 'operacao realizada com sucesso');

        } catch (\Throwable $th) {

            dd($th->getMessage());

            return redirect()->back()->with("catche", "falha ao realizar a operação");
        }

    }


    public function destroyEspecialidade($id){

        try {
            
            $especialidade = Especialidade::find($id);

            $especialidade->delete();

            return redirect()->route("sis.admin.listar.especialidades")->with("success", 'Operação realizada com sucesso');

        } catch (\Throwable $th) {
           
            dd($th->getMessage());
        }
    }


    //GERENCIAR MEDICOS

    public function getMedicos(){

        $response['medicos'] = User::where('perfil', '=', 'medico')
            ->join('medicos', 'users.id', '=', 'medicos.id')
            ->get();
        
        
        $response['especialidades'] = Especialidade::get();

        return view('admin.include.medicos', $response);
    }

    public function storeMedico(Request $request){

        try {
            $dados = $request->all();

            //Verifcar se a data de nascimento é válida
            $data_atual = Carbon::now();

            $ano = Carbon::parse($request->data_nascimento)->format('Y');
            $ano_atual = Carbon::parse($data_atual)->format("Y");

            if($ano>  $ano_atual || $ano<1905){
                return redirect()->back()->with("warning", "Data de nascimento invaávlida");
            }else{

                //Preenchidos todos os campos corretamente, adicionar medico ao sistema

                //inserir dados do endereco
                $endereco = Endereco::create([
                    'municipio'=>$dados['municipio'],
                    'codigo_postal'=>$dados['codigo_postal']
                ]);

                 //inserir dados do contato
                $contato = Contato::create([
                    'email'=>$dados['email'],
                    'telefone'=>$dados['telefone']
                ]);

                //=========salvar dados do mmédico no sistema
                $medico = Medico::create([
                    'nome'=>$dados['nome'],
                    'nascimento'=>$dados['nascimento'],
                    'bi'=>$dados['bi'],
                    'genero'=>$dados['genero'],
                    'especialidade'=>$dados['especialidade'],
                    'endereco_id'=>$endereco->id,
                    'contato_id'=>$contato->id
                ]);

                //========= Outros dados ===========
                $usuario = User::create([
                        'nome'=>$dados['nome'],
                        'email'=>$dados['email'],
                        'medico_id'=>$medico->id,
                        'perfil'=> 'medico',
                        'status'=> 'verificado',
                        'password'=>bcripty('sis')
                   
                ]);

                return redirect()->route("sis.admin.listar.medicos")->with("success", 'Operação realizada com sucesso');


            }


        } catch (\Throwable $th) {
          
            dd($th->getMessage());
        }
    }

    public function destroyMedico($id){

        try {

            $medico = Medico::find($id);
            $medico->delete();

            return redirect()->route("sis.admin.listar.medicos")->with("sucess", 'Operação realizada com sucesso!');
        } catch (\Throwable $th) {
            
            dd($th->getMessage());
            return redirect()->back()->with("catch", 'Operação realizada com sucesso!');
        }
       
    }
}
