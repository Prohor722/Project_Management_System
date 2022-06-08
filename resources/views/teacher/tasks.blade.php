@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid">
        <div class="row">
            <!-- Add task  -->
            <div class="col-md-3 bg bg-light py-5 left-container">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
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
            <div class="col-md-6 bg bg-warning pt-lg-3 pb-5 right-container">

                <!-- Search bar  -->
                <form class="d-flex align-items-center ms-auto mb-3" id="search">
                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn border-0 text-dark p-0" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <!-- students list  -->

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Task Title</th>
                        <th scope="col">Course Code</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Submissions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>12/11/2020</td>
                        <td>Project Proposal</td>
                        <td>CSE-0400</td>
                        <td>19/11/2020</td>
                        <td><a href="#">Check List</a></td>
                    </tr>
                    <tr>
                        <td>12/11/2020</td>
                        <td>Project Proposal</td>
                        <td>CSE-0400</td>
                        <td>19/11/2020</td>
                        <td><a href="#">Check List</a></td>
                    </tr>
                    <tr>
                        <td>12/11/2020</td>
                        <td>Project Proposal</td>
                        <td>CSE-0400</td>
                        <td>19/11/2020</td>
                        <td><a href="#">Check List</a></td>
                    </tr>
                    <tr>
                        <td>12/11/2020</td>
                        <td>Project Proposal</td>
                        <td>CSE-0400</td>
                        <td>19/11/2020</td>
                        <td><a href="#">Check List</a></td>
                    </tr>
                    <tr>
                        <td>12/11/2020</td>
                        <td>Project Proposal</td>
                        <td>CSE-0400</td>
                        <td>19/11/2020</td>
                        <td><a href="#">Check List</a></td>
                    </tr>
                    <tr>
                        <td>12/11/2020</td>
                        <td>Project Proposal</td>
                        <td>CSE-0400</td>
                        <td>19/11/2020</td>
                        <td><a href="#">Check List</a></td>
                    </tr>

                    </tbody>
                </table>
            </div>

            <!-- Group Submissions   -->
            <div class="col-md-3 bg bg-light py-3 right-container">
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
            </div>
        </div>
    </div>

@endsection
