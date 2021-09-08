<?php
namespace App\Services\Business;

use App\Services\Data\CustomerDao;
use App\Services\Data\OrderDao;
use Illuminate\Support\Facades\DB;

class OrderService
{
    public function createOrder($firstName, $lastName, $product){
      $customerDao = new CustomerDao();
      $orderDao = new OrderDao();
      DB::beginTransaction();
      try{
          $customer = $customerDao->addCustomer($firstName, $lastName);
          $order = $orderDao->addOrder($product, $customer->id);
          DB::commit();
          return response()->json(['error' => "Successfully accomplished ACID operation"], 500);
      }catch (\Exception $ex){
          DB::rollback();
          return response()->json(['error' => $ex->getMessage()], 500);
      }
      
    }
    
    
}

