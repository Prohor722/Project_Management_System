@extends('layouts.student_layout')

@section('student_content')
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 bg-light py-5 full-height text-center">
              <h5 class="mb-4">Team Members</h5>
              <ul>
                @foreach($students as $student)
                <li>
                    <div class="d-flex gap-2">
                        <p>{{$student->student_name}}</p>
                        <p>({{$student->student_id}})</p>
                    </div>
                </li>
                @endforeach
              </ul>
            </div>

            <div class="col-md-9 mt-5 px-5">
                <h5 class="text-center mb-4">Notice Board</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Date</th>
                        <th scope="col">Notice Description</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i = ($notices->currentPage()-1) * 5; ?>
                    @foreach($notices as $notice)

                        <tr class="">
                            <td>{{++$i}}</td>
                            <td>{{$notice->created_at}}</td>
                            <td class="text-break">{{$notice->notice_description}}</td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

                <div class="mt-4">
                    {{$notices->links()}}
                </div>
            </div>
          </div>
        </div>

@endsection
