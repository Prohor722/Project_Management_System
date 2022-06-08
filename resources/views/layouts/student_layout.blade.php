<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom CSS  -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/6dd3ae24df.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/student">
                <img src="{{asset('images/logo/logo.png')}}" alt="Logo" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto me-5 d-flex justify-content-center align-items-center">

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('images/users/student.jpg')}}" class="rounded-circle border border-3 border-primary" height="50" alt="" srcset="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="{{route('logout.index')}}">Log out</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student-tasks')}}">
                            Tasks
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student-notice')}}">
                            Notice
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    @yield('student_content')
</main>

<footer>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</footer>
</body>
</html>
