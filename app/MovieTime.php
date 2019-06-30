<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class MovieTime extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time',
    ];

    public function movie()
    {
        return $this->belongsTo('App\MovieDetail');
    }

    public function getTimeAttribute($value){

    }



}
