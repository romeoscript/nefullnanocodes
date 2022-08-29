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
                            <h3 class="card-title text-white">All Completed staffmembers</h3>
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
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <td>Date Employed</td>
                                                    <th>Phone</th>
                                                    <th>skill</th>
                                                    <th>description</th>
                                                    <th>instagram</th>
                                                    <th>twitter</th>
                                                    <th>facebook</th>
                                                    <th>pic</th>
                                                    <th>github</th>
                                                    <th>state</th>
                                                    <th>lga</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($allstaff)
                                                    @foreach ($allstaff as $staffmember)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $staffmember->name }}</td>
                                                            <td>{{ $staffmember->email }}</td>
                                                            <td>{{ Carbon\Carbon::parse($staffmember->created_at)->diffForHumans() }}
                                                            </td>
                                                            <td>{{ $staffmember->phone }}</td>
                                                            <td>{{ $staffmember->skill }}</td>
                                                            <td>{{ $staffmember->description }}</td>
                                                            <td>{{ $staffmember->instagram }}</td>
                                                            <td>{{ $staffmember->twitter }}</td>
                                                            <td>{{ $staffmember->facebook }}</td>
                                                            <td><img src="{{ asset('storage/profile/'.$staffmember->pic) }}" width="100%" alt="staff picture"></td>
                                                            <td>{{ $staffmember->github }}</td>
                                                            <td>{{ $staffmember->state }}</td>
                                                            <td>{{ $staffmember->lga }}</td>
                                                            <td>
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
                                                                                            staffmember</h3>
                                                                                    </div>
                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item">
                                                                                            <span><b>Staff Name</b></span>
                                                                                            <span
                                                                                                class="float-right tx-primary">{{ $staffmember->name }}</span>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span><b>Email</b></span>
                                                                                            <span
                                                                                                class="float-right tx-primary">
                                                                                                {{ $staffmember->email }}</span>
                                                                                        </li>

                                                                                        <li class="list-group-item">
                                                                                            <span><b>employed on
                                                                                                    </b></span> <span
                                                                                                class="float-right tx-primary">{{ Carbon\Carbon::parse($staffmember->updated_at)->diffForHumans() }}</span>
                                                                                        </li>

                                                                                    </ul>
                                                                                    <div class="card-body">
                                                                                        <hr>
                                                                                        <div class="card-header bg-dark">
                                                                                            <h3
                                                                                                class="card-title text-white">
                                                                                                Edit staffmember</h3>
                                                                                        </div>
                                                                                        <small class="text-info">You
                                                                                            can Edit this particular
                                                                                            staffmember as you wish
                                                                                            below</small>
                                                                                        <form method="post"
                                                                                            action="{{ route('staffmemberupdate') }}" enctype="multipart/form-data">
                                                                                            @csrf

                                                                                            <input name="id"
                                                                                                type="hidden"
                                                                                                value="{{ $staffmember->id }}">
                                                                                            <div class="form-group">
                                                                                                <label>Name</label><br>
                                                                                                <input type="text"
                                                                                                    name="name"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->name }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>Email</label><br>
                                                                                                <input type="email"
                                                                                                    name="email"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->email }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>phone
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="phone"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->phone }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>skill
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="skill"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->skill }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>description
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="description"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->description }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>instagram
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="instagram"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->instagram }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>twitter
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="twitter"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->twitter }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>facebook
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="facebook"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->facebook }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>pic
                                                                                                    </label><br>
                                                                                                <input type="file"
                                                                                                    name="pic"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->pic }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>github
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="github"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->github }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>state
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="state"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->state }}">
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label>lga
                                                                                                    </label><br>
                                                                                                <input type="text"
                                                                                                    name="lga"
                                                                                                    class="form-control"
                                                                                                    value="{{ $staffmember->lga }}">
                                                                                            </div>

                                                                                            <div class="text-center">
                                                                                                <button type="submit"
                                                                                                    name="up_am"
                                                                                                    class="btn btn-success waves-effect waves-light">Update
                                                                                                    Amount</button>
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
                                                                                {{ $staffmember->name }} with email as
                                                                                {{ $staffmember->email }} ?</h4>
                                                                        </div>
                                                                        <div class="modal-footer no-border">
                                                                            <button type="button"
                                                                                class="btn btn-secondary waves-effect"
                                                                                data-dismiss="modal">No</button>
                                                                            <a href="{{ route('deletestaffmember', $staffmember->id) }}"
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
