<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Page</title>
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main-container">
    <h1>Laravel Crud App</h1>

    <div class="container">
        <h1>Register</h1>
        <form action="/register" method="post">
            @csrf
            <input type="email" placeholder="Email..." name="email" required>
            <input type="text" placeholder="Username..." name="name" required>
            <input type="password" placeholder="Password..." name="password" required>
            <button type="submit" name="submit">Register...</button>
        </form>
    </div>

    <div class="container">
        <h1>Login</h1>
        <form action="/login" method="post">
            @csrf
            <input type="text" placeholder="Username..." name="loginname" required>
            <input type="password" placeholder="Password..." name="loginpassword" required>
            <button type="submit" name="submit">Login...</button>
        </form>
    </div>

</div>
</body>
</html>
