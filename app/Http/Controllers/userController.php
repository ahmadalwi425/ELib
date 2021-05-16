<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\level;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::with('level')->paginate(5);
        $lvl = level::all();
        return view('user.index',  compact('data','lvl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
        if($request->file('profile')){
            $this->validate($request, [
                'profile'   => 'image|mimes:png,jpg,jpeg',
                'username'     => 'required',
                'password'      =>'required',
                'id_level'   => 'required'
            ]);
            $image = $request->file('profile');
            // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
            $image_name = $request->file('profile')->store('img','public');
            $user = User::create([
                'profile'     => $image_name,
                'username'     => $request->username,
                'password'     => Hash::make($request->password),
                'id_level'   => $request->id_level,
            ]);
        }else{
            $this->validate($request, [
                'username'     => 'required',
                'password'      =>'required',
                'id_level'   => 'required'
            ]);
            $user = User::create([
                'username'     => $request->username,
                'password'     => Hash::make($request->password),
                'id_level'   => $request->id_level,
            ]);
        }
        
        return redirect('user/index')
        ->with('success', 'User Successfully Added');
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
        $data = User::with('level')->where('id', $id)->first();
        $lvl = level::all();
        return view('user.edit', compact('data','lvl'));
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
        if($request->file('profile')){
            $this->validate($request, [
                'profile'   => 'image|mimes:png,jpg,jpeg',
                'username'     => 'required',
                'id_level'   => 'required'
            ]);
            $image = $request->file('profile');
            // $image->storeAs('public/storage/img', Carbon::now()->toDateTimeString());
            $user = User::with('level')->where('id', $id)->first();
            if($user->profile && file_exists(storage_path('app/public/' , $user->profile))) {
                Storage::delete('public/' . $user->profile);
            }
            $image_name = $request->file('profile')->store('img','public');
            $user->username = $request->get('username');
            $user->id_level = $request->get('id_level');
            $user->profile = $image_name;
            $user->save();
        }else{
            $this->validate($request, [
                'username'     => 'required',
                'id_level'   => 'required'
            ]);
            $user = User::with('level')->where('id', $id)->first();
            $user->username = $request->get('username');
            $user->id_level = $request->get('id_level');
            $user->save();
        }
        
        return redirect('user/index')
        ->with('success', 'User Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('user/index')
        -> with('success', 'User Successfully Deleted');
    }
}
