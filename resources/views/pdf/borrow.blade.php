<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered table-hover" style="border-radius:3px;">
        <tr>
            <th>No</th>
            <th>Borrower</th>
            <th>Librarian</th>
            <th>Book</th>
            <th>Date Borrow</th>
            <th>Date Due</th>
            <th>Date Return</th>
            <th>Status</th>
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
            <td>{{ $row->status }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>