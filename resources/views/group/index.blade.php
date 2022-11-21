@extends('layouts.student_layout')

@section('student_content')
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

@endsection
