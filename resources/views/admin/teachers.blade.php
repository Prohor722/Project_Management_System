@extends('layouts.admin_layout')

@section('admin_content')
    <div class="row g-0">

        <!-- Teacher Information Section  -->
        <div class="col-md-3 bg-light d-flex flex-column  align-items-center p-3 short-text">
            <img id="info-img" class="mb-3 mt-5 w-50" src="{{asset('/images/users/Teacher.jpg')}}">
            <h3>Teacher's Information</h3>
            <h6 class="mt-3">Name: <span id="student-name">Roktakin ahmed jobin bhuiyan</span></h6>
            <div>
                <h6 class="mt-3 d-inline">Status: </h6>
                <span id="student-name" class="text-success">Active</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">INS ID: </h6>
                <span id="student-name">CS-0245158</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Department: </h6>
                <span id="student-name">CSE</span>
            </div>
            <div>
                <h6 class="mt-3 d-inline">Email: </h6>
                <span id="student-name">Roktakin.ahmed@sub.edu.bd</span>
            </div>
        </div>


        <div class="bg   col-md-9 py-3 px-5">

            {{-- Add Teacher Button  --}}
            <div class="d-flex align-items-center">
                <a href="{{route('add-teacher')}}">
                    <button class="btn btn-info">Add Teacher</button>
                </a>

                <!-- Search bar  -->
                <form class="d-flex align-items-center ms-auto my-5 w-50 border rounded-pill" id="search">
                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn border-0 text-dark p-0 bg-white" id="search-icon" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>


            <!-- Teachers list  -->

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">INS ID</th>
                    <th scope="col">Teacher's Name</th>
                    <th scope="col">Dept.</th>
                    <th scope="col">Status</th>
                    <th scope="col">Details</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>CS-0245158</td>
                    <td>Roktakin ahmed jobin bhuiyan</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_teacher_update.html" class="btn btn-dark">Update</a></td>
                </tr>
                <tr>
                    <td>CS-0245158</td>
                    <td>Roktakin ahmed jobin bhuiyan</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_teacher_update.html" class="btn btn-dark">Update</a></td>
                </tr>
                <tr>
                    <td>CS-0245158</td>
                    <td>Roktakin ahmed jobin bhuiyan</td>
                    <td>CSE</td>
                    <td class="text-danger">Deactive</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_teacher_update.html" class="btn btn-dark">Update</a></td>
                </tr>
                <tr>
                    <td>CS-0245158</td>
                    <td>Roktakin ahmed jobin bhuiyan</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_teacher_update.html" class="btn btn-dark">Update</a></td>
                </tr>
                <tr>
                    <td>CS-0245158</td>
                    <td>Roktakin ahmed jobin bhuiyan</td>
                    <td>CSE</td>
                    <td class="text-danger">deactive</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_teacher_update.html" class="btn btn-dark">Update</a></td>
                </tr>
                <tr>
                    <td>CS-0245158</td>
                    <td>Roktakin ahmed jobin bhuiyan</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_teacher_update.html" class="btn btn-dark">Update</a></td>
                </tr>
                <tr>
                    <td>CS-0245158</td>
                    <td>Roktakin ahmed jobin bhuiyan</td>
                    <td>CSE</td>
                    <td class="text-success">Active</td>
                    <td><a href="#" class="text-dark">See more</a></td>
                    <td><a href="./admin_teacher_update.html" class="btn btn-dark">Update</a></td>
                </tr>


                </tbody>
            </table>
        </div>
    </div>

@endsection
