<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Get the images for the user.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }
    
    /**
     * Get the comments for the user.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
