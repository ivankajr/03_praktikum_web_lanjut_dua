<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('news   ', ['news' => news::news()]);
    }
}
