@extends('layouts.student_layout')

@section('student_content')
        <div class="container-fluid">

            <div class=" mt-5 px-5">
                <h5 class="text-center mb-4">All Tasks</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Task Title</th>
                        <th scope="col">Task Description</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Submission</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i = ($tasks->currentPage()-1) * 5; ?>
                    @foreach($tasks as $task)

                        <tr class="">
                            <td>{{++$i}}</td>
                            <td>{{$task->task_title}}</td>
                            <td class="text-break">{{$task->task_description}}</td>
                            <td>{{$task->deadline}}</td>
                            <td>
                                <a href="{{url('/student/task/'.$task->id)}}">Details</a>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

                <div class="mt-4">
                    {{$tasks->links()}}
                </div>
            </div>
        </div>

@endsection
