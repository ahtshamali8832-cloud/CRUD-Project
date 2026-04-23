<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Student Details</title>
    <style>
        body{
            background-color: #d7f09d
        }
        #main{
            width: 35%;
            margin: 0px 20%;
            /* color: white; */
        }
        table{
            width: 150%;
            text-align: center;
        }
        table tr:hover{
            background-color: rgb(44, 80, 156);
            color: white;
        }
       
    </style>
</head>
<body><div id="main">
    <h2>Student Details</h2>
    <table border="1" cellspacing="0px" cellpadding="5px">
         @foreach ($data as $id => $user)
        <tr>
            <td style="text-align: left;"><strong >ID</strong></td>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Name</strong></td>
            <td>{{ $user->name }}</p></td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Father's Name</strong></td>
            <td>{{ $user->father_name }}</td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Email</strong></td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Phone No</strong></td>
            <td>{{ $user->phone }}</td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Class</strong></td>
            <td>{{ $user->class }}</td>
        </tr>
        <tr>
            <td style="text-align: left;"><strong>Roll No</strong></td>
            <td>{{ $user->roll_no }}</td>
        </tr>
        @endforeach
    </table>
</div>
    
   
        
    {{-- <p><strong></strong> : {{ $user->name }}</p>
    <p><strong>Father's Name</strong> : {{ $user->father_name }}</p>
    <p><strong>Email</strong> : {{ $user->email }}</p>
    <p><strong>Phone No</strong> : {{ $user->phone }}</p>
    <p><strong>Class</strong> : {{ $user->class }}</p>
    <p><strong>Roll No</strong> :{{ $user->roll_no }}</p> --}}
    
    
    
</body>
</html>