@extends('layouts.admin_layout')

@section('admin_content')

<style>
    .margin-b{
        margin-bottom: 32px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <!-- Teacher Information section  -->
        <div class="col-md-3 d-flex bg-light flex-column align-items-center px-3 py-4 full-height">
            <img id="info-img" class="my-4 pt-4 w-50" src="{{asset('/images/users/Teacher.jpg')}}">
            <h4>Teacher's Information</h4>
            <h6 class="mt-3">Name: <span id="t_name">{{$teacher->t_name}}</span></h6>
            <div>
                <h6 class="mt-3 d-inline">INS ID: {{$teacher->t_id}} </h6>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Department: {{$teacher->department}}</h6>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Email: {{$teacher->email}}</h6>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Status:
                    <span class="text-success @if(!$teacher->status) text-danger @endif">
                        {{ ($teacher->status)? "Active" : "In-Active"}}
                    </span>
                </h6>
            </div>
        </div>

        <div class="col-md-9 px-5 mt-4">

            <form  action="/admin/teacher/{{$teacher->id}}" method="POST">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="row col-md-9 gy-0">
                        @method("put")
                        @csrf
                        <div class="col-md-6">
                            <label for="t_id" class="form-label">Instructor ID</label>
                            <input type="text" name="t_id" class="form-control
                            @error('t_id') mb-0 border border-danger @else margin-b @endif"
                                id="t_id"  value="{{old('t_id',$teacher->t_id)}}">
                                @error('t_id')
                                    <p class="text-danger mb-2">{{$message}}</p>
                                @enderror

                            <label for="department" class="form-label">Department</label>
                            <input type="text" id="department" name="department" class="form-control
                                @error('department') border border-danger @else margin-b @endif"
                                value="{{old('department',$teacher->department)}}">
                                @error('department')
                                    <p class="text-danger mb-2">{{$message}}</p>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="t_name" class="form-label">Name</label>
                            <input type="text" name="t_name" id="t_name" class="form-control
                                @error('t_name') border border-danger @else margin-b @endif"
                                value="{{old('t_name',$teacher->t_name)}}">
                                @error('t_name')
                                    <p class="text-danger mb-2">{{$message}}</p>
                                @enderror

                            <label for="department" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control
                                @error('email') border border-danger @else margin-b @endif"
                                value="{{old('email',$teacher->email)}}">
                                @error('email')
                                    <p class="text-danger mb-2">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control
                            @error('password') mb-0 border border-danger @else margin-b @endif"
                                id="password" placeholder="Password Length > 4">
                                @error('password')
                                    <p class="text-danger mb-2">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control
                                @error('confirm_password') border border-danger @else margin-b @endif"
                                placeholder="Password Length > 4">
                                @error('confirm_password')
                                    <p class="text-danger mb-2">{{$message}}</p>
                                @enderror
                        </div>

                        <div class="mt-2 margin-b">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select name="status" class="form-control " id="exampleFormControlSelect1">
                                <option value={{true}}>Active</option>
                                <option value="" @if(!$teacher->status) selected @endif>In-Active</option>
                            </select>

                            <button type="submit" class="btn btn-success mt-4 w-100">Update</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
