<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Middleware\LogAcessoMiddleware;

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

            return redirect()->route('');
        }else{
            return redirect()->route('site.login', ['erro' => 1]);
           
        }

    }
}
