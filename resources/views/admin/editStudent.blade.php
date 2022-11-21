@extends('layouts.admin_layout')

@section('admin_content')

    <div class="row g-0">

        <!-- Student Information section  -->
        <div class="col-md-3 d-flex flex-column align-items-center p-3 short-text">
            <img id="info-img" class="my-3 w-50" src="{{asset('images/users/student.jpg')}}">
            <h4>Students Information</h4>
            <h6 class="mt-3">Name: <span id="student-name"></span></h6>
            <div>
                <h6 class="mt-3 d-inline">ID: </h6>
                <span id="student-name"></span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Department: </h6>
                <span id="student-name"></span>
            </div>
        </div>
        <div class="col-md-9 px-5 bg  ">

            <!-- Update student inputs  -->
            <form action="/admin/student/{{$student->id}}" method="POST">
                <div class="d-flex flex-column align-items-center justify-content-center my-5 pb-5">
                    <div class="row col-md-5">
                        @method('put')
                        @csrf
                        <label for="student_id" class="form-label">Student ID</label>
                        <input type="text" name="student_id" value={{old("student_id",$student->student_id)}} class="form-control" id="student_id">

                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="student_name" value={{old("student_name",$student->student_name)}} id="name" class="form-control">

                        <label for="department" class="form-label">Department</label>
                        <input type="text" id="department" name="department" value={{old("department",$student->department)}} class="form-control">

                        <button type="submit" class="btn btn-success pb-3 my-5 w-100">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
