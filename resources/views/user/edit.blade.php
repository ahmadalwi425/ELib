@extends('layouts.appadmin')
@section('maincontent')
    <br>
    <div class="row">
        <div class="col-sm">
        <h1><small>Add User</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        
        </div>
        <div class="col-md-8">
        <form action="{{ url('user/update',$data->id ) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" aria-describedby="username" value="{{ $data->username }}">
                            </div>
                            <div class="form-group">
                                <label for="id_level">Role</label>
                                <select name="id_level" id="id_level" class="form-control">
                                    @foreach($lvl as $datalvl)
                                    <option value="{{$datalvl->id}}">{{$datalvl->level_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="profile">Photo Profile</label>
                                <input type="file" name="profile" class="form-control" id="profile" aria-describedby="your profile" >
                            </div>
                            <input type="submit" value="submit" class="btn btn-primary">
                        </form>
        </div>
        <div class="col-md-2">
        
        </div>
    </div>
    

    

@endsection