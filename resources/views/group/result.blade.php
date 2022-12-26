@extends('layouts.student_layout')

@section('student_content')

<div class="m-5">
    <table class="table table-hover border border-secondary mb-0">
        <thead>

            <h5 class="text-center my-3">Group Students Mark</h5>

            <tr class="border">
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
            </tr>
        </thead>
        <tbody>
            @foreach ($studentDetails as $student)
                <tr class="border">
                    @if ($student && $student->po1)
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->po1}}</td>
                        <td>{{$student->po2}}</td>
                        <td>{{$student->po3}}</td>
                        <td>{{$student->po4}}</td>
                        <td>{{$student->po5}}</td>
                        <td>{{$student->po6}}</td>
                        <td>{{$student->po7}}</td>
                        <td>{{$student->po8}}</td>
                        <td>{{$student->po9}}</td>
                        <td>{{$student->po10}}</td>
                        <td>{{$student->po11}}</td>
                        <td>{{$student->po12}}</td>
                        <td>{{$student->total}}</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
