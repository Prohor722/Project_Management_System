@extends('layouts.admin_layout')

@section('admin_content')
<style>
    .margin-b{
        margin-bottom: 32px;
    }
</style>

    <div class="container-fluid">

        <div class="row">

            <!-- Student Information section  -->
            <div class="col-md-3 d-flex bg-light flex-column align-items-center px-3 py-4 full-height">
                <img id="info-img" class="my-4 pt-4 w-50" src="{{asset('images/users/student.jpg')}}">
                <h4>Students Information</h4>

                @if($student)

                    <h6 class="mt-3">Name: <span id="student-name">{{$student->student_name}}</span></h6>
                    <div>
                        <h6 class="mt-3 d-inline">ID: {{$student->student_id}}</h6>
                        <span id="student_id"></span>
                    </div>
                    <div>
                        <h6 class="mt-3 d-inline">Department: {{$student->department}}</h6>
                        <span id="department"></span>
                    </div>
                    <div>
                        <h6 class="mt-3 d-inline">Email: {{$student->email}}</h6>
                        <span id="email"></span>
                    </div>
                    <div>
                        <h6 class="mt-3 d-inline">Status:
                            <span class="text-success @if(!$student->status) text-danger @endif">
                                {{ ($student->status)? "Active" : "In-Active"}}
                            </span>
                        </h6>
                    </div>

                @else
                    <h5 class="text-danger">Sorry no data found</h5>
                @endif
            </div>


        <!-- Students Table -->
        <div class="col-md-9 px-5">

            <div class="d-flex align-items-center">

                <!--Add Student Button -->
                <a href="{{url('/admin/student/create')}}">
                    <button class="btn btn-light border">Add Student</button>
                </a>

                <!-- Search bar  -->
                <form action="/admin/student/search" method="post"
                class="d-flex align-items-center ms-auto mt-3 mb-4 w-50 border rounded-pill" id="search">
                    @csrf
                    <input name="searchText" class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn border-0 p-0" id="search-icon" type="submit">
                        <img src="{{asset('/icons/search.svg')}}"
                        alt="search-icon" style="height:18px; padding-bottom: 2px" />
                    </button>
                </form>
            </div>

            <!-- students list  -->
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i = ($students->currentPage()-1)*5; ?>
                    @foreach($students as $student)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$student->student_id}}</td>
                            <td>{{$student->student_name}}</td>
                            <td>{{$student->department}}</td>
                            <td class="text-success @if(!$student->status) text-danger @endif">
                                {{ ($student->status)?
                                    "Active" :
                                    "In-Active"}}
                            </td>

                            <td class="d-flex">
                                <a href="{{url('/admin/student/info/'.$student->student_id)}}">
                                    <button class="btn btn-info">Info</button>
                                </a>
                                <a href="{{url('/admin/student/'.$student->id)}}" class="mx-1">
                                    <button class="btn btn-secondary">Edit</button>
                                </a>
                                <form action="/admin/student/{{$student->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete {{$student->student_id}} ?')"
                                     class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="mt-2">
                {{$students->links()}}
            </div>
        </div>
        </div>
    </div>

@endsection
