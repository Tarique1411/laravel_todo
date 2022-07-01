<!doctype html>
<html lang="en">
  <head>
    <title>ToDo | Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="text-align: center" >
    <h1>All your ToDo list</h1>
    <a href="{{url('/create')}}"><button class="btn btn-primary" >Add Todo</button></a>
    <div>
        <h3>
            <x-alert />
        </h3>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Task</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)

            <tr>
              @if ($todo->completed)
             <td> <span style="text-decoration:line-through" >{{$todo->title}}</span></td>
             @else
              <td>{{$todo->title}}</td>
              @endif
                <td>{{$todo->updated_at}}</td>
                <td>
                    @if ($todo->completed)
                    <a href="{{route('todo.done',['id'=>$todo->id])}}"><button class="btn btn-warning" >Not Done</button></a>
                        @else
                    <a href="{{route('todo.done',['id'=>$todo->id])}}"><button class="btn btn-success" >Done</button></a>

                    @endif



                    <a href="{{route('edit.todo',['id'=>$todo->id])}}"><button class="btn btn-secondary" >Edit</button></a>
                    <a href="{{route('delete.todo',['id'=>$todo->id])}}"><button class="btn btn-danger" >Delete</button></a></td>
            </tr>
            @endforeach


        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
