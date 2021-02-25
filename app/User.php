<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email'
    ];

    public function images(){

        // return $this->hasMany(Image::class);
        return $this->hasMany('App\Image');

    }
}
