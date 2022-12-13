@extends('layouts.admin_layout')

@section('admin_content')

    <div class="container-fluid">

        <div class="row d-flex align-items-center">

            <!-- Update Marks -->
            <div class="col-md-6 bg-light px-4 pb-1 border full-height">
                <h5 class="mb-3 text-center mt-4">Update</h5>
                <hr/>
                <form class="" action="/admin/marks/{{$marks->id}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po1" class="form-label
                            @error('po1') text-danger @enderror">po1</label>
                            <input type="number" name="po1" class="form-control
                            @error('po1') border border-danger @enderror"
                            id="po1" value='{{old("po1",$marks->po1)}}' />
                                @error('po1')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po2" class="form-label
                            @error('po2') text-danger @enderror">po2</label>
                            <input type="number" name="po2" class="form-control
                            @error('po2') border border-danger @enderror"
                            id="po2" value='{{old("po2",$marks->po2)}}' />
                                @error('po2')
                                <p class="text-danger mt-1 ">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po3" class="form-label
                            @error('po3') text-danger @enderror" >po3</label>
                            <input type="number" name="po3" class="form-control
                            @error('po3') border border-danger @enderror"
                            id="po3" value='{{old("po3",$marks->po3)}}' />
                                @error('po3')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po4" class="form-label @error('po4') text-danger @enderror">po4</label>
                            <input type="number" name="po4" class="form-control
                            @error('po4')
                                border border-danger
                            @enderror"
                            id="po4" value='{{old("po4",$marks->po4)}}' />
                                @error('po4')
                                <p class="text-danger mt-1 text-break">{{$message}}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-3">
                        <div>
                            <label for="po5" class="form-label @error('po5') text-danger @enderror" >po5</label>
                            <input type="number" name="po5" class="form-control
                            @error('po5') border border-danger @enderror"
                            id="po5" value='{{old("po5",$marks->po5)}}' />
                                @error('po5')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po6" class="form-label @error('po6') text-danger @enderror" >po6</label>
                            <input type="number" name="po6" class="form-control
                            @error('po6') border border-danger @enderror"
                            id="po6" value='{{old("po6",$marks->po6)}}' />
                                @error('po6')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>

                        <div>
                            <label for="po7" class="form-label @error('po7') text-danger @enderror" >po7</label>
                            <input type="number" name="po7" class="form-control
                            @error('po7') border border-danger @enderror"
                            id="po7" value='{{old("po7",$marks->po7)}}' />
                                @error('po7')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po8" class="form-label @error('po8') text-danger @enderror" >po8</label>
                            <input type="number" name="po8" class="form-control
                            @error('po8') border border-danger @enderror"
                            id="po8" value='{{old("po8",$marks->po8)}}' />
                                @error('po8')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-3 mb-3">

                        <div>
                            <label for="po9" class="form-label @error('po9') text-danger @enderror" >po9</label>
                            <input type="number" name="po9" class="form-control
                            @error('po9') border border-danger @enderror"
                            id="po9" value='{{old("po9",$marks->po9)}}' />
                                @error('po9')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po10" class="form-label @error('po10') text-danger @enderror" >po10</label>
                            <input type="number" name="po10" class="form-control
                            @error('po10') border border-danger @enderror"
                            id="po10" value='{{old("po10",$marks->po10)}}' />
                                @error('po10')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po11" class="form-label @error('po11') text-danger @enderror" >po11</label>
                            <input type="number" name="po11" class="form-control
                            @error('po11') border border-danger @enderror"
                            id="po11" value='{{old("po11",$marks->po11)}}' />
                                @error('po11')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                        <div>
                            <label for="po12" class="form-label @error('po12') text-danger @enderror" >po12</label>
                            <input type="number" name="po12" class="form-control
                            @error('po12') border border-danger @enderror"
                            id="po12" value='{{old("po12",$marks->po12)}}' />
                                @error('po12')
                                <p class="text-danger mt-1">{{$message}}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="row mt-4 px-2">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>

            <!-- Marks list  -->
            <div class="col-md-6 px-4">
                <h5 class="text-center p-2 bg-dark text-white">Marks</h5>
                <table class="table pb-5 mb-3 table-striped table-bordered">
                    <thead>
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
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>



        </div>
    </div>


@endsection
