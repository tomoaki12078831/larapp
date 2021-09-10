<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'self_introduction', 'sex', 'area', 'age', 'want_talk', 'can_talk', 'occupation', 'img_name'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getPrefNameAttribute() {
        return config('pref.'.$this->area);
    }
    public function getYearNameAttribute() {
        return config('year.'.$this->age);
    }
    public function getWantLanguageNameAttribute() {
        return config('language.'.$this->want_talk);
    }
    public function getLanguageCanNameAttribute() {
        return config('language.'.$this->can_talk);
    }
    public function getJobNameAttribute() {
        return config('job.'.$this->occupation);
    }
}
