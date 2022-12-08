@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg bg-light py-5 lrft-container">
                <form class="pb-5 mb-3" action="/teacher/notice" method="POST">
                    <h4 class="mb-3 text-center">Add Notice</h4>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Notice Description</label>
                        <textarea type="text" name="notice_description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">{{old('notice_description')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Add</button>
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
                        <th scope="col">Notice Description</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notices as $notice)

                        <tr class="">
                            <td>{{$notice->created_at}}</td>
                            <td class="text-break">{{$notice->notice_description}}</td>
                            <td class="">
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
