@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-light py-5 lrft-container">
                <form class="mb-5 pb-3" action="/teacher/notice" method="POST">
                    <h4 class="mb-3 text-center">Edit Notice</h4>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Notice Description</label>
                        <textarea type="text" name="notice_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">{{old('notice_description',$notice->notice_description)}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Course Code</label>
                        <input type="text" name="course_code" value="{{old('course_code',$notice->course_code)}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Deadline</label>
                        <input type="date" name="deadline" value="{{old('deadline',$notice->deadline)}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>

            </div>
            <div class="col-md-9 bg   py-5 right-container">
                {{--                <div class="ms-auto">--}}
                {{--                    <a class="btn btn-dark m-2" href="/teacher/notice">New</a>--}}
                {{--                </div>--}}
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Notice Description</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notices as $notice)

                        <tr>
                            <td>{{$notice->created_at}}</td>
                            <td>{{$notice->deadline}}</td>
                            <td>{{$notice->course_code}}</td>
                            <td class="text-break">{{$notice->notice_description}}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{url('/teacher/notice/'.$notice->id)}}" class="">
                                        <button class="btn btn-info me-1">Edit</button>
                                    </a>

                                    <form action="/teacher/notice/{{$notice->id}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection