<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MovieDetail extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
    ];

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }

    public function movie_times(){
        return $this->hasMany('App\MovieTime');
    }



}
