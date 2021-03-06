<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

	protected $fillable = ['body'];
	protected $appends = ['selfMessage'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getSelfMessageAttribute()
    {
    	return $this->user_id === auth()->user()->id;
    }
}
