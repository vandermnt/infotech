<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $regras = [
            'email' => 'required',
            'senha' => 'required'
        ];

        $msgs = [
            'required' => 'O preenchimento do campo é obrigatório!'
        ];

        $request->validate($regras, $msgs);

        $email = strtoupper($request->get('email'));
        $senha = strtoupper($request->get('senha'));

        $user = User::where('EMAIL', $email)
            ->where('SENHA', $senha)
            ->first();

        if($user != null){
            Auth::login($user);

            return redirect()->route('fatura.index');
        } else {
            return redirect()->back()->withInput()->with('error', 'E-mail ou senha incorretos!');
        }
    }
}
