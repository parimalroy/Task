<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Create Task</h1>
    <div class="container">
        <form action="{{route('task.store')}}" method="post">
            @csrf
            <div class="mb-3 w-50">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
              </div>
              <div class="mb-3 w-50">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3 w-50">
                <select class="form-select" aria-label="Default select example" name="status">
                    <option selected>Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>

                  </select>
              </div>
              <input type="submit" value="Save" class="btn btn-primary">
              <a href="{{route('task.show')}}" class="btn btn-primary">View Task</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>