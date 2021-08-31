<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\UserModel;
use App\Services\Business\SecurityService;

class LoginController extends Controller
{
    public function index(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        
        $user = new UserModel($username, $password);
        //dd($user);
        
        $securityService = new SecurityService();
        
        $response = $securityService->login($user);
        
        if($response == true){
            return view('loginPassed2', [ 'model' => $user]);
        }
        else{
            return view('loginFailed');
        }
    }
}
