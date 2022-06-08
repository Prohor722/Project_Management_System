@extends('layouts.admin_layout')

@section('admin_content')

    <div class="row g-0">

        <div class="py-3 px-5 bg bg-warning">

            <!-- Search bar  -->
            <form class="d-flex align-items-center ms-auto my-5 pb-5 w-50" id="search">
                <input class="form-control me-2 rounded-pill border-0 w-50" type="search" placeholder="subject code" aria-label="Search">

                <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="student id" aria-label="Search">

                <button class="btn border-0 text-dark rounded-circle bg-white" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <!-- students list  -->

            <table class="table mb-5 pb-5">
                <thead>
                <tr>
                    <th scope="col">P01</th>
                    <th scope="col">P02</th>
                    <th scope="col">P03</th>
                    <th scope="col">P04</th>
                    <th scope="col">P05</th>
                    <th scope="col">P06</th>
                    <th scope="col">P07</th>
                    <th scope="col">P08</th>
                    <th scope="col">P09</th>
                    <th scope="col">P10</th>
                    <th scope="col">P11</th>
                    <th scope="col">P12</th>
                    <th scope="col">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>5</td>
                    <td>5</td>
                    <td>10</td>
                    <td>7</td>
                    <td>0</td>
                    <td>0</td>
                    <td>15</td>
                    <td>7.5</td>
                    <td>7.5</td>
                    <td>8</td>
                    <td>15</td>
                    <td>10</td>
                    <td><button class="btn btn-dark">Update</button></td>
                </tr>

                </tbody>
            </table>

            <div class="my-5 py-5"></div>
            <div class="my-5 py-3"></div>
        </div>
    </div>


@endsection
