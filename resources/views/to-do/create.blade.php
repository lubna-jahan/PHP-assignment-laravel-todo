<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form class="col-6 card mb-3 p-4" method="POST" action="{{ route('to-do.store') }}">
        @csrf
        @method('POST')
        <label for="exampleFormControlInput1" class="form-label">To-Do List</label>
        <input type="text" name="task" class="form-control" id="exampleFormControlInput1"
            placeholder="Enter To-Do list">
        <button class="btn btn-primary mt-2">Save</button>
        </div>
    </form>
</body>

</html>