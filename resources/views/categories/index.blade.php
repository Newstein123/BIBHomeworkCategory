<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> Newstein </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Category List </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/categories/create"> Create Category</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

   <div class="container my-5"> 
      @foreach ($categories as $category) 
      <div class="card my-3 rounded">
        <h1 class="card-title"><a href="/categories/{{$category->id}}" style="text-decoration: none">  {{$category->title}} </a> </h1>
        <p class="card-body">{{$category->body}}</p>
        <div class="card-footer d-flex">
           <button class="btn btn-success me-3"><a href="/categories/{{$category->id}}/edit" style="text-decoration: none" class="text-white"> edit</a></button> 
            <form action="/categories/{{$category->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure to delete')"> Delete </button>
            </form>
        </div>
      </div>
      @endforeach
    </div>
</body>
</html>

            


