<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Show Task</h1>
    <div class="container">
      
    
    <table class="table">
        <thead>
          <tr>
            
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">status</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                
            
          <tr>
            <td>{{$task->name}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->status}}</td>
            <td>
              <form action="{{route('task.delete')}}" method="POST">
                @csrf
                <span><a href="{{route('task.edit',$task->id)}}" class="btn btn-primary">Edit</a></span>
                <input type="hidden" name="id" value="{{$task->id}}">
                <span><button class="btn btn-danger">Delete</button></span>
              </form>
            </td>
          </tr>
       
          @endforeach
        </tbody>
      </table>
      <a href="{{route('index.home')}}" class="btn btn-primary">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>