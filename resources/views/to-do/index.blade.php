<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <a href="{{ route('to-do.create') }}">Create To-Do List</a>
    <div>
        <table class="table-primary">
            <thead>
                <tr>
                    <th scope="col" class="p-2">Serial No</th>
                    <th scope="col" class="p-2">To-Do List</th>
                    <th scope="col" class="p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $toDo)
                <tr>
                    <th class="p-3">{{ $toDo->id }}</th>
                    <td class="p-3">{{ $toDo->task }}</td>
                    <td class="p-2">
                        <a href="{{ route('to-do.edit',$toDo) }}"><button name="edit"
                                class="btn btn-secondary">Edit</button></a>
                    </td>
                    <td class="p-2">
                        <a href="{{ route('to-do.destroy',$toDo) }}"><button name="delete"
                                class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>