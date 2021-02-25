<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name','path','user_id'];

	

	public function utilisateur() 
	{
		return $this->belongsTo('App\User');
	}
}
