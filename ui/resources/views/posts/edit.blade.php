<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <div class="container mt-2">
<form method="post" action="{{route('posts.update',$post->id)}}">
    @csrf
    @method('PUT')
<div class="form-group">
<input type="text" placeholder="title" value="{{$post->title}}" class="form-control" name='title'>
@error('title')
<div class="alert alert-danger mt-1 mb-1">{{$message}}</div> @enderror
<input type="text" placeholder="descriptoin" class="form-control" value="{{$post->description}}" name="des">
@error('des')
<div class="alert alert-danger">
    {{$message}}
</div>
@enderror
<input type="submit" class="btn btn-primary" value="Update">
</div>
</form>
    </div>
</body>
</html>
