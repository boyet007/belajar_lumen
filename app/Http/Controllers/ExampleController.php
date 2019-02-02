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
        $this->middleware('age', ['only' => ['getUserId']]); 
        //only -> cuman fungsi didalam array yang kena middleware age
        //except -> semua fungsi kecuali didalam array kena middleware age
    }

    public function getUserId($id) {
        return 'User id = ' . $id;        
    }

    public function getPost($cat1, $cat2) {
        return 'Categori 1 : ' . $cat1 . ' Categori 2 : ' . $cat2;
    }

    public function getProfile() {
        //return 'Route Profile Action : ' . route('profile.action');
        echo "<a href='" . route('profile.action') . "'>My route profile</a>";
    }

    public function getProfileAction() {
        return 'Route profile : ' . route('profile');
    }

    //
}
