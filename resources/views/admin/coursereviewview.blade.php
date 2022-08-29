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
                                <h3 class="card-title text-white">Create Review </h3>
                            </div>
                            <div class="card-body">
                                <form class="row g-3" action="{{route('reviewadd')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="id" hidden value="{{$courseid}}" id="">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Course Review</label>
                                            <input type="text" required class="form-control" name="review"
                                                placeholder="Course Review"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Review Name</label>
                                            <input type="text" required class="form-control" name="name"
                                                placeholder="review name"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Course Review star</label>

                                            <input type="range" name="star" min="1" step="1" max="5" required class="form-control"
                                                placeholder="star"  value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-md" style="width: 100%">Create </button>
                                    </div>
                                </form>
                               Use the from to create a review
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
                                        <th>Course Reviews</th>
                                        <th>Status</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($coursereview)
                                        @foreach ($coursereview as $review)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $review->review }}</td>
                                                <td>{{ $review->approved > 0 ? 'Approved' : 'Pending' }} </td>



                                                <td>

                                                    <button type="button"
                                                        class="btn btn-sm btn-primary btn-custom "
                                                        value="1167" data-toggle="modal"
                                                        data-target="#myModaldepo{{ $loop->index + 1 }}">{{ $review->approved > 0 ? 'Approved' : 'Click to approve' }}</button>

                                                    <button type="button"
                                                        class="btn btn-sm btn-pink btn-custom " value="1167"
                                                        data-toggle="modal"
                                                        data-target="#myModaldel{{ $loop->index + 1 }}">Delete</button>
                                                </td>
                                                <div id="myModaldepo{{ $loop->index + 1 }}" class="modal fade "
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
                                                                <h4>Are you sure to Approve
                                                                    {{ $review->review }} with id as
                                                                    {{ $review->id }} ?</h4>
                                                            </div>
                                                            <div class="modal-footer no-border">
                                                                <button type="button"
                                                                    class="btn btn-secondary waves-effect"
                                                                    data-dismiss="modal">No</button>
                                                                <a href="{{ route('coursereviewapprove', $review->id) }}"
                                                                    class="btn btn-pink waves-effect">Approve</a>
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
                                                                    {{ $review->review }} with id as
                                                                    {{ $review->id }} ?</h4>
                                                            </div>
                                                            <div class="modal-footer no-border">
                                                                <button type="button"
                                                                    class="btn btn-secondary waves-effect"
                                                                    data-dismiss="modal">No</button>
                                                                <a href="{{ route('coursereviewdelete', $review->id) }}"
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
