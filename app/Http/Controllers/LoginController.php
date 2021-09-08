<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\UserModel;
use App\Services\Business\SecurityService;
use App\Services\Data\CustomerDao;
use App\Services\Data\OrderDao;
use App\Services\Business\OrderService;

class LoginController extends Controller
{
    public function index(Request $request){
        
        $this->validateForm($request);
        
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
    
    private function validateForm(Request $request){
        //Setup data validation rules for login form
        $rules=['username' => 'Required|Between:4,10|Alpha',
            'password' => 'Required|Between:4,10'];
        
        $this->validate($request,$rules);
    }
    
    public function createCustomerTest(Request $request){
        $firstName = $request->input('username');
        $lastName = $request->input('password');
        $product = "This is a test Product";
        
        $service = new OrderService();
        $service->createOrder($firstName, $lastName, $product);
    }
}
