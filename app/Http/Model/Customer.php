<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="customer";
    protected $primaryKey='id';
    public $timestamps=false;
    protected $guarded=[];

    public static $rules = array(
       'phone_no'=>'required'
    );
}
