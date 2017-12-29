{{--  
@extends('posts.create') 

@section('content')




    <h1>{{ $post->title }}</h1>



@stop  --}}




<head>
    <title>{{ $title = 'Fashion/Blog' }}</title>
</head>


@extends('posts.create')


        

@section('content')


 @if(count($posts) > 0)
    @foreach($posts as $post)

            
            <h2>{{ $posts->title }}</h2>

            <h2>{{ $posts->body }}</h2>

        @endforeach
@endif





@stop 