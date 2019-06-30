<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Movie extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'file_path',
    ];

    protected $hidden = [
        'valid'
    ];

    public function movie_details(){
        return $this->hasMany('App\MovieDetail');
    }

}
