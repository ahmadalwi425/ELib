@extends('layouts.appadmin')
@section('maincontent')
    <br>
    <div class="row">
        <div class="col-sm">
        <h1><small>book table</small></h1>
        </div>
        <div class="col-sm">
        </div><div class="col-sm">
        </div><div class="col-sm">
        </div><div class="col-sm">
        </div><div class="col-sm">
        </div>
        <div class="col-sm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Add book
            </button>

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add New book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="{{ url('book/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" aria-describedby="title" required>
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
                                <textarea name="description" class="form-control" id="description" aria-describedby="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" name="stock" class="form-control" id="stock" aria-describedby="stock" required>
                            </div>
                            <div class="form-group">
                                <label for="cover">Book Cover</label>
                                <input type="file" name="cover" class="form-control" id="cover" aria-describedby="your cover" >
                            </div>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered table-hover" style="border-radius:3px;">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Cover</th>
            <th>Category</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Action</th>
        </tr>
        @foreach($data as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->title }}</td>
            <td><img src="{{asset('storage/'.$row->cover)}}" alt="" srcset="" style="width:100 px; height:100px;"></td>
            <td>{{ $row->category->category_name }}</td>
            <td>{{ $row->genre->genre_name }}</td>
            <td>{{ $row->description }}</td>
            <td>{{ $row->stock }}</td>
            <td><a class="btn btn-primary" href="{{ url('book/edit',$row->id) }}">Edit</a>
            <a class="btn btn-danger" href="{{ url('book/destroy',$row->id) }}" onclick="return confirm('Are you sure wanna delete this book?');">Delete</a></td>
        </tr>
        @endforeach
    </table>
    {{$data->links('pagination::bootstrap-4')}}

@endsection