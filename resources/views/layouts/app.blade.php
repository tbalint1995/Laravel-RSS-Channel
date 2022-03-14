<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>RSS reader</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">

                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Kezdőoldal</a>
              </li>

              @auth

              <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">Csatornáim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Kilépés</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Regisztráció</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Belépés</a>
              </li>
              @endauth
             



            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        @if( Session::has('success') )
        <div class="alert alert-success my-3">{{ Session::get('success') }}</div>
        @endif
    @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 
  </body>
</html>