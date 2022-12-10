<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
          <div class="row mt-4 g-0">
            <div class="col-md-4 offset-md-4 mt-2 shadow p-5">

              <form class="" action="{{url('/login')}}" method="post" >
                @csrf
                <h4 class="text-center">Log In</h4>
                <div class="mb-3">
                  <label class="form-label">ID</label>
                  <input type="text" class="form-control
                  @error('user_id') border border-danger @enderror" name="user_id" >

                  @error('user_id')<p class="text-danger">{{$message}}</p> @enderror

                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input class="form-control
                  @error('password') border border-danger @enderror" type="password" name="password" >

                  @error('password')<p class="text-danger">{{$message}}</p> @enderror

                </div>

                <div class="mb-3">
                    <label class="form-label">Select User</label>
                    <select class="form-control" name="role">
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

				<div class="w3-container">
                  {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif --}}

				  @if(session('msg'))
					<div class="alert alert-danger">{{session('msg')}}</div>
				  @endif
              </div>
                <button type="submit" class="btn btn-info">Sign In</button>
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

