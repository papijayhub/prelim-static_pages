<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jyclmbprelim | Home</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style>
        body{background-color: powderblue;
        }
        div{
            margin-top:15%;
            text-align:center;
        }        
    </style>
</head>
<body>
<div>
    <h1> Home Page </h1>
    
  Home | <a href="{{url('/profile')}}">Profile</a> | <a href="{{url('/Online')}}">Online</a>
</div>
</body>
</html>