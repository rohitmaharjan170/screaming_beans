<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $fillable = ['user_id','item_id','tbl_id','quantity'];
}
