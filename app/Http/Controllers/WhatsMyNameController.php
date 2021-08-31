<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsMyNameController extends Controller
{
    //
    public function index(Request $request){
        $path=$request->path();
        echo "Path Method:".$path;
        echo "<br>";
        
        $method=$request->isMethod('get')?"GET":"POST";
        echo 'GET or POST Method:'.$method;
        echo '<br>';
        
        $url=$request->url();
        echo 'URL Method:'.$url;
        echo '<br>';
        
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        echo "Your name is:" . $firstname . " " . $lastname;
        echo "<br>";
        
        $data = ['firstname' => $firstname, 'lastname' => $lastname];
        return View('thatswhoiam')->with($data);
    }
}
