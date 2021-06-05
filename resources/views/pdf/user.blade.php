<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($data as $row)
    <table style="border:0px;">
        <tr>
            <th>Username</th><td>:</td><td>{{ $row->username }}</td><td rowspan="2"><img src="{{asset('storage/'.$row->profile)}}" alt="" srcset="" style="width:100 px; height:100px;"></td>
        </tr>
        <tr>
            <th>Role</th><td>:</td><td>{{ $row->level->level_name }}</td>
        </tr>
        
            
        
    </table>
    @endforeach
</body>
</html>