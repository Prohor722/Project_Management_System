@extends('layouts.admin_layout')

@section('admin_content')
    <div class="row g-0">

        <!-- Teacher Information Section  -->
        <div class="col-md-3 bg-light d-flex flex-column  align-items-center p-3 short-text">
            <img id="info-img" class="mb-3 mt-5 w-50" src="{{asset('/images/users/Teacher.jpg')}}">
            <h3>Teacher's Information</h3>
            <h6 class="mt-3">Name: <span id="student-name">Roktakin ahmed jobin bhuiyan</span></h6>
            <div>
                <h6 class="mt-3 d-inline">Status: </h6>
                <span id="student-name" class="text-success">Active</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">INS ID: </h6>
                <span id="student-name">CS-0245158</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Department: </h6>
                <span id="student-name">CSE</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Email: </h6>
                <span id="student-name">Roktakin.ahmed@sub.edu.bd</span>
            </div>
        </div>


        <div class="bg   col-md-9 py-3 px-5">

            {{-- Add Teacher Button  --}}
            <div class="d-flex align-items-center">
                <a href="{{url('/admin/teacher/create')}}">
                    <button class="btn btn-info">Add Teacher</button>
                </a>

                <!-- Search bar  -->
                <form class="d-flex align-items-center ms-auto my-5 w-50 border rounded-pill" id="search">
                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn border-0 text-dark p-0 bg-white" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <!-- Teachers list  -->

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">INS ID</th>
                    <th scope="col">Teacher's Name</th>
                    <th scope="col">Dept.</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$teacher->t_id}}</td>
                            <td>{{$teacher->t_name}}</td>
                            <td>{{$teacher->dept}}</td>
                            <td>{{ ($teacher->status)? "Active" : "In-Active"}}</td>
                            <td class="d-flex mt-2">
                                <a href="{{url('/admin/teacher/'.$teacher->id)}}" class="">
                                    <button class="btn btn-info me-1">Edit</button>
                                </a>
                                <form action="/admin/teacher/{{$teacher->id}}" method="POST">
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

@endsection
