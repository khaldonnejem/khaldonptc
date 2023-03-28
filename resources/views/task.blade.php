<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>

<body>
    <h1>
        Hello <?php echo $name; ?>
    </h1>
    <h3>Tasks: </h3>

    <ul>
        @foreach ($tasks as $key => $task)
            <li><a href="{{ 'show/' . $key }}">{{ $task }}</a></li>
        @endforeach
    </ul>
</body>

</html>
