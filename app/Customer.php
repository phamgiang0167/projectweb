<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "tbl_customer";
    protected $primaryKey = 'customer_id';
}
