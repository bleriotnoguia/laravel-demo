<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sender Pusher</title>
</head>
<body>
    <form action="/pusher/sender" method="post">
        <input type="text" name="content">
        <input type="submit">
        {{ csrf_field() }}
    </form>
</body>
</html>