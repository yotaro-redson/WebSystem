<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name'=>['required', 'min :4'],
        ]);

        User::create($incomingFields);
        return redirect('list');
    }
    function show()
    {
        $data= User::all();
        return view('list',['users'=>$data]);
    }

}
