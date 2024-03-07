<?php

namespace App\Http\Controllers;
use App\Console\Commands\makeApi;
use App\Models\test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


class MakeApiController extends Controller
{
    public function makeApi(){
       
        $data = User::all();

        return response()->json($data);
    }

    public function store(Request $request){
             
        $user = new  User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        // dd($user);
        $user->save();
        return response()->json(['message' => 'Data stored successfully'], 201);

    }
}
