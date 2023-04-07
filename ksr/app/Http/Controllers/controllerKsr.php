<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class controllerKsr extends Controller
{
    public function view(){
        return view('invoice');
    }
    public function pdf(){
        return view('pdf2');
    }
    public function pdf2 (Request $request,$is_clicked){
        $is_clicked=true;
        return view('pdf2',compact('is_clicked'));
    }
    public function pdf3(){
        return view('pdf2');
    }
}
