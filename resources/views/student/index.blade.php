<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom CSS  -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/6dd3ae24df.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./images/logo/logo.png" alt="Logo" height="50">
          </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto me-5 d-flex justify-content-center align-items-center">
              <li class="nav-item">
              <a class="rmvunderline" href="{{route('logout.index')}}"><font color="White">Log Out</font></a><br/>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 bg bg-light py-5">
              <!-- Add Notice  -->
              <form class="" method="post" >
                @csrf
                <h4 class="mb-3 text-center">Welcome Student</h4>
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