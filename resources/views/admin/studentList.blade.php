@extends('layouts.admin_layout')

@section('admin_content')

    <div class="row g-0">

        <!-- Student Information section  -->
        <div class="col-md-3 d-flex flex-column align-items-center p-3 short-text mt-5">
            <img id="info-img" class="my-3 w-50" src="{{asset('/images/users/student.jpg')}}">
            <h3>Student's Information</h3>
            <h6 class="mt-3">Name: <span id="student-name">Neyamul haque al baker sinha</span></h6>
            <div>
                <h6 class="mt-3 d-inline">ID: </h6>
                <span id="student-name">UG02-15-10-046</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Status: </h6>
                <span id="student-name" class="text-success">Active</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Department: </h6>
                <span id="student-name">CSE</span>
            </div>
        </div>
        <div class="col-md-9 py-3 px-5 bg bg-warning">

            <!-- Search bar  -->
            <form class="d-flex align-items-center ms-auto my-5 w-50" id="search">
                <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn border-0 text-dark p-0" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <!-- students list  -->

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Dept.</th>
                    <th scope="col">Status</th>
                    <th scope="col">Details</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>UG02-15-10-046</td>
                    <td>Neyamul haque al baker sinha</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_student_update.html" class="btn btn-dark">Update</a></td>
                </tr>

                <tr>
                    <td>UG02-15-10-046</td>
                    <td>Neyamul haque al baker sinha</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_student_update.html" class="btn btn-dark">Update</a></td>
                </tr>

                <tr>
                    <td>UG02-15-10-046</td>
                    <td>Neyamul haque al baker sinha</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_student_update.html" class="btn btn-dark">Update</a></td>
                </tr>

                <tr>
                    <td>UG02-15-10-046</td>
                    <td>Neyamul haque al baker sinha</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_student_update.html" class="btn btn-dark">Update</a></td>
                </tr>

                <tr>
                    <td>UG02-15-10-046</td>
                    <td>Neyamul haque al baker sinha</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_student_update.html" class="btn btn-dark">Update</a></td>
                </tr>

                <tr>
                    <td>UG02-15-10-046</td>
                    <td>Neyamul haque al baker sinha</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_student_update.html" class="btn btn-dark">Update</a></td>
                </tr>

                <tr>
                    <td>UG02-15-10-046</td>
                    <td>Neyamul haque al baker sinha</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_student_update.html" class="btn btn-dark">Update</a></td>
                </tr>


                </tbody>
            </table>
        </div>
    </div>
    </div>

@endsection
