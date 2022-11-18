@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg bg-light py-5 left-container">

            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
            <!-- Add group  -->
                <form class="mb-5 pb-5" action="/teacher/topic" method="POST">
                    @csrf
                    <h4 class="mb-3 text-center">Add Topic</h4>
                    <div class="mb-3">
                        <label class="form-label">Topic ID</label>
                        <input type="text" class="form-control" name="topic_id" value="{{old('topic_id')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Topic Description</label>
                        <input type="text" class="form-control" name="topic_description" value="{{old('topic_description')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teacher ID</label>
                        <input type="text" class="form-control" name="t_id" value="{{old('t_id')}}">
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>



            </div>
            <div class="col-md-9 bg   py-3 right-container">

{{--                <!-- Search bar  -->--}}
{{--                <form class="d-flex align-items-center ms-auto mb-1" id="search">--}}
{{--                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">--}}
{{--                    <button class="btn border-0 text-dark p-0" id="search-icon" type="submit"><i class="fas fa-search"></i></button>--}}
{{--                </form>--}}

                <!-- Group Table  -->

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Topic ID</th>
                            <th scope="col">Topic Description</th>
                            <th scope="col">Teacher's ID</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($topics as $topic)
                                <tr>
                                    <td>{{$topic->topic_id}}</td>
                                    <td>{{$topic->topic_description}}</td>
                                    <td>{{$topic->t_id}}</td>
                                    <td class="d-flex">
                                        <a href="{{url('/teacher/topic/'.$topic->id)}}" class="">
                                            <button class="btn btn-info me-1">Edit</button>
                                        </a>
                                        <form action="/teacher/topic/{{$topic->id}}" method="POST">
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