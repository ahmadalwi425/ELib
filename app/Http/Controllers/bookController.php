<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genre;
use App\Models\category;
use App\Models\book;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = book::with('category', 'genre')->paginate(5);
        $cat = category::all();
        $gen = genre::all();
        return view('book.index',  compact('data','cat','gen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    
        //upload image
        if($request->file('cover')){
            $this->validate($request, [
                'cover'   => 'image|mimes:png,jpg,jpeg',
                'title'     => 'required',
                'description'      =>'required',
                'id_category'   => 'required', 
                'id_genre'   => 'required',
                'stock' => 'required'
            ]);
            $image = $request->file('cover');
            // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
            $image_name = $request->file('cover')->store('img','public');
            $book = book::create([
                'cover'     => $image_name,
                'title'     => $request->title,
                'description'     => $request->description,
                'id_category'   => $request->id_category,
                'id_genre'   => $request->id_genre,
                'stock'   => $request->stock,
            ]);
        }else{
            $this->validate($request, [
                'title'     => 'required',
                'description'      =>'required',
                'id_category'   => 'required', 
                'id_genre'   => 'required',
                'stock' => 'required'
            ]);
            $book = book::create([
                'title'     => $request->title,
                'description'     => $request->description,
                'id_category'   => $request->id_category,
                'id_genre'   => $request->id_genre,
                'stock'   => $request->stock,
            ]);
        }
        
        return redirect('book/index')
        ->with('success', 'book Successfully Added');
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
        $data = book::with('category', 'genre')->where('id', $id)->first();
        $cat = category::all();
        $gen = genre::all();
        return view('book.edit', compact('data','cat','gen'));
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
        if($request->file('cover')){
            $this->validate($request, [
                'cover'   => 'image|mimes:png,jpg,jpeg',
                'description'      =>'required',
                'title'     => 'required',
                'id_category'   => 'required', 
                'id_genre'   => 'required',
                'stock' => 'required'
            ]);
            $image = $request->file('cover');
            // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
            $book = book::with('category', 'genre')->where('id', $id)->first();
            if($book->cover && file_exists(storage_path('app/public/' , $book->cover))) {
                Storage::delete('public/' . $book->cover);
            }
            $image_name = $request->file('cover')->store('img','public');
            $book->title = $request->get('title');
            $book->id_category = $request->get('id_category');
            $book->id_genre = $request->get('id_genre');
            $book->stock = $request->get('stock');
            $book->cover = $image_name;
            $book->save();
        }else{
            $this->validate($request, [
                'title'     => 'required',
                'description'      =>'required',
                'id_category'   => 'required', 
                'id_genre'   => 'required',
                'stock' => 'required'
            ]);
            $book = book::with('category', 'genre')->where('id', $id)->first();
            $book->title = $request->get('title');
            $book->id_category = $request->get('id_category');
            $book->id_genre = $request->get('id_genre');
            $book->stock = $request->get('stock');
            $book->save();
        }
        
        return redirect('book/index')
        ->with('success', 'book Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        book::find($id)->delete();
        return redirect('book/index')
        -> with('success', 'book Successfully Deleted');
    }
}
