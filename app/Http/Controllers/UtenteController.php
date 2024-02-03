<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\{User,Utente,HistoricoClinico, RegistroClinico,Consulta};

class UtenteController extends Controller
{
    //

    public function formUtente(){

        return view('utente.form.utente-create');
    }

    public function storeAccountUtente(Request $request){

        
        try {


            $data = $request->all();

            //validar ano de nascimento
            // $data_actual = new DateTime("now");
            // $ano=Carbon::parse($request->data_nascimento)->format("Y");
            // $ano_actual=Carbon::parse($data_actual)->format("Y");

            // if($ano>$ano_atual || $ano< 1905){

            //     return redirect()->back()->with("catch", "Data de nasciemnto invalida");
            // }

            //VARIAVEIS PARA FAZER UPLOA DOS FICHEIROS
            $foto = '';
          
            //PREPARAR OS ARQUIVOS PARA UPLOAD
            if($data['foto_anexo'] ){
                $foto = md5($data['foto_anexo']->getClientOriginalName()).'.'.$data['foto_anexo']->getClientOriginalExtension();    
            }
            //FAZER UPLOAD DOS FICHEIROS
            $data['foto_anexo']->storeAs('/public/foto/',$foto);
           
           DB::beginTransaction();
            $utente = Utente::create([
                'nome'=> $data['nome'],
                'data_nascimento'=>$data['data_nascimento'],
                'bi'=>$data['bi'],
                'genero'=>$data['genero'],
                'seguro'=>$data['seguro'],
                'numero_seguro'=>$data['numero_seguro'],
                'telefone'=>$data['telefone'],
                'provincia'=>$data['provincia'],
                'municipio'=>$data['municipio'],
                'referencia'=>$data['referencia'],
                'foto_anexo'=>$foto   
            ]);

            // //CRIAR DADOS DE ACESSO DO UTENTE
            User::create([
                'nome'=>$data['nome'],
                'email'=>$data['email'],
                'perfil'=>'utente',
                'status'=>'verificado',
                'password'=>bcrypt($data['password']),
                'utente_id'=>$utente->id
            ]);

            //CRIAR REGISTRO CLINICO DO UTENTE
            RegistroClinico::create([
                'utente_id'=>$utente->id 
            ]);

            //CRIAR REGISTRO CLINICO DO UTENTE
            HistoricoClinico::create([
                'utente_id'=>$utente->id 
            ]);

            DB::commit();
            if($utente){
                return redirect()->route("sis.index")->with("success", "Operação relaizada com sucesso");
            }

        } catch (\Throwable $th) {
            dd( $th->getMessage());
            back()->with("catch", "falha ao realizar a operaçáo");
        }
    }


    //APRSENTAR REGISTRO CLINICO DE UTENTE
    public function registroClinico(){

        try {
            if(Auth::check()){

                if(Auth::user()->perfil ==='utente'){
    
                    $utente = Utente::where('id', Auth::user()->utente_id)->first();
                    $registro_clinico = RegistroClinico::where('utente_id',Auth::user()->utente_id)->first();
                    $id = $registro_clinico->utente_id;
                    $consulta = Consulta::where('utente_id',$id)->get();
                    $historico_clinico = HistoricoClinico::where('utente_id', $id)->get();
    
                    return view('utente.include.registro_clinico', compact('utente','registro_clinico','historico_clinico'));
    
                }
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());

            return redirect()->back()->with("catch", 'falha ao realizar a operação');
        }
       
    }
}
  
