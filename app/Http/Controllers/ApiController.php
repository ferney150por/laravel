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

        //debug data in variables

        //ORM

        //length of array

        //add field name with firstname concact lastname 'Rodriguez'

        //encode data to json utf8

        //decode data to object and array

        //if user mail is correo@correo.com delete

        //replace in names "a" to "o"

        //add field subscribed_at with now time + 1 day in format DD-MM-AAAA

        //change to DATETIME MySQL


        //ADVANCED

        //inport base64 and convert to image

        //petition with Curl

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
