<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'Product',
        'Customer_Id'
    ];
    
    /**
     * Get the csutomers orders
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
