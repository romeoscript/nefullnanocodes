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
                            <h3 class="card-title text-white">All Gallery Content</h3>
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
                                                    <th>Picture</th>
                                                    <th>Piture Tile</th>
                                                    <th>Description</th>
                                                    <th>Skill</th>
                                                    <th>Posted on</th>
                                                    <th>Status</th>
                                                    <th>View/Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @if ($gsps)
                                                    @foreach ($gsps as $gsp)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $gsp->pic }}</td>
                                                            <td>$ {{ $gsp->pictitle }}</td>
                                                            <td>$ {{ $gsp->description }}</td>
                                                            <td>$ {{ $gsp->skill }}</td>
                                                            <td>{{ Carbon\Carbon::parse($gsp->created_at)->diffForHumans() }}
                                                            </td>
                                                            <td>{{ $gsp->approved > 0 ? 'Approved' : 'Pending' }} </td>
                                                            <td> <button type="button"
                                                                    class="btn btn-sm btn-success btn-custom "
                                                                    value="1167" data-toggle="modal"
                                                                    data-target="{{ $gsp->approved > 0 ? 'approved' : '#myModalcomple' }}{{ $loop->index + 1 }}">{{ $gsp->approved > 0 ? 'approved' : 'approve' }}</button>

                                                                <button type="button"
                                                                    class="btn btn-sm btn-pink btn-custom " value="1167"
                                                                    data-toggle="modal"
                                                                    data-target="#myModaldel{{ $loop->index + 1 }}">Delete</button>
                                                            </td>






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
                                                                                ${{ $gsp->pictitle }} with skill
                                                                                {{ $gsp->skill }} ?</h4>
                                                                        </div>
                                                                        <div class="modal-footer no-border">
                                                                            <button type="button"
                                                                                class="btn btn-secondary waves-effect"
                                                                                data-dismiss="modal">No</button>
                                                                            <a href="{{ route('galleryspritesdelete', $gsp->id) }}"
                                                                                class="btn btn-pink waves-effect">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                            <div id="myModalcomple{{ $loop->index + 1 }}"
                                                                class="modal fade " role="dialog">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="">
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <h4>Are you sure to Approve
                                                                                ${{ $gsp->pictitle }} gsp from
                                                                                {{ $gsp->skill }} as Complete ?</h4>
                                                                        </div>
                                                                        <div class="modal-footer no-border">
                                                                            <button type="button"
                                                                                class="btn btn-secondary waves-effect"
                                                                                data-dismiss="modal">No</button>
                                                                            <a href="{{ route('galleryspritesapprove', $gsp->id) }}"
                                                                                class="btn btn-success waves-effect">Yes
                                                                                Proceed</a>
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
