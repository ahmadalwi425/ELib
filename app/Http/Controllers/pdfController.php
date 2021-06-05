<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\User;
use App\Models\level;


use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function print_user(){
        $data = User::all();
        $pdf = PDF::loadview('pdf.user',['data'=>$data]);
        // return $pdf->stream();
        // return view('pdf.user',  compact('data'));
    }
}
