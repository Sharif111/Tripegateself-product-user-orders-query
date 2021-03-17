<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function user(){
        return $this->belongsTo('App\User','user_id','id')->withDefault([
            'id' => 0,
            'country' => 'NA'
        ]);
    }

    public function product(){
        return $this->belongsTo('App\product','product_id','id')->withDefault([
            'id' => 0,
            'price' => 'NA'
        ]); 
    }




}
