@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid">
        <div class="row">

            <!-- Add task  -->
            <div class="col-md-3 bg bg-light py-5 left-container">

                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach

                <form class="" action="/teacher/tasks" method="POST">
                    <h4 class="mb-3 text-center">Add Task</h4>
                    @csrf
                    <div class="mb-3">
                        <label for="taskTitle" class="form-label">Task Title</label>
                        <input type="text" name="task_title" class="form-control" id="taskTitle" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" name="task_description" class="form-control" id="description" aria-describedby="emailHelp"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="deadline">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>

                <!-- Previous Task  -->
                <!-- <h4 class="mt-5 mb-3 text-center">Previous Tasks</h4>
                <ul>
                  <li class="fw-bold">Project Report<i class="fas fa-circle text-success ms-2"></i></li>
                  <li>Project Proposal</li>
                  <li>Project Presentation Slide</li>
                  <li>Project Demo</li>
                </ul> -->

            </div>
            <div class="col-md-9 bg   pt-lg-3 pb-5 right-container">

                <!-- Search bar  -->
                <form class="d-flex align-items-center ms-auto mb-3 border rounded-pill" id="search">
                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn border-0 text-dark p-0" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <!-- students list  -->

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Task Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Submissions</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->created_at}}</td>
                                <td class="text-break">{{$task->task_title}}</td>
                                <td class="text-break">{{$task->task_description}}</td>
                                <td>{{$task->deadline}}</td>
                                <td><a href="#">Check Submissions</a></td>
                                <td class="d-flex mt-2">
                                    <a href="{{url('/teacher/tasks/'.$task->id)}}" class="">
                                        <button class="btn btn-info me-1">Edit</button>
                                    </a>
                                    <form action="/teacher/tasks/{{$task->id}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this task: {{$task->task_title}} ?')"
                                        class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Group Submissions   -->
            {{-- <div class="col-md-3 bg bg-light py-3 right-container">
                <h4 class="mt-1 mb-3">Project Proposal</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Group ID</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>GCS-04125</td>
                        <td class="text-success"><i class="fas fa-circle status-icon"></i></td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td class="text-danger"><i class="fas fa-circle status-icon"></i></td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td class="text-success"><i class="fas fa-circle status-icon"></i></td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td class="text-success"><i class="fas fa-circle status-icon"></i></td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td class="text-success"><i class="fas fa-circle status-icon"></i></td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td class="text-danger"><i class="fas fa-circle status-icon"></i></td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td class="text-danger"><i class="fas fa-circle status-icon"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>

@endsection
