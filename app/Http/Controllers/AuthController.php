<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register(Request $request){
        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')-> with('success', 'User created');
    }

    public function login(Request $request){

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $request->session()->regenerate();

            Log::info('Usuário logado com sucesso');

            return redirect()->intended('/home');
        }

        Log::info('Usuário ou senha incorreta');

        return back()->with('error', 'Invalid email or password');
    }
}
