<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mixcloudtrack extends Authenticatable
{
    use Notifiable;

//    protected $table = 'micloudtracks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function artist() {
        return $this->belongsTo('App\Artist')->get();
    }
}

