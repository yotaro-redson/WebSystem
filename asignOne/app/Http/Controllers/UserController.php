<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name'=>['required', 'min :4', Rule::unique('users','name' )],
            'email'=>['required','email', Rule::unique('users','email') ],
            'password'=> ['required', 'min:6']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user=User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request){
        $incomingFields= $request->validate([
            'loginname'=>'required',
            'loginpassword'=>'required',


        ]);
        if(auth()->attempt(['name'=> $incomingFields['loginname'],'password'=> $incomingFields['loginpassword']])){

        }
        return redirect('/');

    }
    function show()
    {
        $data= User::all();
        return view('list',['users'=>$data]);
    }

}
