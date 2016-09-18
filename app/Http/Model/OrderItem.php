<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table="order_item";
    protected $primaryKey='id';
    public $timestamps=false;
    protected $guarded=[];

    public static $rules = array(
        'order_id'=>'required',
        'item_id'=>'required',
        'quantity'=>'required',
    );
}
