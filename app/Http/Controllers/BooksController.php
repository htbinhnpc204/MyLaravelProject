<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    function index(){
        return view('admin/bookmanager');
    }
}
