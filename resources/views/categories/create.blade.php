<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: url('https://static.vecteezy.com/system/resources/previews/007/136/288/original/seo-search-engine-optimization-information-internet-concept-photo.jpg');
            background-repeat: no-repeat;
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
    <h1 class="text-white"> Create A Category </h1>
    <form action="/categories/store" method="post" class="form">
        @csrf
    <label for="title"> Category Name: </label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
    @error('title')
       <div class="text-danger"> {{$message}}</div> 
    @enderror
    <br> <br>
    <label for="body"> About Category: </label>
    <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" ></textarea>
    <br>
    @error('body')
        <div class="text-danger">{{$message}}</div>
    @enderror
    <br>
    <div class="d-flex justify-content-between"> 
    <button type="submit" class="form-control w-25 bg-primary"> Create </button>
    <a href="/categories/index" class="btn btn-success" style="text-decoration:none;"> Back </a>
    </div>
    </form>
</div>
</body>
</html>



