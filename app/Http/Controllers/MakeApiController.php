<?php

namespace App\Http\Controllers;
use App\Console\Commands\makeApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


class MakeApiController extends Controller
{
    public function makeApi(){
        Artisan::call('call:api');
        return response()->json(['message' => 'API called successfully']);
    }

    public function data(){
        dd('test');
    }
}
