<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{url('css/home.css')}}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student List GPA')</title>
</head>
<body>

<div class="test2">
<h1>Student List GPA</h1>
</div>

<div class="test1">
    <p class="class1">Simple student database</p>
    <br>
        <p>Select action</p>
        <a href="/create">Add Student</a>
        <a href="/list">View Students</a>
</div>
        
</body>
</html>
<script src="{{url('js/home.js')}}"></script>