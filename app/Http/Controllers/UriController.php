<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{

    public function index(Request $request)
    {
        // Usage of path method
        $path = $request->path();
        echo "Path method: ".$path;
        echo "<br>";


        // Usage of is method
        $pattern = $request->is('foo/*');
        echo "is method: ".$pattern;
        echo "<br>";

        // Usage of url method
        $url = $request->url();
        echo "url method: ".$url;
        echo "<br>";
    }
}
