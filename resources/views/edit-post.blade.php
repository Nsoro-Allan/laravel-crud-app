<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post - Page</title>
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="main-container">
    <h1>Laravel Crud App</h1>

    <div class="container">
        <h1>Edit Post</h1>
        <form action="/edit-post/{{$post->id}}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}">
            <input type="text" name="body" value="{{$post->body}}">
            <button type="submit">Update Post...</button>
        </form>
    </div>

</div>
</body>
</html>
