@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid">

        <div class="mx-2 my-4 px-4 py-2 border border-secondary">

            <h5 class="text-center my-3">Update Student Marks</h5>

            <form class="mb-3" action="/teacher/group/student/mark/update/{{$studentMark->student_id}}" method="POST">
                @csrf
                @method('put')

                <div class="d-flex text-center">

                    <p class="p-2 border border-dark text-center rounded mx-auto">
                        {{$studentMark->student_id}}
                    </p>
                    {{-- <div class="mb-3">
                    </div> --}}
                    {{-- <div class="col-md-2 mx-auto">
                        <label  for="student_id" class="form-label">Student Id</label>
                        <select name="student_id" value='{{old("student_id")}}' class="form-control" id="student_id">
                            @foreach ($studentDetails as $student)
                                <option value="{{$student->student_id}}">{{$student->student_id}}</option>
                            @endforeach
                        </select>

                        @error('student_id')
                        <p class="text-danger mb-0">{{$message}}</p>
                        @enderror
                    </div> --}}

                </div>

                <div class="d-flex gap-4 mt-4">

                    <div>
                        <label for="po1" class="form-label
                        @error('po1') text-danger @enderror">po1</label>
                        <input type="number" name="po1" class="form-control
                        @error('po1') border border-danger @enderror"
                        id="po1" value='{{old("po1",$studentMark->po1)}}' placeholder="(max: {{$marks->po1}})"/>
                            @error('po1')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po2" class="form-label
                        @error('po2') text-danger @enderror">po2</label>
                        <input type="number" name="po2" class="form-control
                        @error('po2') border border-danger @enderror"
                        id="po2" value='{{old("po2",$studentMark->po2)}}' placeholder="(max: {{$marks->po1}})"/>
                            @error('po2')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po3" class="form-label
                        @error('po3') text-danger @enderror">po3</label>
                        <input type="number" name="po3" class="form-control
                        @error('po3') border border-danger @enderror"
                        id="po3" value='{{old("po3",$studentMark->po3)}}' placeholder="(max: {{$marks->po3}})"/>
                            @error('po3')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po4" class="form-label
                        @error('po4') text-danger @enderror">po4</label>
                        <input type="number" name="po4" class="form-control
                        @error('po4') border border-danger @enderror"
                        id="po4" value='{{old("po4",$studentMark->po4)}}' placeholder="(max: {{$marks->po4}})"/>
                            @error('po4')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po5" class="form-label
                        @error('po5') text-danger @enderror">po5</label>
                        <input type="number" name="po5" class="form-control
                        @error('po5') border border-danger @enderror"
                        id="po5" value='{{old("po5",$studentMark->po5)}}' placeholder="(max: {{$marks->po5}})"/>
                            @error('po5')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po6" class="form-label
                        @error('po6') text-danger @enderror">po6</label>
                        <input type="number" name="po6" class="form-control
                        @error('po6') border border-danger @enderror"
                        id="po6" value='{{old("po6",$studentMark->po6)}}' placeholder="(max: {{$marks->po6}})"/>
                            @error('po6')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                </div>

                <div class="d-flex gap-4 mt-4">

                    <div>
                        <label for="po7" class="form-label
                        @error('po7') text-danger @enderror">po7</label>
                        <input type="number" name="po7" class="form-control
                        @error('po7') border border-danger @enderror"
                        id="po7" value='{{old("po7",$studentMark->po7)}}' placeholder="(max: {{$marks->po7}})"/>
                            @error('po7')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po8" class="form-label
                        @error('po8') text-danger @enderror">po8</label>
                        <input type="number" name="po8" class="form-control
                        @error('po8') border border-danger @enderror"
                        id="po8" value='{{old("po8",$studentMark->po8)}}' placeholder="(max: {{$marks->po8}})"/>
                            @error('po8')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po9" class="form-label
                        @error('po9') text-danger @enderror">po9</label>
                        <input type="number" name="po9" class="form-control
                        @error('po9') border border-danger @enderror"
                        id="po9" value='{{old("po9",$studentMark->po9)}}' placeholder="(max: {{$marks->po9}})"/>
                            @error('po9')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po10" class="form-label
                        @error('po10') text-danger @enderror">po10</label>
                        <input type="number" name="po10" class="form-control
                        @error('po10') border border-danger @enderror"
                        id="po10" value='{{old("po10",$studentMark->po10)}}' placeholder="(max: {{$marks->po10}})"/>
                            @error('po10')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po11" class="form-label
                        @error('po11') text-danger @enderror">po11</label>
                        <input type="number" name="po11" class="form-control
                        @error('po11') border border-danger @enderror"
                        id="po11" value='{{old("po11",$studentMark->po11)}}' placeholder="(max: {{$marks->po11}})"/>
                            @error('po11')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>

                    <div>
                        <label for="po12" class="form-label
                        @error('po12') text-danger @enderror">po12</label>
                        <input type="number" name="po12" class="form-control
                        @error('po12') border border-danger @enderror"
                        id="po12" value='{{old("po12",$studentMark->po12)}}' placeholder="(max: {{$marks->po12}})"/>
                            @error('po12')
                            <p class="text-danger mt-1 mb-0">{{$message}}</p>
                            @enderror
                    </div>
                </div>

                <div class="d-flex mt-4">
                    <button type="submit" class="btn btn-secondary border px-4 py-2 ms-auto">Add</button>
                </div>

            </form>

        </div>


        {{-- <div class="row">
            <div class="col-md-4 ps-5 pe-4 bg-light border">

                <h5 class="text-center my-3">Update Student Marks</h5>

                <form class="mb-3" action="/teacher/group/student/mark/update/{{$studentMark->student_id}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <p class="p-2 border border-dark text-center rounded">
                            {{$studentMark->student_id}}
                        </p>
                    </div>

                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po1" class="form-label
                            @error('po1') text-danger @enderror">po1 (max: {{$marks->po1}})</label>
                            <input type="number" name="po1" class="form-control
                            @error('po1') border border-danger @enderror"
                            id="po1" value='{{old("po1",$studentMark->po1)}}' />
                                @error('po1')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po2" class="form-label
                            @error('po2') text-danger @enderror">po2 (max: {{$marks->po2}})</label>
                            <input type="number" name="po2" class="form-control
                            @error('po2') border border-danger @enderror"
                            id="po2" value='{{old("po2",$studentMark->po2)}}' />
                                @error('po2')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po3" class="form-label
                            @error('po3') text-danger @enderror">po3 (max: {{$marks->po3}})</label>
                            <input type="number" name="po3" class="form-control
                            @error('po3') border border-danger @enderror"
                            id="po3" value='{{old("po3",$studentMark->po3)}}' />
                                @error('po3')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po4" class="form-label
                            @error('po4') text-danger @enderror">po4 (max: {{$marks->po4}})</label>
                            <input type="number" name="po4" class="form-control
                            @error('po4') border border-danger @enderror"
                            id="po4" value='{{old("po4",$studentMark->po4)}}' />
                                @error('po4')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po5" class="form-label
                            @error('po5') text-danger @enderror">po5 (max: {{$marks->po5}})</label>
                            <input type="number" name="po5" class="form-control
                            @error('po5') border border-danger @enderror"
                            id="po5" value='{{old("po5",$studentMark->po5)}}' />
                                @error('po5')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po6" class="form-label
                            @error('po6') text-danger @enderror">po6 (max: {{$marks->po6}})</label>
                            <input type="number" name="po6" class="form-control
                            @error('po6') border border-danger @enderror"
                            id="po6" value='{{old("po6",$studentMark->po6)}}' />
                                @error('po6')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>
                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po7" class="form-label
                            @error('po7') text-danger @enderror">po7 (max: {{$marks->po7}})</label>
                            <input type="number" name="po7" class="form-control
                            @error('po7') border border-danger @enderror"
                            id="po7" value='{{old("po7",$studentMark->po7)}}' />
                                @error('po7')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po8" class="form-label
                            @error('po8') text-danger @enderror">po8 (max: {{$marks->po8}})</label>
                            <input type="number" name="po8" class="form-control
                            @error('po8') border border-danger @enderror"
                            id="po8" value='{{old("po8",$studentMark->po8)}}' />
                                @error('po8')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po9" class="form-label
                            @error('po9') text-danger @enderror">po9 (max: {{$marks->po9}})</label>
                            <input type="number" name="po9" class="form-control
                            @error('po9') border border-danger @enderror"
                            id="po9" value='{{old("po9",$studentMark->po9)}}' />
                                @error('po9')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po10" class="form-label
                            @error('po10') text-danger @enderror">po10 (max: {{$marks->po10}})</label>
                            <input type="number" name="po10" class="form-control
                            @error('po10') border border-danger @enderror"
                            id="po10" value='{{old("po10",$studentMark->po10)}}' />
                                @error('po10')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po11" class="form-label
                            @error('po11') text-danger @enderror">po11 (max: {{$marks->po11}})</label>
                            <input type="number" name="po11" class="form-control
                            @error('po11') border border-danger @enderror"
                            id="po11" value='{{old("po11",$studentMark->po11)}}' />
                                @error('po11')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po12" class="form-label
                            @error('po12') text-danger @enderror">po12 (max: {{$marks->po12}})</label>
                            <input type="number" name="po12" class="form-control
                            @error('po12') border border-danger @enderror"
                            id="po12" value='{{old("po12",$studentMark->po12)}}' />
                                @error('po12')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="row mt-4 px-2">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>

            <div class="col-md-8 px-4 mt-3 full-height-scroll">
                <h5 class="mb-3 text-center">Student Marks</h5>

                @foreach ($studentsDetails as $student)
                    <?php $marks=$student->student_marks; ?>
                    <table class="table table-hover mb-3">
                        <thead>
                            <div class="d-flex justify-content-end align-items-center
                             p-2 mb-0 bg-dark text-white position-relative">
                                <h6 class="mx-auto py-2 ps-5 mb-0 bg-dark text-white ">
                                    {{$student->student_name}} ({{$student->student_id}})
                                </h6>
                                @if($marks)
                                <div class="position-absolute">
                                    <a href={{url('/teacher/group/student/mark/update/'.$student->student_id)}} class="btn btn-secondary">Update</a>
                                </div>
                                @endif
                            </div>

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
                                </tr>
                            @endif

                        </tbody>
                    </table>
                @endforeach
            </div>
        </div> --}}

    </div>


@endsection
