<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="./.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main-container">
    <h1>Laravel Crud App</h1>

    <div class="container">
        <h1>Dashboard</h1>

        @auth
        <h2>Welcome User You are logged in...</h2>
        <form action="/logout" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form><br>

        <div class="container">
            <h1>Add New Post</h1>
            <form action="/create_post" method="post">
                @csrf
                <input type="text" placeholder="Post Title..." name="title">
                <input type="text" placeholder="Post Body..." name="body">
                <button type="submit" name="submit">Create Post...</button>
            </form>
        </div>

        @else
            <h2>You are not logged in...</h2>
            <h3>Please Loggin here?</h3><a href="./home">login</a>

        @endauth

    </div>

</div>
</body>
</html>
