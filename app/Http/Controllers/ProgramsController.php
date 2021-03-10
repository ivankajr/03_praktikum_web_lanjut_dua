<?php

namespace App\Http\Controllers;

use App\Models\programs;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function index(){
        return view('program',['program' => programs::program()]);
    }
}
