

<head>
    <title>{{ $title = 'Fashion/Blog' }}</title>
</head>


@extends('posts.create') 

@section('content') 

                @if(count($posts) > 0) 


                    {{--  @foreach($posts as $post)  --}}

                        <h2>{{ $posts->title }}</h2>

                        <h2>{{ $posts->body }}</h2>

               {{--   @endforeach   --}}

                @endif 


@stop  

{{--  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <h2>Hello world</h2>
</body>

</html>  --}}