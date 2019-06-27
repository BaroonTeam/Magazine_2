<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class AuthorsController extends Controller
{
    //
    public function index(){
        $users=User::all();
        return view('authors.index',compact('users'));
    }   

}
