<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <style>
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
        .main-container{
            display: flex;
            flex-direction:column;
            gap: 30px;
            width: 100%;
        }
        .container{
            padding: 5px;
            border: 3px solid black;
            border-radius: 6px;
        }
        .container form{
            display: flex;
            flex-direction:column;
            gap: 15px;
        }
        .container form input{
            padding: 10px;
            border: 1.5px solid black;
            border-radius: 6px;
        }
        .container form button{
            padding: 10px;
            width: 20%;
            background: black;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .container form button:hover{
            cursor: pointer;
            background: rgba(0, 0, 0, 0.658);
        }
        ::placeholder{
            color: black;
        }
        h1{
            padding: 10px 15px;
            border-style: dashed;
            font-style: italic;
            font-size: 1.8rem;
            background: black;
            color: #fff;
            border-radius: 6px;
            border: 2px solid #fff;
        }
    </style>
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
            <h1>Add Blog Post</h1>
            <form action="/create_post" method="post">
                @csrf
                <input type="text" placeholder="Blog Title..." name="title">
                <input type="text" placeholder="Blog Body..." name="body">
                <button type="submit" name="submit">Add Blog...</button>
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
