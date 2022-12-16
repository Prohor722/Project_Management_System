@extends('layouts.admin_layout')

@section('admin_content')

<div class="container-fluid">

    <div class="d-flex justify-content-center align-items-center gap-5 mt-5">

        <div class="px-5 pt-3 pb-5 shadow border">
            <div class="d-flex">
                <img id="info-img" class="pb-2 mx-auto my-5" width="120px" src="{{asset('/images/users/admin.jpg')}}">
            </div>
            <p>ID: <span class="ps-2">{{$admin->admin_id}}</span></p>
            <p>Email: <span class="ps-2">{{$admin->email}}</span></p>
        </div>

        <div class="py-3 px-5 shadow border">
            <form action="{{url('/admin/profile/update')}}" method="post">
                @method('put')
                @csrf
                <label for="admin_id" class="form-label">ID</label>
                <input type="text" id="admin_id" name="admin_id" class="form-control
                @error('admin_id') border border-danger @enderror"
                    value="{{old('admin_id',$admin->admin_id)}}">
                    @error('admin_id')
                        <p class="text-danger mb-1">{{$message}}</p>
                    @enderror

                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control
                @error('email') border border-danger @enderror"
                    value="{{old('email',$admin->email)}}">
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
