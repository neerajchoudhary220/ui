<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div class="container mt-2">
        {{-- create msg --}}
        @if($message = Session::get('create'))
        <div class="alert alert-secondary">
            <span>{{$message}}</span>
        </div>
        @endif
        {{-- update msg --}}
        @if($message = Session::get('update'))
        <div class="alert alert-info">
            <span>{{$message}}</span>
        </div>
        @endif
{{-- delete msg--}}
        @if($message = Session::get('delete'))
        <div class="alert alert-danger">
            <span>{{$message}}</span>
        </div>
        @endif

        <table class="table table-bordered text-center">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $data )
            <tr>

                <td>{{$data->id}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td>

                    <form action="{{route('posts.destroy',$data->id)}}" method="POST">
                        <a href="{{route('posts.create')}}" class="btn btn-secondary">Create</a>
                    <a href="{{route('posts.edit',$data->id)}}" class="btn btn-info">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>


            </tr>
            @endforeach
        </table>
        {{-- {{!! $posts->links() !!}} --}}
    </div>
</body>
</html>
