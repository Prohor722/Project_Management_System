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
                <table class="table">
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
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
                    <button type="submit" class="btn btn-info">Add</button>
                </form>
            </div>



            <div class="col-md-4 px-4 pt-5">
                <h4 class="mb-3 text-center">Group Members</h4>
                <table class="table">
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
                            <td>{{$i++}}</td>
                            <td>{{$link->task_id}}</td>
                            <td><a href='{{$link->link}}' target="_blank">Check</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        {{-- @foreach ($group_students as $group_student)
            {{$group_student->students->student_name}}
        @endforeach --}}
        {{-- Bottom Sections  --}}
        <div class="row">
            <div class="col-md-6">
                {{-- <div class="col-md-4 px-4 pt-5">
                    <h4 class="mb-3 text-center">Student Marks</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">po1</th>
                            <th scope="col">po2</th>
                            <th scope="col">po3</th>
                            <th scope="col">po4</th>
                            <th scope="col">po5</th>
                            <th scope="col">po6</th>
                            <th scope="col">po7</th>
                            <th scope="col">po8</th>
                            <th scope="col">po9</th>
                            <th scope="col">po10</th>
                            <th scope="col">po11</th>
                            <th scope="col">po12</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i =1; ?>
                        @foreach($student_marks as $marks)
                            <tr class="border">
                                <td>{{$i++}}</td>
                                <td>UG02-41-16-046</td>
                                <td>04</td>
                                <td>01</td>
                                <td>04</td>
                                <td>03</td>
                                <td>09</td>
                                <td>04</td>
                                <td>05</td>
                                <td>08</td>
                                <td>07</td>
                                <td>04</td>
                                <td>04</td>
                                <td>06</td>
                                <td>74</td>
                                <td>
                                    <form action="/teacher/group/manage/{{$gs->id}}" method="POST">
                                        @method('put')
                                        @csrf
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div> --}}
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>


@endsection
