<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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
    }

    public function getMovies(){
        $movies = Movie::with('movie_details.movie_times')
            ->get();

        return response()->json($movies);
    }

    public function getMovieImage($id){
        $path = storage_path('app/images/'. (Movie::find($id))->file_path);
//        dd($path);
        if (!File::exists($path)) {
            abort(404);
        }

//        dd('testing');

        $type = File::mimeType($path);
        $headers = ['Content-Type' => $type];
        $response = new BinaryFileResponse($path, 200, $headers );
//        return response()->download($path, $headers);
        return $response;
    }

}
