@extends("adminlayout.adminlayout")
@section('body')
    <div class="content-page">

        <div class="content">
            <div class="container-fluid">

                <div class="row">
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="card-title text-white">All Crypto transactions</h3>
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
                                                        <th>Bank account number</th>
                                                        <th>Bank name</th>
                                                        <th>Bank</th>
                                                        <th>Coin Amount</th>
                                                        <th>Coin</th>
                                                        <th>Dollar rate</th>
                                                        <th>Coin worth in dollars</th>
                                                        <th>Transaction Date</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Amount in Naira</th>
                                                        <th>Status</th>

                                                        <th>View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($cointransactions)
                                                        @foreach ($cointransactions as $transactions)
                                                            <tr>
                                                                <td>{{ $loop->index + 1 }}</td>

                                                                <td>{{ $transactions->bankacno }}
                                                                </td>
                                                                <td>${{ $transactions->accname }}</td>
                                                                <td>${{ $transactions->bank }}</td>
                                                                <td>${{ $transactions->coinamount }}</td>
                                                                <td>${{ $transactions->coin }}</td>
                                                                <td>${{ $transactions->dollarrate }}</td>
                                                                <td>${{ $transactions->coin2dollar }}</td>
                                                                <td>{{ Carbon\Carbon::parse($transactions->created_at)->diffForHumans() }}
                                                                <td>${{ $transactions->email }}</td>
                                                                <td>${{ $transactions->phone }}</td>
                                                                <td>${{ $transactions->amountinnaira }}</td>
                                                                <td>
                                                                    {!! $transactions->paid < 1? "<span class='badge badge-danger'>pending</span></td>": "<span class='badge badge-success'>paid</span></td>" !!}

                                                                <td>
                                                                    <button type="button"
                                                                    class="btn btn-sm btn-success btn-custom "
                                                                    value="1167" data-toggle="modal"
                                                                    data-target="#myModal{{ $loop->index + 1 }}">Delete</button>



                                                                    <a href="{{route('marktransactionpaid',$transactions->id)}}"
                                                                        class="btn btn-sm btn-primary btn-custom ">Mark as apaid</a>
                                                                </td>


                                                                <!-- The Modal -->
                                                                <div class="modal fade"
                                                                    id="myModal{{ $loop->index + 1 }}" role="dialog">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="">
                                                                                <button type="button"
                                                                                    class="close"
                                                                                    data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">×</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="">
                                                                                    <div class="card">
                                                                                        <div
                                                                                            class="card-header bg-success">
                                                                                            <h3
                                                                                                class="card-title text-white">
                                                                                                transactions Actions</h3>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 text-center mb-3">
                                                                                               <div id="transactions437" class="modal fade" tabindex="-1" role="dialog"
                                                                                                    aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none">
                                                                                                    <div class="modal-dialog modal-full">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="">
                                                                                                                <button type="button" class="close" data-dismiss="modal"
                                                                                                                    aria-label="Close">
                                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <h4>Are you ready to delete {{ $transactions->coin }} of {{ $transactions->amountinnaira }} naira belonging to {{ $transactions->accname }}  ?</h4>
                                                                                                            </div>
                                                                                                            <div class="modal-footer" style="border: 0;">
                                                                                                                <button type="button" class="btn btn-secondary waves-effect"
                                                                                                                    data-dismiss="modal">No</button>
                                                                                                                <a href="{{ route('transactionsdelete', $transactions->id) }}"
                                                                                                                    class="btn btn-pink waves-effect">Delete</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <button type="button" class="btn mt-4 btn-sm btn-pink waves-effect waves-light" data-toggle="modal"
                                                                                                    data-target="#transactions437">Delete</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer"
                                                                                style="border:none;">
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
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
