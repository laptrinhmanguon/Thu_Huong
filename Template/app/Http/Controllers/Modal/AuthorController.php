<?php

namespace App\Http\Controllers\Modal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function index(Request $_request) {
        // $authorList = DB::table('author')->paginate(20);

        

        return view('modal/author/index');
 
    }

    public function viewAdd(Request $_request){

    }
}
