<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function test4()
    {
        if(!isset($_POST["name1"])){
            $bau="";
        }else{
            $bau=$_POST["name1"];
        }
        return view('pages.test4')->with('bau',$bau);
    }
}
