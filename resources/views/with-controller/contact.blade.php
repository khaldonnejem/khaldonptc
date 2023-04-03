<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>
    <ul>
        @foreach ($tasks as $index => $task)
            <li>{{ ++$index }}</li> {{-- ++ to begin the index from 1 --}}
            {{-- <li>{{ $task->name }}</li> --}}
            <li>{{ $task->id }}</li>
            <li>{{ $task->created_at }}</li>
            <li><a href="{{ $task->id }}">{{ $task->name }}</a></li>
            <hr>
        @endforeach
    </ul>
    {{-- <h1>{{ $tasks['task_1'] }}</h1> --}}
</body>

</html>
