<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        $response = "Hello World from the TestController";
        return $response;
    }
    
    public function test2(){
        return view("helloworld");
    }
}
