
    <div class="container">

        @if(count($errors))
        <div class="alert-danger">
            <ul>
            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>
            @endforeach    
            </ul>    
        </div>
        @endif
    </div>