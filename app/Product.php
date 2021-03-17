<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function order(){
        return $this->hasMany('App\Order','product_id','id');
     }
 
}
