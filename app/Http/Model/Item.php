<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table="items";
    protected $primaryKey='id';
    public $timestamps=false;
    protected $guarded=[];

    public static $rules = array(
        'name'=>'required',
        'detail'=>'required',
        'price'=>'required',
    );
}
