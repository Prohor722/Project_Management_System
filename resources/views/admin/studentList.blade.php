@extends('layouts.admin_layout')

@section('admin_content')

    <div class="row g-0">

        <!-- Student Information section  -->
        <div class="col-md-3 bg-light d-flex flex-column align-items-center p-3 short-text">
            <img id="info-img" class="mb-3 mt-5 w-50" src="{{asset('/images/users/student.jpg')}}">
            <h3>Student's Information</h3>
            <h6 class="mt-3">Name: <span id="student-name">Neyamul haque al baker sinha</span></h6>
            <div>
                <h6 class="mt-3 d-inline">ID: </h6>
                <span id="student-name">UG02-15-10-046</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Status: </h6>
                <span id="student-name" class="text-success">Active</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Department: </h6>
                <span id="student-name">CSE</span>
            </div>
        </div>
        <div class="col-md-9 py-3 px-5 bg  ">

            <div class="d-flex align-items-center">

                {{-- Add Student Button  --}}
                <a href="{{url('/admin/student/create')}}">
                    <button class="btn btn-info">Add Student</button>
                </a>

                <!-- Search bar  -->
                <form class="d-flex align-items-center ms-auto my-5 w-50 border rounded-pill" id="search">
                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn border-0 text-dark p-0" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <!-- students list  -->

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->student_id}}</td>
                            <td>{{$student->student_name}}</td>
                            <td>{{$student->department}}</td>
                            <td>{{ ($student->status)? "Active" : "In-Active"}}</td>
                            <td class="d-flex mt-2">
                                <a href="{{url('/admin/student/'.$student->id)}}" class="">
                                    <button class="btn btn-info me-1">Edit</button>
                                </a>
                                <form action="/admin/student/{{$student->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>

@endsection
