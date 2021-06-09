<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\level;
use App\Models\book;
use App\Models\borrow;
use Carbon\Carbon;
use Auth;

class borrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = borrow::with('user_borrow','user_librarian','book')->paginate(5);
        return view('borrow.index',  compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        
            //jika yang membuat data adalah client
            $borrow = borrow::create([
                'id_borrower'     => Auth::User()->id,
                'id_book'   => $id,
            ]);
            return redirect('user2/index');
    }

    public function acc($id)
    {
        
            $borrow = borrow::with('user_borrow','user_librarian','book')->where('id', $id)->first();
            $borrow->id_librarian     = Auth::User()->id;
            $borrow->date_borrow   = Carbon::now();
            $borrow->date_due = Carbon::now()->addDays(7);
            $borrow->status = "borrowed";
            $borrow->save();
            $book = book::with('category', 'genre')->where('id', $borrow->book->id)->first();
            $new_stock = $borrow->book->stock;
            $new_stock -=1;
            $book->stock = $new_stock;
            $book->save();
            return redirect('borrow/index');
    }

    public function refuse($id)
    {
            $borrow = borrow::with('user_borrow','user_librarian','book')->where('id', $id)->first();
            $borrow->status = "refused";
            $borrow->save();
            return redirect('borrow/index');
    }

    public function return($id)
    {
        $borrow = borrow::with('user_borrow','user_librarian','book')->where('id', $id)->first();
        $borrow->date_return = Carbon::now();
        $borrow->status = "returned";
        $borrow->save();
        $book = book::with('category', 'genre')->where('id', $borrow->book->id)->first();
        $new_stock = $borrow->book->stock;
        $new_stock +=1;
        $book->stock = $new_stock;
        $book->save();
        return redirect('borrow/index');
    }

    public function store2(Request $request)
    {
            //jika yang membuat data adalah petugas
            $borrow = borrow::create([
                'id_borrower'     => $request->id_borrower,
                'id_librarian'     => Auth::User()->id,
                'id_book'   => $request->id_book,
                'date_borrow'   => Carbon::now(),
                'date_due' => Carbon::now()->addDays(7),
                'status' => "borrowed",
            ]);
            return redirect('borrow/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
