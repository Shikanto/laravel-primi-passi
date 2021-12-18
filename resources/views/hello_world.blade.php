<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who I am</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background-color: black;
        }

        .container{
            width: 1040px;
            margin: 50px auto;
            text-align: center;
            color: white;
        }

        img{
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ODISSEA NELLO SPAZIO....</h1>
        <img src="{{asset('img/'. $url)}}" alt=""> 
        <h2>... o meglio odissea in laravel!</h2>
    </div>
</body>
</html>