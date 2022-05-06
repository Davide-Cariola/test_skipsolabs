<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @guest
                    Benvenuto
                @else
                    Benvenuto {{Auth::user()->name}}
                @endguest
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                  <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('form-logout').submit();">Logout</a></li>
                    <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">
                        @csrf 
                    </form>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container-fluid p-5 bg-info text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-1">Form</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form class="p-5 card shadow" method="POST" action="{{route('store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome</label>
                      <input name="first_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cognome</label>
                        <input name="surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo</label>
                        <input name="street" placeholder="indirizzo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <input name="city" placeholder="città" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <input name="zip_code" placeholder="CAP" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <select name="country" id="country" class="form-control">
                            <option value="">-Nazione</option>
                        </select>
                    </div>
                    
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>