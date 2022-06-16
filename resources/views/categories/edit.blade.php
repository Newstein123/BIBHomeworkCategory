
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: url('https://th.bing.com/th/id/OIP.6LNqllIaID8C9kKYpZY41gHaEK?pid=ImgDet&w=1920&h=1080&rs=1');
            background-position: center;
        }
        input, textarea {
            background: linear-gradient(gold, pink);
        }
    </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50"> 
        <h1 class="text-white"> Edit Category </h1>
    <form action="/categories/{{$category->id}}" method="post">
        @csrf
        @method('PUT')
    <label for="title"> Category Name: </label>
    <input type="text" name="title" value="{{$category->title}}" class="form-control @error('title') is-invalid @enderror">
    <br> <br>
    @error('title')
        <div class="text-white"> {{$message}}</div>
    @enderror
    <label for="body"> About Category: </label>
    <textarea name="body" id="" cols="30" rows="10"  class="form-control @error('body') is-invalid @enderror"> {{$category->body}}</textarea>
    <br>
    @error('body')
    <div class="text-white"> {{$message}}</div>
    @enderror
<br>
<div class="d-flex justify-content-between"> 
    <button type="submit"  class="form-control w-25 bg-primary"> Update </button>
    <a href="categories/index" class="btn btn-success" style="text-decoration:none;"> Back </a>
</div>
    </form>
    </div>
</body>
</html>
