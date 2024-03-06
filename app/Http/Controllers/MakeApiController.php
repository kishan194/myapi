<?php

namespace App\Http\Controllers;
use App\Console\Commands\makeApi;
use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


class MakeApiController extends Controller
{
    public function makeApi(){
        Artisan::call('call:api');
        return  test::all();
        
    }

    public function data(){
        dd('test');
    }
}
