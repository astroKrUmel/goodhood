<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 17.11.2016
 * Time: 23:22
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Artist extends Authenticatable
{
    use Notifiable;

//    protected $table = 'artists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'facebookLink', 'mixcloudLink'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * first letter of name in UPPERCASE
     */
    public function setNameAttribute($value) {
        $this->attributes['name'] = ucfirst($value);
    }


    public function mixcloundtracks() {
        return $this->hasMany('App\Mixcloudtrack')
            ->get();
    }

    public function currentEvents() {
        return $this->belongsToMany('App\Event')
            ->orderBy('date', 'ASC')
            ->where('date', '>=', Carbon::today()->toDateString())
            ->get();
    }
}
