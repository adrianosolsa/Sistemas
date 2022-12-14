<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    public function __construct() {
        $this->middleware(LogAcessoMiddleware::class);
    }
    */

    public function index(Request $request) {
        $erro = '';
        
        if($request->get('erro') == 1){
            $erro = 'Usuário ou Senha não existe';
        }

        if($request->get('erro') == 2){
            $erro = 'Necessário realizar Login para ter acesso a Pagina';
        }
        
        return view('site.login',['titulo' => 'Login','erro' => $erro]);
    }

    public function autenticar(Request $request) {
        
        //Regras de Validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //Mensagens de Feedback de Validação
        $feedback = [
            'usuario' => 'O campo E-mail é Obrigatorio',
            'senha' => 'O campo Senha é Obrigatorio'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');


        //Iniciar Model Users
        $user = new User();

        $usuario = $user->where('email',$email)
                    ->where('password', $password)
                    ->get()
                    ->first();

        if(isset($usuario->name)){
            
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            //dd($_SESSION);
            return redirect()->route('site.home');
        }else{
            return redirect()->route('site.login', ['erro' => 1]);
           
        }
    }

    public function sair(){
        session_destroy();
        return redirect()->route('site.login');
    }

}
