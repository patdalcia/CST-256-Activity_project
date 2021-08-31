<?php
namespace App\Services\Data;

use App\Models\UserModel;
use Illuminate\Support\Facades\DB;

class SecurityDAO
{
    
    public function findByUser(UserModel $userModel){
        //var_dump($userModel);
        
        $user = DB::table('users')
            ->where('USERNAME', '=', $userModel->getUsername())
            ->where('PASSWORD', '=', $userModel->getPassword())
            ->get();
            if($user->isNotEmpty()){
                return true;
            }
            else{
                return false;
            }
        
    }
}

