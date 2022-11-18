@extends('layouts.teacher_layout')

@section('teacher_content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 bg bg-light py-5 lrft-container">
                    <form class="">
                        <h4 class="mb-3 text-center">Add Task</h4>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Task Title</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description</label>
                            <textarea type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Course Code</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Deadline</label>
                            <input type="date" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>

                </div>
                <div class="col-md-9 bg   py-5 right-container">
                    <div class="ms-auto">
                        <a class="btn btn-dark m-2" href="https://google.com">New</a>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Notice</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">12/11/2020</th>
                            <td>CSE-0400</td>
                            <td>Next Class for saturday will be poswond and extra class time will be nitified later</td>
                            <td>
                                <a class="btn btn-info" href="https://google.com">Edit</a>
                                <a class="btn btn-danger" href="https://google.com">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12/11/2020</th>
                            <td>CSE-0400</td>
                            <td>Next Class for saturday will be poswond and extra class time will be nitified later</td>
                            <td>
                                <a class="btn btn-info" href="https://google.com">Edit</a>
                                <a class="btn btn-danger" href="https://google.com">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12/11/2020</th>
                            <td>CSE-0400</td>
                            <td>Next Class for saturday will be poswond and extra class time will be nitified later</td>
                            <td>
                                <a class="btn btn-info" href="https://google.com">Edit</a>
                                <a class="btn btn-danger" href="https://google.com">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12/11/2020</th>
                            <td>CSE-0400</td>
                            <td>Next Class for saturday will be poswond and extra class time will be nitified later</td>
                            <td>
                                <a class="btn btn-info" href="https://google.com">Edit</a>
                                <a class="btn btn-danger" href="https://google.com">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12/11/2020</th>
                            <td>CSE-0400</td>
                            <td>Next Class for saturday will be poswond and extra class time will be nitified later</td>
                            <td>
                                <a class="btn btn-info" href="https://google.com">Edit</a>
                                <a class="btn btn-danger" href="https://google.com">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12/11/2020</th>
                            <td>CSE-0400</td>
                            <td>Next Class for saturday will be poswond and extra class time will be nitified later</td>
                            <td>
                                <a class="btn btn-info" href="https://google.com">Edit</a>
                                <a class="btn btn-danger" href="https://google.com">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12/11/2020</th>
                            <td>CSE-0400</td>
                            <td>Next Class for saturday will be poswond and extra class time will be nitified later</td>
                            <td>
                                <a class="btn btn-info" href="https://google.com">Edit</a>
                                <a class="btn btn-danger" href="https://google.com">Delete</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
