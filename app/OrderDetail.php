<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'phone', 'address1', 'address2', 'city', 'state', 'zipcode', 'country_code'];
}
