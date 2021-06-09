@extends('layouts.appadmin')
@section('maincontent')
    <br>
    <div class="row">
        <div class="col-sm">
        <h1><small>User table</small></h1>
        </div>
        <div class="col-sm">
        </div><div class="col-sm">
        </div><div class="col-sm">
        </div><div class="col-sm">
        </div><div class="col-sm">
        </div>
        <div class="col-sm">
            
        </div>
    </div>

    <table class="table table-bordered table-hover" style="border-radius:3px;">
        <tr>
            <th>No</th>
            <th>Borrower</th>
            <th>Librarian</th>
            <th>Book</th>
            <th>Date Borrow</th>
            <th>Date Due</th>
            <th>Date Return</th>
            <th>Action</th>
        </tr>
        @foreach($data as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->user_borrow->username }}</td>
            <td>
            @if($row->user_librarian == null)
                -
            @else
                {{ $row->user_librarian->username }}
            @endif
            </td>
            <td>{{ $row->book->title }}</td>
            <td>
            @if($row->date_borrow == null)
                -
            @else
                {{ $row->date_borrow }}
            @endif
            </td>
            <td>
            @if($row->date_due == null)
                -
            @else
                {{ $row->date_due }}
            @endif
            </td>
            <td>
            @if($row->date_return == null)
                @if($row->date_borrow == null)
                -
                @else
                Not Returned Yet
                @endif
            @else
                {{ $row->date_return }}
            @endif
            </td>
            <td>
            @if($row->date_borrow == null)
                @if($row->status == "refused")
                    <a class="btn btn-danger" href="#" disabled>Refused</a>
                @else
                    <a class="btn btn-success" href="{{ url('borrow/acc',$row->id) }}">Acc</a>
                    <a class="btn btn-danger" href="{{ url('borrow/refuse',$row->id) }}">Refuse</a>
                @endif
            @else
                @if($row->status == "borrowed")
                    <a class="btn btn-success" href="{{ url('borrow/return',$row->id) }}">Return</a>
                @elseif($row->status == "returned")
                    <a class="btn btn-success" href="#" disabled>Returned</a>
                @endif
            @endif
            </td>
        </tr>
        @endforeach
    </table>
    {{$data->links('pagination::bootstrap-4')}}

@endsection