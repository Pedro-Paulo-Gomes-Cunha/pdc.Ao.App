<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    //

    public function login(){
        
        return view('authentication.login');
    }
    

    public function authentication(Request $request){

       
        try {

            $credeciais = $request->validate([
                'email' => ['required', 'email '],
                'password' => ['required'],
            ]);

            if(Auth::attempt($credeciais)) {
               
                $request->session()->regenerate();
               
                if(Auth::user()->perfil === "admin" && Auth::user()->status === "verificado"){
                    return redirect()->route("sis.admin.dashboard");
                }

                if(Auth::user()->perfil === "medico" && Auth::user()->status === "verificado"){
                    return redirect()->route("sis.medico.dashboard");
                }

                if(Auth::user()->perfil === "utente" && Auth::user()->status === "verificado"){
                    return redirect()->route("sis.index");
                }

            }else{
                dd('credencias incorrentas');
                return redirect()->back()->with("authenticationError", "As suas credenciais estão incorretas, tente novamente");
            }
    
        } catch (\Throwable $th) {
    

            dd($th->getMessage());
            return back()->with("catch", "Falha ao realizar operação");
        }
        
    }

    public function logout(Request $request){

        try {

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->to('/');

        } catch (\Throwable $th) {

            return back()->with("catch", "Falha ao realizar operação");
        }


    }

    public function auth(Request $request){


        $credenciais = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'],

        ]);

        dd(Auth::attempt($credenciais));

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->route('sis.admin.dashboard');
        }else{
            return redirect()->back();
        }
    }
}
