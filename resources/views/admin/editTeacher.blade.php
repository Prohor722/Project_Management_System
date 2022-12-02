@extends('layouts.admin_layout')

@section('admin_content')

    <div class="row g-0">

        <!-- Student Information section  -->
        <div class="col-md-3 d-flex flex-column align-items-center p-3 short-text">
            <img id="info-img" class="my-3 w-50" src="{{asset('/images/users/Teacher.jpg')}}">
            <h3>Teacher's Information</h3>
            <h6 class="mt-3">Name: <span id="student-name"></span></h6>
            <div>
                <h6 class="mt-3 d-inline">INS ID: </h6>
                <span id="teacher-name"></span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Department: </h6>
                <span id="dept"></span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Email: </h6>
                <span id="email"></span>
            </div>
        </div>

        <div class="col-md-9 py-3 px-5 bg  ">

            <!-- Edit teacher inputs  -->
            <form action="/admin/teacher/{{$teacher->id}}" method="post">
                @method("put")
                @csrf
                <div class="d-flex flex-column align-items-center justify-content-center my-5 ">
                    <div class="row col-md-5">
                        <label for="t_id" class="form-label">Instructor ID</label>
                        <input type="text" class="form-control" name="t_id" id="t_id" value="{{old('t_id',$teacher->t_id)}}">

                        <label for="t_name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="t_name" id="t_name" value="{{old('t_name',$teacher->t_name)}}">

                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{old('email',$teacher->email)}}">

                        <label for="department" class="form-label">Department</label>
                        <input type="text" class="form-control" name="dept" id="dept" value="{{old('dept',$teacher->dept)}}">

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select name="status" value='{{$teacher->status? true: false}}' class="form-control" id="exampleFormControlSelect1">
                                <option value={{true}}>Active</option>
                                <option value=""  @if(!$teacher->status) selected @endif>In-Active</option>
                            </select>
                        </div>

                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp">

                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" aria-describedby="emailHelp">

                        <button type="submit" class="btn btn-success mt-5 w-100">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
