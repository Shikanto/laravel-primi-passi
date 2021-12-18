<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container{
            width: 1040px;
            margin: 0 auto;
            text-align: center;
        }



        .big-title{
            text-align: center;
            font-weight: bolder;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: lightgray;
            padding: 50px 0;
        }

        
        nav{
            
            background-color: #666666;
            padding: 30px 0;
        }
        ul{
            list-style-type: none;
            display: flex;
            justify-content: space-around;
            font-size: 20px;
            font-weight: bold;
            
        }

        a{
            text-decoration: none;
            
            color: whitesmoke;
        }

        .main{
            background-color: black;
            color: white;
        }

        .main h1{
            padding: 40px 0;
        }
       
    </style>
</head>
<body>
    <header>
        <div class="big-title">
            <h1>{{$text}}</h1>
            <h4>{{$textSmaller}}</h2>
        </div>
        <nav>
            <ul>
                <li><a href="http://127.0.0.1:8000/welcome">{{$link1}}</a></li>
                <li><a href="http://127.0.0.1:8000/who_i_am">{{$link2}}</a></li>
                <li><a href="http://127.0.0.1:8000/my_contacts">{{$link3}}</a></li>
                <li><a href="http://127.0.0.1:8000/wonderland">{{$link4}}</a></li>
                <li><a href="http://127.0.0.1:8000/my_pirate_ship">{{$link5}}</a></li>
                <li><a href="http://127.0.0.1:8000/hello_world">{{$link6}}</a></li>
            </ul>
        </nav>
    </header>
    <div class="main">
        <div class="container">
            <h1>This is a "Home"</h1>
            <div>
                <img src="{{asset('img/'. $url)}}" alt="">
            </div>
        </div>
    </div>
</body>
</html>