<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['name', 'image', 'price', 'quantity', 'kind_phone_id', 'producer_id'];
    
    public function producer() {
    	return $this->belongsTo(\App\Models\Producer::class);
    }

    public function kind_phone() {
    	return $this->belongsTo(\App\Models\KindPhone::class);
    }
}
