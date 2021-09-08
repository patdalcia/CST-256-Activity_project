<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'First_Name',
        'Last_Name'
    ];
    
    /**
     * Get the csutomers orders
     */
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
