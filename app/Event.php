<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 17.11.2016
 * Time: 23:24
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Event extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'data', 'location', 'city', 'country', 'facebookLink'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function artists() {
        return $this->belongsToMany('App\Artist')->get();
    }

    /**
     * first letter of name in UPPERCASE
     */
    public function setNameAttribute($value) {
        $this->attributes['name'] = ucfirst($value);
    }

    public function setLocationAttribute($value) {
        $this->attributes['location'] = ucfirst($value);
    }

    public function setCityAttribute($value) {
        $this->attributes['city'] = ucfirst($value);
    }

    public function setCountryAttribute($value) {
        $this->attributes['country'] = ucfirst($value);
    }


}
