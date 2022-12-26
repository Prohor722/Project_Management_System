@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid mt-5">
        <div class="d-flex px-3 pb-3">
            <a href='{{url("/teacher/group/manage/marks/".$group_id)}}'
            class="btn btn-dark ms-auto">Manage Marks</a>
        </div>

        {{-- Top 3 sections  --}}

        <div class="row mx-3 border">

            <div class="col-md-4 px-3 pt-5">
                <h4 class="mb-3 text-center">Group Members</h4>
                <table class="table table-hover">
                    <thead>
                    <tr class="border">
                        <th scope="col">No.</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i =1; ?>
                    @foreach($group_students as $gs)
                        <tr class="border">
                            <td>{{$i++}}</td>
                            <td>{{$gs->student_id}}</td>
                            <td>
                                <form action="/teacher/group/manage/{{$gs->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete {{$gs->student_id}} ?')"
                                    class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="col-md-4 bg-light border-left border-right px-4 pt-5">
                <form class="pb-5 mb-3" action="/teacher/group/manage/{{$group_id}}" method="POST">
                    <h4 class="mb-3 text-center">Add Student</h4>
                    <div class="mb-3">
                        <label for="student_id" class="form-label">Student Id</label>
                        <input type="text" name="student_id" class="form-control"
                        id="student_id" value='{{old("student_id")}}' />
                            @error('student_id')
                            <p class="text-danger p-2 mt-2 border border-danger">{{$message}}</p>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Add</button>
                </form>
            </div>



            <div class="col-md-4 px-4 pt-5">
                <h4 class="mb-3 text-center">Group Submissions</h4>
                <table class="table table-hover">
                    <thead>
                    <tr class="border">
                        <th scope="col">No.</th>
                        <th scope="col">Task ID</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i =1; ?>
                    @foreach($group_links as $link)
                        <tr class="border">
                            <td>{{++$i}}</td>
                            <td>{{$link->task_id}}</td>
                            <td>
                                {{-- <a href='{{$link->link}}' target="_blank">Check</a> --}}
                                <a href="{{asset('storage/'.$link->link)}}" download="{{asset('storage/'.$link)}}" target="_blank">Download</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection
