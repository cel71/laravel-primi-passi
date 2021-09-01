<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="box">
        <h1>Hello World, {{ $text }}</h1>
        <div class="links">
            <a href="">Home</a>
            <a href="">Info</a>
            <a href="">Contatti</a>
            <a href="">Maps</a>
        </div>
    </div>

    <style>
        .box {
            width: 400px;
            height: 200px;
            margin: 0 auto;
            border: 1px solid black;
            margin-top: 50px;
        }
        .box h1, div {
            text-align:center;
            margin-top: 40px;
        }

        .links a {
            padding: 15px;
        }
    </style>
</body>
</html>