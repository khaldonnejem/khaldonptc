<!DOCTYPE html>
{{-- <html lang="en"> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    {{-- <h1>Hello {{ $name }}</h1> --}}
    <h1>
        Hello <?php echo $name; ?>
    </h1>
    <form action="about" method="POST">
        @csrf
        <input type="text" name="name" id="name">
        <input type="submit" value="send">
    </form>

</body>

</html>
