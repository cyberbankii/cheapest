<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{	/**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = ['title', 'body', 'start_at', 'end_at', 'place', 'published_at', 'user_id'];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function images() {
    	return $this->hasMany('App\Image');
    }

    public function tags() {
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }
 }
