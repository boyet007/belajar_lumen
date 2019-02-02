<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    public function fooBar(Request $request) {
        return $request->path;
    }

    public function postUserProfile(Request $request) {
        // $user['name'] = $request->name;
        // $user['username'] = $request->username;
        // $user['password'] = $request->password;
        
        // return $user;
        
        //default apabila null
        // $request->input('name', 'John Doe');
        // return $request->all();

        if ($request->has('name')) {
            return 'success';
        } else {
            return 'fail';
        }

    }

    public function response() {
        //$data['status'] = 'Data sukses dibikin';
        //return (new Response($data, 201));
            //-> header('Content-Type', 'application/json');
            
        //return response ($data, 201);

        return response()->json([
            'message' => 'Fail! not found',
            'status' => false
        ], 404);
    }

    //
}
