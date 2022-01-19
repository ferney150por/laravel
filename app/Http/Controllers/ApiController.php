<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $usersArray = $users->toArray();

        foreach ($usersArray as $key => $value) {
            $usersArray[$key]['name'] = $usersArray[$key + 1 ]['name'] . ' Morales';
        }

        
        return response()->json($usersArray);
    }

    /**
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user){
        // $data = User::find($user);
        return response()->json($user);
    }
}
