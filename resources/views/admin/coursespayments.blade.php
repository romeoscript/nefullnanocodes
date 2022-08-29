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
                            <h3 class="card-title text-white">All Courses and the Payment</h3>
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
                                                    <th colspan="2" >Courses and there Payments  Made</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($courses))
                                                @foreach ($courses as $course )
                                                <tr>
                                                    <th>{{$loop->index + 1}}</th><th>{{$course->course}}</th><th>Amount Paid</th>
                                                </tr>
                                                @if ($allpayment)
                                                    @foreach ($allpayment as $payment)
                                                    @if ($payment->courseid == $course->id)
                                                    <tr>
                                                        <td>{{$loop->index +1}}</td>
                                                        <td>{{$payment->studentname}}</td>
                                                        <td>{{$payment->amountpaid}}</td>
                                                    </tr>
                                                    @endif

                                                    @endforeach
                                                    @endif

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
