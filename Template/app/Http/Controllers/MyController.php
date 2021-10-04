<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function view3 (){
        $tieude = "Day la trang cua Huong";
        $noidung = "Hello moi nguoi";


        return view('home',[
            'tieude' => $tieude, 
            'noidung' => $noidung,
        ]);
           
        
    }
}
