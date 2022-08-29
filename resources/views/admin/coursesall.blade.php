@extends('adminlayout.adminlayout')
@section('body')


    <div class="content-page">

        <div class="content">
            <div class="container-fluid">

                <div class="row">
                </div>




                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title text-white">All Courses</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="table-responsive">
                                        <table id="datatable" class="table table-striped  table-bordered nowrap"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>SN</th>
                                                    <th>Course</th>
                                                    <th>Price</th>
                                                    <td>Prerequisite</td>
                                                    <th>tutor</th>
                                                    <th>Max Duration</th>
                                                    <th>Course Outline</th>
                                                    <th>instagram</th>
                                                    <th>timetable</th>
                                                    <th>more</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($allcourses)
                                                    @foreach ($allcourses as $course)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $course->course }}</td>
                                                            <td>{{ $course->price }}</td>
                                                            <td>{{ $course->prerequisite }}</td>
                                                            <td>{{ $course->tutor }}</td>
                                                            <td>{{ $course->maxduation }}</td>
                                                            <td> <a download href="storage/{{ $course->courseouline }} "> <img src='{{asset("storage/$course->courseouline ")}}' width="100%" alt="al"> </a></td>
                                                            <td>{{ $course->timetable }}</td>
                                                            <td>
                                                                <a href="{{route('courseoutlineview',$course->id )}}">
                                                                    <button type="button"
                                                                    class="btn btn-sm btn-secondary ">View outline</button>
                                                                </a>
                                                                <a href="{{route('coursereviewview',$course->id )}}">
                                                                    <button type="button"
                                                                    class="btn btn-sm btn-warning ">View Review</button>
                                                                </a>
                                                                <a href="{{route('whatyouwilllearnview',$course->id )}}">
                                                                    <button type="button"
                                                                    class="btn btn-sm btn-primary ">What to learn</button>
                                                                </a>

                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary btn-custom "
                                                                    value="1167" data-toggle="modal"
                                                                    data-target="#myModaldepo{{ $loop->index + 1 }}">View</button>

                                                                <button type="button"
                                                                    class="btn btn-sm btn-pink btn-custom " value="1167"
                                                                    data-toggle="modal"
                                                                    data-target="#myModaldel{{ $loop->index + 1 }}">Delete</button>
                                                            </td>
                                                            <!-- The Modal -->
                                                            <div class="modal fade" id="myModaldepo{{ $loop->index + 1 }}"
                                                                role="dialog">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="">
                                                                                <div class="card">
                                                                                    <div class="card-header bg-success">
                                                                                        <h3 class="card-title text-white">
                                                                                            course</h3>
                                                                                    </div>
                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item">
                                                                                            <span><b>Course Title</b></span>
                                                                                            <span
                                                                                                class="float-right tx-primary">{{ $course->course }}</span>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span><b>Price</b></span>
                                                                                            <span
                                                                                                class="float-right tx-primary">
                                                                                                {{ $course->price }}</span>
                                                                                        </li>

                                                                                        <li class="list-group-item">
                                                                                            <span><b>created on
                                                                                                    </b></span> <span
                                                                                                class="float-right tx-primary">{{ Carbon\Carbon::parse($course->updated_at)->diffForHumans() }}</span>
                                                                                        </li>

                                                                                    </ul>
                                                                                    <div class="card-body">
                                                                                        <hr>
                                                                                        <div class="card-header bg-dark">
                                                                                            <h3
                                                                                                class="card-title text-white">
                                                                                                Edit course</h3>
                                                                                        </div>
                                                                                        <small class="text-info">You
                                                                                            can Edit this particular
                                                                                            course as you wish
                                                                                            below</small>
                                                                                        <form method="post"
                                                                                            action="{{ route('courseupdate') }}" enctype="multipart/form-data">
                                                                                            @csrf

                                                                                            <input name="id"
                                                                                                type="hidden"
                                                                                                value="{{ $course->id }}">
                                                                                            <div class="form-group">
                                                                                                <label>Title</label><br>
                                                                                                <input type="text"
                                                                                                    name="course"
                                                                                                    class="form-control"
                                                                                                    value="{{ $course->course }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Price</label><br>
                                                                                                <input type="text"
                                                                                                    name="price"
                                                                                                    class="form-control"
                                                                                                    value="{{ $course->price }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Prerequisite
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="prerequisite"
                                                                                                    class="form-control"
                                                                                                    value="{{ $course->prerequisite }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Tutor
                                                                                                    </label><br>
                                                                                                    <select name="tutor" required class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                                                                                                        <option  disabled >Open this select menu</option>

                                                                                                       @if (isset($staff))
                                                                                                       @foreach ($staff as $staffmamber )
                                                                                                       <option value="{{$staffmamber->id}}">{{$staffmamber->name}}</option>
                                                                                                       @if ($staffmamber->id == $course->tutor)
                                                                                                       <option selected value="{{$staffmamber->id}}">{{$staffmamber->name}}</option>

                                                                                                       @endif
                                                                                                       @endforeach

                                                                                                       @endif
                                                                                                      </select>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Max Duration
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="maxduation"
                                                                                                    class="form-control"
                                                                                                    value="{{ $course->maxduation }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Course Outline
                                                                                                    </label><br>
                                                                                                <input type="file"
                                                                                                    name="courseouline"
                                                                                                    class="form-control"
                                                                                                    value="{{ $course->courseouline }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>time table
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="timetable"
                                                                                                    class="form-control"
                                                                                                    value="{{ $course->timetable }}">
                                                                                            </div>

                                                                                            <div class="text-center">
                                                                                                <button type="submit"
                                                                                                    name="up_am"
                                                                                                    class="btn btn-success waves-effect waves-light">Update
                                                                                                    </button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer" style="border:none;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div id="myModaldel{{ $loop->index + 1 }}" class="modal fade "
                                                                role="dialog">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h4>Are you sure to delete
                                                                                {{ $course->course }} course with price as
                                                                                {{ $course->price }} ?</h4>
                                                                        </div>
                                                                        <div class="modal-footer no-border">
                                                                            <button type="button"
                                                                                class="btn btn-secondary waves-effect"
                                                                                data-dismiss="modal">No</button>
                                                                            <a href="{{ route('deletecourse', $course->id) }}"
                                                                                class="btn btn-pink waves-effect">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </tr>
                                                    @endforeach
                                                @endif






                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <footer class="footer text-right">
        2022 ©
    </footer>
    <script>
        function hide_hint() {
            $.ajax({
                type: "POST",
                url: 'ajax.php',
                data: 'hide_hint=' + 1,
                success: function(data) {
                    $().html(data);
                }
            });
        }
    </script>
    </div>

@endsection
