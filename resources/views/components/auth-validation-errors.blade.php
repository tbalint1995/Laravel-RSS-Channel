@props(['errors'])

@if ($errors->any())
    <div class="alert alert-danger mt-4">
    
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
   
    </div>
@endif