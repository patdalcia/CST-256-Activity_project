<?php
namespace App\Services\Data;

use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\True_;
use App\Models\Customer;

class CustomerDao
{
    
    public function addCustomer($firstName, $lastName){
        
        $customer = Customer::create([
            'First_Name' => $firstName,
            'Last_Name' => $lastName
        ]);
        return $customer;
    }
}

