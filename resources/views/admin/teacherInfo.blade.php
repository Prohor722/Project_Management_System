@extends('layouts.admin_layout')

@section('admin_content')

<div class="container-fluid">

    <div class="row">

        <!-- Teacher Information Section  -->
        <div class="col-md-3 bg-light d-flex flex-column align-items-center p-3 full-height">
            <img id="info-img" class="mb-3 mt-5 w-50" src="{{asset('/images/users/Teacher.jpg')}}">
            <h3>Teacher's Information</h3>

            @if($teacher)

                <h6 class="mt-3">Name: <span id="student-name">{{$teacher->t_name}}</span></h6>
                <div>
                    <h6 class="mt-3 d-inline">Status:
                        <span class="text-success @if(!$teacher->status) text-danger @endif">
                            {{ ($teacher->status)? "Active" : "In-Active"}}
                        </span>
                    </h6>

                </div>
                <div>
                    <h6 class="mt-3 d-inline">INS ID: </h6>
                    <span id="student-name">{{$teacher->t_id}}</span>
                </div>
                <div>
                    <h6 class="mt-3 d-inline">Department: </h6>
                    <span id="student-name">{{$teacher->department}}</span>
                </div>
                <div>
                    <h6 class="mt-3 d-inline">Email: </h6>
                    <span id="student-name">{{$teacher->email}}</span>
                </div>

            @else
                <h5 class="text-danger">Sorry no data found</h5>
            @endif
        </div>


        <div class="col-md-9 py-3 px-5">

            {{-- Add Teacher Button  --}}
            <div class="d-flex align-items-center">
                <a href="{{url('/admin/teacher/create')}}">
                    <button class="btn btn-light border">Add Teacher</button>
                </a>

                <!-- Search bar  -->
                <form action="/admin/teacher/search" method="post"
                class="d-flex align-items-center ms-auto mt-3 mb-4 w-50 border rounded-pill" id="search">
                    @csrf
                    <input name="searchText" class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn border-0 p-0" id="search-icon" type="submit">
                        <img src="{{asset('/icons/search.svg')}}"
                        alt="search-icon" style="height:18px; padding-bottom: 2px" />
                    </button>
                </form>
            </div>


            <!-- Teachers list  -->

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">INS ID</th>
                    <th scope="col">Teacher's Name</th>
                    <th scope="col">Dept.</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $i = ($teachers->currentPage()-1) * 5; ?>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$teacher->t_id}}</td>
                            <td>{{$teacher->t_name}}</td>
                            <td>{{$teacher->department}}</td>
                            <td class="text-success @if(!$teacher->status) text-danger @endif">
                            {{ ($teacher->status)?
                                "Active" :
                                "In-Active"}}</td>
                            <td class="d-flex">
                                <a href="{{url('/admin/teacher/info/'.$teacher->t_id)}}" class="">
                                    <button class="btn btn-info">Info</button>
                                </a>
                                <a href="{{url('/admin/teacher/'.$teacher->id)}}" class="">
                                    <button class="btn btn-secondary mx-1">Edit</button>
                                </a>
                                <form action="/admin/teacher/{{$teacher->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete {{$teacher->t_id}} ?')"
                                    class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="mt-2">
                {{$teachers->links()}}
            </div>
        </div>
    </div>

</div>

@endsection
