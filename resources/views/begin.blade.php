<!doctype html>
<html>
<head>
<title> Begin </title>
</head>
<body>
    <div class= "container-sm">
    <h1> Please Enter your Name </h1>
    <form action="/enter-grades" methods="POST">
        @csrf
        @for ($i = 1; $i <=5; $i++)
        <div class="row">
            <label> Student {{i}} Name: </label>
            <input type="text" name="name_{{i}}" class="form-control">
</div>
@endfor
<hr/>
<div class="row">
    <button class="btn btn-primary btn-lg"> Save Students </button>
</div>
</form>
</div>




</body>
</html>