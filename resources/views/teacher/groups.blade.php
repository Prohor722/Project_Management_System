@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3 bg bg-light py-5 left-container">

            <!-- Add group  -->
                <form class="" action="/teacher/groups" method="POST">
                    @csrf
                    <h4 class="mb-3 text-center">Add Group</h4>
                    <div class="mb-3">
                        <label class="form-label">Group ID</label>
                        <input type="text" name="group_id" class="form-control" value="{{old('group_id')}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Topic ID</label>
                        <input type="text" class="form-control" name="topic_id" value="{{old('topic_id')}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Group Status</label>
                        <select name="group_status" class="form-control" id="exampleFormControlSelect1">
                            <option value={{true}}>Active</option>
                            <option value="">In-Active</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password">
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>
                </form>



            </div>
            <div class="col-md-9 bg   py-3 right-container">

                <!-- Search bar  -->
                <form class="d-flex align-items-center ms-auto mb-1 border rounded-pill" id="search">
                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn border-0 text-dark p-0" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <!-- Group Table  -->
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Group ID</th>
                        <th scope="col">Topic ID</th>
                        <th scope="col">Teacher's ID</th>
                        <th scope="col">Group Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($groups as $group)
                    <tr>
                        <td>{{$group->group_id}}</td>
                        <td>{{$group->topic_id}}</td>
                        <td>{{$group->t_id}}</td>
                        <td>{{ ($group->group_status)? "Active" : "In-Active"}}</td>
                        <td class="d-flex">
                            <a href="{{url('/teacher/groups/'.$group->id)}}" class="">
                                <button class="btn btn-info me-1">Edit</button>
                            </a>
                            <form action="/teacher/groups/{{$group->id}}" method="POST">
                                @method('delete')
                                @csrf
                                <button  class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete {{$group->group_id}} ?')"
                                type="submit">Delete</button>
                            </form>

                            <a href="{{url('/teacher/group/manage/'.$group->group_id)}}" class="">
                                <button class="btn btn-secondary ms-1">Manage</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script>

        $(document).ready(function (){
            $('.deleteBtn').click(function (e){
                e.preventDefault();

                var id = $(this).val();
                $('#delete_item').val(id);

                $('#deleteModal').modal('show');

            });
        });

    </script>
@endsection
