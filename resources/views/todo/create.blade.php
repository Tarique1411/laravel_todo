<!doctype html>
<html lang="en">
  <head>
    <title>To Do | Create</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style= "text-align:center" >
<br>
<br>
<br>
<br>
<br>
<h3>
    <x-alert />
</h3>

    <h1>Create Your ToDo Task</h1>
    <form action="/upload" method="post">
        @csrf
        <div class="form-group">
          <input type="text" name="title">
        <button class="btn btn-success" type="submit" >Add</button>
        </div>
    </form>
    <a href="{{url('/index')}}"><button class="btn btn-primary" >Back</button></a>


   </body>
</html>
