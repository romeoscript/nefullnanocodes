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
                            <h3 class="card-title text-white">All Enquiry</h3>
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
                                                    <th>Email</th>
                                                    <td>Phone</td>
                                                    <th>Title</th>
                                                    <th>Message</th>
                                                    <th>Sent Date</th>
                                                    <th>Response Message</th>
                                                    <th>more</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($allenquiry))
                                                    @foreach ($allenquiry as $enquiry)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $enquiry->name }}</td>
                                                            <td>{{ $enquiry->email }}</td>
                                                            <td>{{ $enquiry->phone }}</td>
                                                            <td>{{ $enquiry->title }}</td>
                                                            <td>{{ $enquiry->message }}</td>
                                                            <td>{{ Carbon\Carbon::parse($enquiry->updated_at)->diffForHumans() }}</td>
                                                            <td>{{ $enquiry->responsemessage }}</td>

                                                            <td>
                                                                @if ($enquiry->responded < 1 )
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary btn-custom "
                                                                    value="1167" data-toggle="modal"
                                                                    data-target="#myModaldepo{{ $loop->index + 1 }}">Respond</button>

                                                                @else
                                                                <button type="button"
                                                                    class="btn btn-sm btn-secondary btn-custom "
                                                                    value="1167" data-toggle="modal"
                                                                    data-target="#{{ $loop->index + 1 }}">Responded</button>

                                                                @endif

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
                                                                                            enquiry</h3>
                                                                                    </div>
                                                                                    <ul class="list-group">
                                                                                        <li class="list-group-item">
                                                                                            <span><b>enquiry Name</b></span>
                                                                                            <span
                                                                                                class="float-right tx-primary">{{ $enquiry->name }}</span>
                                                                                        </li>
                                                                                        <li class="list-group-item">
                                                                                            <span><b>Email</b></span>
                                                                                            <span
                                                                                                class="float-right tx-primary">
                                                                                                {{ $enquiry->email }}</span>
                                                                                        </li>

                                                                                        <li class="list-group-item">
                                                                                            <span><b>created on
                                                                                                    </b></span> <span
                                                                                                class="float-right tx-primary">{{ Carbon\Carbon::parse($enquiry->updated_at)->diffForHumans() }}</span>
                                                                                        </li>

                                                                                    </ul>
                                                                                    <div class="card-body">
                                                                                        <hr>
                                                                                        <div class="card-header bg-dark">
                                                                                            <h3
                                                                                                class="card-title text-white">
                                                                                                Edit enquiry</h3>
                                                                                        </div>
                                                                                        <small class="text-info">You
                                                                                            can Respond to the enquiry below</small>
                                                                                        <form method="post"
                                                                                            action="{{ route('enquiryresponse') }}" enctype="multipart/form-data">
                                                                                            @csrf

                                                                                            <input name="id"
                                                                                                type="hidden"
                                                                                                value="{{ $enquiry->id }}">
                                                                                            <div class="form-group">
                                                                                                <label>Email</label><br>
                                                                                                <input type="text"
                                                                                                    name="email"
                                                                                                    class="form-control"
                                                                                                    value="{{ $enquiry->email }}">
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <label>Message</label>
                                                                                                    <textarea type="text" class="form-control" rows="5" name="mail"
                                                                                                        placeholder="Write Message"></textarea>
                                                                                                </div>
                                                                                            </div>



                                                                                            <div class="text-center">
                                                                                                <button type="submit"
                                                                                                    name=""
                                                                                                    class="btn btn-success waves-effect waves-light">Send Response
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
                                                                                {{ $enquiry->enquiry }} enquiry with price as
                                                                                {{ $enquiry->price }} ?</h4>
                                                                        </div>
                                                                        {{-- <div class="modal-footer no-border">
                                                                            <button type="button"
                                                                                class="btn btn-secondary waves-effect"
                                                                                data-dismiss="modal">No</button>
                                                                            <a href="{{ route('deleteenquiry', $enquiry->id) }}"
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
