<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Promotion extends Model
{	/**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = ['title', 'body', 'start_at', 'end_at', 'place', 'published_at', 'user_id'];

    protected $dates = ['published_at'];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function images() {
    	return $this->hasMany('App\Image');
    }

    public function tags() {
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function setPubishedAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::parse($date)->subDay();
    }

    // public function setBodyDotDotDotAttribute($value) {
    //     $this->attributes['body_dotdotdot'] = substr($value->body_dotdotdot, 0, 255);
    // } 
 }
