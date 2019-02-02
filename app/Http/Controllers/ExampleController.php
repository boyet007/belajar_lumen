<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function getUserId($id) {
        return 'User id = ' . $id;        
    }

    public function getPost($cat1, $cat2) {
        return 'Categori 1 : ' . $cat1 . ' Categori 2 : ' . $cat2;
    }

    //
}
