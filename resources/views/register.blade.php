<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(\Illuminate\Support\Facades\Session::has('age-error'))
    {{\Illuminate\Support\Facades\Session::get('age-error')}}
    @endif
<form method="post" action="{{route('auth.register')}}">
    @csrf

    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="phone" placeholder="Phone"><br>
    <input type="date" name="date" placeholder="Phone"><br>
    <br>
    <button type="submit">Submit</button>

</form>


</body>
</html>
