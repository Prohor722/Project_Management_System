@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 ps-5 pe-3 bg-light">

                <h4 class="mb-3 text-center mt-5">Add Student</h4>

                <form class="mb-5" action="/teacher/group/manage/" method="POST">
                    <div class="mb-3">
                        <label  for="student_id" class="form-label">Student Id</label>
                        <select name="group_status" value='{{old("student_id")}}' class="form-control" name="student_id" id="student_id">
                            @foreach ($studentDetails as $student)
                                <option value="{{$student->student_id}}">{{$student->student_id}}</option>
                            @endforeach
                        </select>

                        @error('student_id')
                        <p class="text-danger p-2 mt-2 border border-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po1" class="form-label">po1</label>
                            <input type="number" name="po1" class="form-control"
                            id="po1" value='{{old("po1")}}' />
                                @error('po1')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po2" class="form-label">po2</label>
                            <input type="number" name="po2" class="form-control"
                            id="po2" value='{{old("po2")}}' />
                                @error('po2')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po3" class="form-label">po3</label>
                            <input type="number" name="po3" class="form-control"
                            id="po3" value='{{old("po3")}}' />
                                @error('po3')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po4" class="form-label">po4</label>
                            <input type="number" name="po4" class="form-control"
                            id="po4" value='{{old("po4")}}' />
                                @error('po1')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po5" class="form-label">po5</label>
                            <input type="number" name="po5" class="form-control"
                            id="po5" value='{{old("po5")}}' />
                                @error('po5')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po6" class="form-label">po6</label>
                            <input type="number" name="po6" class="form-control"
                            id="po6" value='{{old("po6")}}' />
                                @error('po6')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>
                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po7" class="form-label">po7</label>
                            <input type="number" name="po7" class="form-control"
                            id="po7" value='{{old("po7")}}' />
                                @error('po7')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po8" class="form-label">po8</label>
                            <input type="number" name="po8" class="form-control"
                            id="po8" value='{{old("po8")}}' />
                                @error('po8')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po9" class="form-label">po9</label>
                            <input type="number" name="po9" class="form-control"
                            id="po9" value='{{old("po9")}}' />
                                @error('po9')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po10" class="form-label">po10</label>
                            <input type="number" name="po10" class="form-control"
                            id="po10" value='{{old("po10")}}' />
                                @error('po10')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po11" class="form-label">po11</label>
                            <input type="number" name="po11" class="form-control"
                            id="po11" value='{{old("po11")}}' />
                                @error('po11')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po12" class="form-label">po12</label>
                            <input type="number" name="po12" class="form-control"
                            id="po12" value='{{old("po12")}}' />
                                @error('po12')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="row mt-4 px-2">
                        <button type="submit" class="btn btn-info">Add</button>
                    </div>
                </form>
            </div>

            <div class="col-md-8 px-4 mt-5 mb-5">
                <h4 class="mb-3 text-center">Student Marks</h4>

                @foreach ($studentDetails as $student)
                    <?php $marks=$student->student_marks; ?>
                    <table class="table pb-5 mb-3">
                        <thead>
                            <div class="d-flex my-2">
                                @if($marks)
                                    <button class="btn btn-success ms-auto">Update</button>
                                @endif
                            </div>
                            <h6 class="text-center p-2 bg-dark text-white @if(!$marks) mt-5 @endif">{{$student->student_id}}</h6>
                            <tr class="border">
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
                            @if($marks)
                                <tr class="border">
                                    <td>{{$marks->po1}}</td>
                                    <td>{{$marks->po2}}</td>
                                    <td>{{$marks->po3}}</td>
                                    <td>{{$marks->po4}}</td>
                                    <td>{{$marks->po5}}</td>
                                    <td>{{$marks->po6}}</td>
                                    <td>{{$marks->po7}}</td>
                                    <td>{{$marks->po8}}</td>
                                    <td>{{$marks->po9}}</td>
                                    <td>{{$marks->po10}}</td>
                                    <td>{{$marks->po11}}</td>
                                    <td>{{$marks->po12}}</td>
                                    <td>{{$marks->total}}</td>
                                    {{-- <td>
                                        <form action="/teacher/group/manage/marks/{{$marks->id}}" method="POST">
                                            @method('put')
                                            @csrf
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endif

                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>

    </div>


@endsection
