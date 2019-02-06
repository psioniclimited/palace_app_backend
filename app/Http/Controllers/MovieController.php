<?php

namespace App\Http\Controllers;

use App\Movie;

class MovieController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test(){

        $movies = Movie::all();

        dd($movies);

        return response()->json([
            'name' => 'testing',
        ]);

//        return view('test');

    }

}
