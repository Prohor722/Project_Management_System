@extends('layouts.student_layout')

@section('student_content')
        <div class="container-fluid">

            <div class="row align-items-center justify-content-center">
                <div class="col-md-4 mt-5 p-5 border">
                    <h5 class="text-center mb-2">Change Password</h5>

                    <form action="{{url('/student/changePassword')}}" method="POST">
                        @csrf
                        <label for="old_password" class="form-label">Old Password</label>
                        <input type="password" name="old_password" class="form-control
                         @if('') border border-danger @endif" id="old_password">
                         @if('')
                             <p class="alert alert-danger">{{$message}}</p>
                         @endif

                        <label for="new_password" class="form-label mt-2">New Password</label>
                        <input type="password" name="new_password" class="form-control
                         @error('new_password') border border-danger @enderror" id="new_password">
                         @error('new_password')
                             <p class="alert alert-danger">{{$message}}</p>
                         @enderror

                        <label for="confirm_password" class="form-label mt-2">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control
                         @error('confirm_password') border border-danger @enderror" id="confirm_password">
                         @error('confirm_password')
                             <p class="alert alert-danger">{{$message}}</p>
                         @enderror

                         @if (session('msg'))
                             <p class="alert alert-danger mt-2">{{session('msg')}}</p>
                         @endif
                         @if (session('success'))
                             <p class="alert alert-success mt-2">{{session('success')}}</p>
                         @endif
                        <button type="submit" class="mt-4 btn btn-success">Change Password</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
