@extends('adminlayout.adminlayout') @section('body')
    <div class="content-page">

        <div class="content">
            <div class="container-fluid">

                <div class="row">
                </div>


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="card-title text-white">Create outline </h3>
                            </div>
                            <div class="card-body">

                                <form class="row g-3" action="{{route('courseoutlinecreate')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" value="{{$cid}}" name="id" hidden>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Course Outline</label>
                                            <input type="text" required class="form-control" name="courseoutline"
                                                placeholder="Course outline"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Course Outline Description</label>
                                            <input type="text" required class="form-control" name="description"
                                                placeholder="outline Descriptions"  value="">
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-md" style="width: 100%">Create </button>
                                    </div>
                                </form>
                               Use the from to create a outline
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped  table-bordered nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Course Outline</th>
                                        <th>Description</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($courseoutline)
                                        @foreach ($courseoutline as $outline)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $outline->outline }}</td>
                                                <td>{{ $outline->description }}</td>


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
                                                                                outline</h3>
                                                                        </div>
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <span><b>Course outline</b></span>
                                                                                <span
                                                                                    class="float-right tx-primary">{{ $outline->outline }}</span>
                                                                            </li>


                                                                            <li class="list-group-item">
                                                                                <span><b>created on
                                                                                        </b></span> <span
                                                                                    class="float-right tx-primary">{{ Carbon\Carbon::parse($outline->updated_at)->diffForHumans() }}</span>
                                                                            </li>

                                                                        </ul>
                                                                        <div class="card-body">
                                                                            <hr>
                                                                            <div class="card-header bg-dark">
                                                                                <h3
                                                                                    class="card-title text-white">
                                                                                    Edit outline</h3>
                                                                            </div>
                                                                            <small class="text-info">You
                                                                                can Edit this particular
                                                                                outline as you wish
                                                                                below</small>
                                                                            <form method="post"
                                                                                action="{{ route('courseoutlineupdate') }}" enctype="multipart/form-data">
                                                                                @csrf

                                                                                <input name="id"
                                                                                    type="hidden"
                                                                                    value="{{ $outline->id }}">
                                                                                <div class="form-group">
                                                                                    <label>Outline</label><br>
                                                                                    <input type="text"
                                                                                        name="courseoutline"
                                                                                        class="form-control"
                                                                                        value="{{ $outline->outline }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label>description</label><br>
                                                                                    <input type="text"
                                                                                        name="description"
                                                                                        class="form-control"
                                                                                        value="{{ $outline->description }}">
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
                                                                    {{ $outline->outline }} with id as
                                                                    {{ $outline->id }} ?</h4>
                                                            </div>
                                                            <div class="modal-footer no-border">
                                                                <button type="button"
                                                                    class="btn btn-secondary waves-effect"
                                                                    data-dismiss="modal">No</button>
                                                                <a href="{{ route('courseoutlinedelete', $outline->id) }}"
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
