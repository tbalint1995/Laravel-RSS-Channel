@extends('layouts.app')
@section('content')

<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form  method="post"  class="row mt-5" action="{{ route('register') }}">
    @csrf
   
        <div class="col-md-6 col-lg-4 mx-auto shadow">
 
    <div class="row my-4">
        <div class="col-12">
            <h3 class="text-center mt-4">Regisztráció</h3>
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Név</label>
            <input type="text" class="form-control "value="{{ old('name') }}" name="name" id="name" value="">
        </div>
      
            <div class="col-12">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control "value="{{ old('email') }}" name="email" id="email" value="">
            </div>
            <div class="col-12">
                <label for="password" class="form-label">Jelszó</label>
                <input type="password" class="form-control " name="password" id="password" value="">
            </div>
            <div class="col-12">
                <label for="password_confirmation" class="form-label">Jelszó ismét</label>
                <input type="password" class="form-control " name="password_confirmation" id="password_confirmation" value="">
            </div>

            <div class="col-12 text-center pt-4">
                <button type="submit" class="btn btn-secondary">Regisztráció</button>
            </div>

            <div class="col-12 text-center pt-4">
      
                <a href="{{route('login')}}" class="d-inline-block mx-2">Belépés</a>
            </div>
    </div>
</div>


</form>
@endsection


 