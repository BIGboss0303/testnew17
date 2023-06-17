<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Busket extends Model
{
    use HasFactory;
		public $table='buskets';
		public function product(){
			return $this->hasOne(Products::class,'product_id');
		}
		public function user(){
			return $this->belongsTo(User::class);
		}
}
