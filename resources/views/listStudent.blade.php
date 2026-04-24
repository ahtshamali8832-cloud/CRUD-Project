<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container bg-body-tertiary rounded-4 mt-4 p-4 border" id="form-id">
        <table class="table table-bordered table-hover my-5 border border-dark " width="75%">
            <h2 class="text-center mt-5 fw-bold fs-2 text-success">All Students Detail</h2>
            <a href="/" class="btn btn-primary">Add New</a>
            <thead>
                    <tr>
                        <th>SR No</th>
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
                            <td>{{ $data->firstItem() + $loop->index }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->father_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->class }}</td>
                            <td>{{ $user->roll_no }}</td>
                            <td>
                                <a href="{{ route('Student.Detail', $user->id) }}" class="btn btn-success">view</a>
                                <a href="{{ route('Student.Delete', $user->id) }}" class="btn btn-danger">Delete</a>
                                <a href="{{ route('Student.edit', $user->id) }}" class="btn btn-warning">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $data->links('pagination::bootstrap-5') }}
            </div>

    </div>

</body>

</html>