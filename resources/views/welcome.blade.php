<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

    <form action="{{URL::to('postAPI')}}" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="submit" name="">
    </form>

</body>
</html>