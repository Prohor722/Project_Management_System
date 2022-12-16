@extends('layouts.teacher_layout')

@section('teacher_content')

<div class="container-fluid">

    <div class="d-flex justify-content-center align-items-center gap-5 mt-5">

        <div class="px-5 py-4 shadow border">
            <div class="d-flex">
                <img id="info-img" class="pb-2 mx-auto mt-3 mb-3" width="120px" src="{{asset('/images/users/Teacher.jpg')}}">
            </div>
            <p>ID: <span class="ps-2">{{$teacher->t_id}}</span></p>
            <p>Name: <span class="ps-2">{{$teacher->t_name}}</span></p>
            <p>Department: <span class="ps-2">{{$teacher->department}}</span></p>
            <p>Email: <span class="ps-2">{{$teacher->email}}</span></p>
        </div>

        <div class="py-3 px-5 shadow border">
            <form action="{{url('/teacher/profile/update')}}" method="post">
                @method('put')
                @csrf
                <label for="t_name" class="form-label">Name</label>
                <input type="text" id="t_name" name="t_name" class="form-control
                @error('t_name') border border-danger @enderror"
                    value="{{old('t_name',$teacher->t_name)}}">
                    @error('t_name')
                        <p class="text-danger mb-1">{{$message}}</p>
                    @enderror

                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control
                @error('email') border border-danger @enderror"
                    value="{{old('email',$teacher->email)}}">
                    @error('email')
                        <p class="text-danger mb-1">{{$message}}</p>
                    @enderror

                <label for="password" class="form-label">Current Password</label>
                <input type="password" id="password" name="password" class="form-control
                @error('password') border border-danger @enderror"
                    value="{{old('password')}}">
                    @error('password')
                        <p class="text-danger mb-1">{{$message}}</p>
                    @enderror
                    @if(session('msg'))
					    <p class="text-danger mb-1">{{session('msg')}}</p>
				    @endif

                <label for="update_password" class="form-label">Update Password</label>
                <input type="password" id="update_password" name="update_password" class="form-control
                @error('update_password') border border-danger @enderror"
                    value="{{old('update_password')}}">
                    @error('update_password')
                        <p class="text-danger mb-1">{{$message}}</p>
                    @enderror

                <button type="submit" class="btn btn-success mt-3">Update</button>
            </form>
        </div>
    </div>

</div>

@endsection
