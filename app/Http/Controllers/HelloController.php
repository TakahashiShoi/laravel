<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Schema;


class HelloController extends Controller {

    public function post(Request $request)
    {
        return view('hello.index', ['msg' => $request->msg]);
    }

    public function index() 
    {
        return view('hello.index', ['message' => 'Hello!']);
    }
}