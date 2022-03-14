@extends('layouts.app')
@section('content')

                   <h2 class="my-4"><a href="{{ route('dashboard') }}"><i class="fa fa-list"></i></a> RSS csatornáim</h2>
  <form action="{{ route('rss.save') }}" method="post">    
    @csrf              
<div class="row">
  <div class="col">
    <input type="text" class="form-control @error('name') is-invalid  @enderror" name="name" placeholder="RSS csatorna neve" aria-label="RSS csatorna neve" value="{{old('name')}}">
    @error('name')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="col">
    <input type="text" class="form-control @error('url') is-invalid  @enderror" name="url" placeholder="RSS csatorna URL" aria-label="RSS csatorna URL" value="{{old('url')}}">
    @error('url')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>

  <div class="col-12 my-3 text-center">
    <button class="btn btn-success">Mentés</button>
  </div>
</div>
      
 
</form>
@endsection            