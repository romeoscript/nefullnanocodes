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
                            <h3 class="card-title text-white">All students</h3>
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
                                                    <th>student Name</th>
                                                    <th>Sex</th>
                                                    <td>State</td>
                                                    <th>LGA</th>
                                                    <th>Address</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Picture</th>
                                                    <th>more</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($allstudents)
                                                    @foreach ($allstudents as $student)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $student->name }}</td>
                                                            <td>{{ $student->sex }}</td>
                                                            <td>{{ $student->state }}</td>
                                                            <td>{{ $student->lga }}</td>
                                                            <td>{{ $student->address }}</td>
                                                            <td>{{ $student->email }}</td>
                                                            <td>{{ $student->phone }}</td>
                                                            <td> <img src='{{asset("storage/studentspic/$student->studentpassport")}}' alt="student pic" width="100%"> </td>

                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary btn-custom "
                                                                    value="1167" data-toggle="modal"
                                                                    data-target="#myModaldepo{{ $loop->index + 1 }}">View</button>

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
                                                                                            student</h3>
                                                                                    </div>
                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item">
                                                                                            <span><b>student Name</b></span>
                                                                                            <span
                                                                                                class="float-right tx-primary">{{ $student->name }}</span>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span><b>Sex</b></span>
                                                                                            <span
                                                                                                class="float-right tx-primary">
                                                                                                {{ $student->sex }}</span>
                                                                                        </li>

                                                                                        <li class="list-group-item">
                                                                                            <span><b>created on
                                                                                                    </b></span> <span
                                                                                                class="float-right tx-primary">{{ Carbon\Carbon::parse($student->updated_at)->diffForHumans() }}</span>
                                                                                        </li>

                                                                                    </ul>
                                                                                    <div class="card-body">
                                                                                        <hr>
                                                                                        <div class="card-header bg-dark">
                                                                                            <h3
                                                                                                class="card-title text-white">
                                                                                                Edit student</h3>
                                                                                        </div>
                                                                                        <small class="text-info">You
                                                                                            can Edit this particular
                                                                                            student as you wish
                                                                                            below</small>
                                                                                        <form method="post"
                                                                                            action="{{ route('studentupdate') }}" enctype="multipart/form-data">
                                                                                            @csrf

                                                                                            <input name="id"
                                                                                                type="hidden"
                                                                                                value="{{ $student->id }}">
                                                                                            <div class="form-group">
                                                                                                <label>Name</label><br>
                                                                                                <input type="text"
                                                                                                    name="name"
                                                                                                    class="form-control"
                                                                                                    value="{{ $student->name }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Sex</label><br>
                                                                                                <input type="text"
                                                                                                    name="sex"
                                                                                                    class="form-control"
                                                                                                    value="{{ $student->sex }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>State
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="state"
                                                                                                    class="form-control"
                                                                                                    value="{{ $student->state }}">
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label>LGA
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="lga"
                                                                                                    class="form-control"
                                                                                                    value="{{ $student->lga }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Address
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="address"
                                                                                                    class="form-control"
                                                                                                    value="{{ $student->address }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>phone
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="phone"
                                                                                                    class="form-control"
                                                                                                    value="{{ $student->phone }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Email
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="email"
                                                                                                    class="form-control"
                                                                                                    value="{{ $student->email }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Passport
                                                                                                    </label><br>
                                                                                                <input type="file"
                                                                                                    name="studentpassport"
                                                                                                    class="form-control"
                                                                                                    value="{{ $student->studentpassport }}">
                                                                                            </div>

                                                                                            <div class="text-center">
                                                                                                <button type="submit"
                                                                                                    name=""
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
                                                                                {{ $student->student }} student with price as
                                                                                {{ $student->price }} ?</h4>
                                                                        </div>
                                                                        {{-- <div class="modal-footer no-border">
                                                                            <button type="button"
                                                                                class="btn btn-secondary waves-effect"
                                                                                data-dismiss="modal">No</button>
                                                                            <a href="{{ route('deletestudent', $student->id) }}"
                                                                                class="btn btn-pink waves-effect">Delete</a> --}}
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
