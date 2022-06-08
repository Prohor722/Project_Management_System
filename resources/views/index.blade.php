<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom CSS  -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/6dd3ae24df.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/images/logo/logo.png')}}" alt="Logo" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto me-5 d-flex justify-content-center align-items-center">
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container-fluid">
          <div class="row mt-5 g-0">
            <div class="col-md-4 offset-md-4 mt-5 shadow p-5">
              <!-- Add Notice  -->
              <div class="w3-container">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <font color="red"><strong>Whoops!</strong> There were some problems with your input.</font><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><font color="red">{{ $error }}</font></li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                    <div class="">
                    <font color="red">{{session('msg')}}</font>
                    </div>
              </div>
              <form class="" method="post" >
                @csrf
                <h4 class="text-center">Log In</h4>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input class="form-control" type="text" name="email" >
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input class="form-control" type="password" name="password" >
                </div>
                <input type="submit" class="btn btn-primary" name="signIn" value="Sign In">
              </form>
            </div>
          </div>
        </div>

</main>

<footer>
    <script src="./js/bootstrap.bundle.min.js"></script>
</footer>
</body>
</html>

