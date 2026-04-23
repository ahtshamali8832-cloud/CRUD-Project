<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main">
        
        
        <table border="1" cellspacing="0px" cellpadding="7px" width="75%">
            <thead>
                <tr>
                    <th><button><a href="/">Add New</a></button></th>
                    <th colspan="7">All Students Detail</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Class</th>
                    <th>Roll No</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $id => $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->father_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->class }}</td>
                        <td>{{ $user->roll_no }}</td>
                        <td>
                            <a href="{{ route('Student.Detail',$user->id) }}" class="btn" style="background-color: green">view</a>
                            <a href="{{ route('Student.Delete',$user->id) }}" class="btn" style="background-color: red">Delete</a>
                            <a href="{{ route('Student.edit', $user->id) }}" class="btn" style="background-color: orange">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>