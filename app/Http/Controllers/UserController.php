<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function index()
    {
           return Http::get('https://dummyjson.com/products/1');
    } 
}
