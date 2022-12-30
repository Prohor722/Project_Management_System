@extends('layouts.student_layout')

@section('student_content')

        <div class="container-fluid">

            <div class="row">
                <!-- Task Information -->
                <div class="col-md-4 bg-light full-height">
                    <div class="d-flex flex-column align-items-center justify-content-center px-4">
                        <h4 class="pt-5">Task Title</h4>
                        <h6 class="pt-2 pb-4">{{$task->task_title}}</h6>
                        <h5>Task Description</h5>
                        <p class="text-break">{{$task->task_description}}</p>
                        <strong class="my-3">Deadline: {{$task->deadline}}</strong>
                        @if ($link)
                            <a href="{{asset('storage/'.$link)}}" download="{{$task->task_title}}" target="_blank" class="btn btn-primary">Check Submission</a>
                        @endif
                    </div>
                </div>

                <!-- Task Submission -->
                <div class="col-md-8">

                    <form action="{{url('/student/task/'.$task->id)}}" method="POST" enctype="multipart/form-data">
                        <div class="d-flex flex-column align-items-center justify-content-center mt-5 mb-4">
                            @if (date('Y-m-d')>$task->deadline)
                                <p class="alert alert-danger mt-5">Date expired</p>
                            @else
                                <div class="row col-md-9 mt-5 gy-0">
                                    @csrf
                                    <label for="file" class="form-label">Upload File</label>
                                        <input type="file" name="file" class="form-control"
                                            id="file">

                                    {{-- <div class="text-center mt-4">
                                        <p>Or, give drive/any storage link</p>
                                    </div>

                                    <label for="link" class="form-label">URL Link</label>
                                        <input type="text" name="link" class="form-control"
                                            id="link" value="{{old('link')}}"> --}}

                                    @if($link)
                                    <button type="submit" class="btn btn-success my-4 w-100">Update</button>

                                    @else
                                    <button type="submit" class="btn btn-secondary my-4 w-100">Submit</button>

                                    @endif

                                    @error('file')
                                        <p class="alert alert-danger text-center">{{$message}}</p>
                                    @enderror
                                    @if (session('msg'))
                                        <p class="alert alert-danger text-center">{{session('msg')}}</p>
                                    @endif
                                    @if (session('success'))
                                        <p class="alert alert-success text-center">{{session('success')}}</p>
                                    @endif

                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
