<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function promotions() {
    	return $this->belongsToMany('App\Promotion')->withTimestamps();
    }
}