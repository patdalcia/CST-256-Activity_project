<?php
namespace App\Services\Data;

use App\Models\Order;

class OrderDao
{       
    public function addOrder($product, $customer_id){
        $order = Order::create([
            'Product' => $product,
            'Customer_Id' => $customer_id
        ]);
        return $order;
    }
}

