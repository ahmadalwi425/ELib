<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\User;
use App\Models\level;
use App\Models\borrow;


use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function borrow(){
        $data = borrow::with('user_borrow','user_librarian','book')->get();
        $pdf = PDF::loadview('pdf.borrow',['data'=>$data]);
        return $pdf->stream();
    }
}
