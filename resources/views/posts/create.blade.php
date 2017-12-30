<head>
    <title>{{ $title = 'Post Message' }}</title>
</head>

@include('layout.header')

@include('layout.home-nav')





<div class="container">

<form class="form-signin" style="margin-top: 50px;" action="/posts" method="POST">

    {{ csrf_field() }}

    <h2 class="form-signin-heading text-muted">Publish a post</h2>

    <label for="inputEmail" class="sr-only">Title</label>

    <p><input type="text" class="form-control" placeholder="Title" name="title" autofocus></p>

    <label for="inputPassword" class="sr-only">Body</label>

    <p><textarea id="body" rows="7" cols="40" class="form-control" name="body" placeholder="Posts"></textarea></p>
    
    
    <div class="form-group">
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Publish">
    </div>   
    
        
    @include('partials.error')




</form>
</div>
<!-- /container -->

@include('layout.footer')


