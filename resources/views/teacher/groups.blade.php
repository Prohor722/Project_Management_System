@extends('layouts.teacher_layout')

@section('teacher_content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg bg-light py-5 left-container">

                <!-- Add group  -->
                <form class="">
                    <h4 class="mb-3 text-center">Add Group</h4>
                    <div class="mb-3">
                        <label class="form-label">Group ID</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Project Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Project ID</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course ID</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control">
                    </div>
                    <label class="form-label">Department</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Architecture</option>
                            <option value="2">BBA</option>
                            <option value="3">CSE</option>
                            <option value="4">Law</option>
                            <option value="5">Pharmacy</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <div class="col-md-9 bg bg-warning py-3 right-container">

                <!-- Search bar  -->
                <form class="d-flex align-items-center ms-auto mb-1" id="search">
                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn border-0 text-dark p-0" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
                </form>

                <!-- Group Table  -->
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Group ID</th>
                        <th scope="col">Project Title</th>
                        <th scope="col">Course Code</th>
                        <th scope="col">Group Members</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    <tr>
                        <td>GCS-04125</td>
                        <td>Online Project Management System for students to manipulate</td>
                        <td>CSE-0400</td>
                        <td>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                            <a href="#" class="text-dark">Ripon Jalal</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
