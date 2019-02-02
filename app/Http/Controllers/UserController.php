<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getUserId($id) {
        $user = User::find($id);

        if($user) {
            return response()->json([
                'status' => true,
                'message' => 'User berhasil ditemukan',
                'data' => $user
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User tidak ada dalam database',
                'data' => ''
            ], 404);
        }
    }

    //
}
