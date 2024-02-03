<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialidadeController extends Controller
{
    //

    public function criarEspecialidade(Request $request){

        try {
            $data = $request->all();

            //VARIAL PARA AMRAZENAR O HASH DO FICHE
            $imagem = '';

            //preparar os ficheiros para upload
            i($data['imagem']){
                $imagem = md5($data['imagem']->getOriginalName()).'.'.$data['imagem']->getOriginalExtension();
            }

            //Fazer upload dos ficheiros
            $data['imagem']->storeAs('public/especialidade', $imagem);

            $especialidade = Especialidade::create([
                'especialidade'=>$data['especialidade'],
                'imagem'=>$imagem
            ]);

            return redirect()->route("sis.admin.listar.especialidades")->with('success', 'operacao realizada com sucesso');

        } catch (\Throwable $th) {

            dd($th->getMessage);
        }
    }
}
