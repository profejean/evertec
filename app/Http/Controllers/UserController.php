<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{   

     public function login(Request $request){

        /* Validate data */
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        /* Create Auth session */
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            /* Have permissions */
            return Redirect::route('home');
        }

        /* Don't have permissions */
        return back()->withErrors([
            'email' => 'Los datos enviados no se reconocen en el sistema.',
        ]);
    }

    public function register(Request $request){

        /* Validate data */
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email',Rule::unique('users')],
            'password' => ['required'],
        ]);
       

            $user = new User();
            $user->name = $credentials['name'];
            $user->email = $credentials['email'];
            $user->rol = 'cliente';
            $user->password = bcrypt($credentials['password']);
            $user->save();

            $data = [
                'email' => $credentials['email'],
                'password' => $credentials['password'],
            ];

            if (Auth::attempt($data)) {
                $request->session()->regenerate();           
                return redirect()->intended('home');
            }         


        return redirect()->back()->withErrors('email', 'Hubo un problema con su registro');
        
    }

 
}
