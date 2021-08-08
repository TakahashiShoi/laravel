<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'ヤマダ', 'mail' => 'yamada@hanako.com']
        ];
        return view('hello.index', ['data' => $data]);
    }
}
