@extends('layouts.appadmin')
@section('maincontent')
    <br>
    <div class="row">
        <div class="col-sm">
        <h1><small>Edit book</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
        
        </div>
        <div class="col-md-8">
        <form action="{{ url('book/update',$data->id ) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" name="title" class="form-control" id="title" aria-describedby="title" value="{{ $data->title }}">
                            </div>
                            <div class="form-group">
                                <label for="id_category">Category</label>
                                <select name="id_category" id="id_category" class="form-control">
                                    @foreach($cat as $datacat)
                                    <option value="{{$datacat->id}}">{{$datacat->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_genre">Genre</label>
                                <select name="id_genre" id="id_genre" class="form-control">
                                    @foreach($gen as $datagen)
                                    <option value="{{$datagen->id}}">{{$datagen->genre_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" aria-describedby="description" required>{{ $data->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" name="stock" class="form-control" id="stock" aria-describedby="stock" value="{{ $data->stock }}" required>
                            </div>
                            <div class="form-group">
                                <label for="cover">Photo cover</label>
                                <input type="file" name="cover" class="form-control" id="cover" aria-describedby="book cover" >
                            </div>
                            <input type="submit" value="submit" class="btn btn-primary">
                        </form>
        </div>
        <div class="col-md-2">
        
        </div>
    </div>
    

    

@endsection