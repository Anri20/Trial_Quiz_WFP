<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    function library(){
        $data = DB::table('libraries')->get();
        return view('library', compact('data'));
    }
}
