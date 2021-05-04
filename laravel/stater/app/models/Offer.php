<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
        protected $table = "offers";
        protected $fillable = ['id','name','price','details','created_at','updated_at'];
        protected $hidden = ['create_at','update_at'];
        public $timestamps =false;
}
