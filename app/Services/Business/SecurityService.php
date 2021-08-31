<?php
namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;

class SecurityService
{
    public function login(UserModel $userModel) {
        $securityDAO = new SecurityDAO();
        
        return $securityDAO->findByUser($userModel);  
    }
}

