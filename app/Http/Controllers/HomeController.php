<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $articles=new Article;
        $archives= $articles::selectRaw('year(created_at) year , monthname(created_at) month ,count(*) published')->groupBy('year','month')->orderByRaw('min(created_at) desc')->get()->toArray();
        return view('dashboard', compact('categories','archives'));
    }
}
