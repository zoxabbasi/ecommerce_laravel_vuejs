<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'address1', 'address2', 'city', 'state', 'zipcode', 'country_code', 'customer_id'];
}
