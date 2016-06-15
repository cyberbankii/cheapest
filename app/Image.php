<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['path'];

    public function promotion() {
    	return $this->belongsTo('App\Promotion');
    }
}
