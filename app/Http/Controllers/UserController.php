<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
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
        $users = User::whereNotNull('name')->get(['id','name']);
        
        return view('users.index');
    }

}
