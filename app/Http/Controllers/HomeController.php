<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = array (
            'title' => 'Home Page'
        );

        // return view ('home', $data);
        return view ('index', $data);
    }


}
