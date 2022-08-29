@extends("adminlayout.adminlayout")
@section('body')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#default'
        });
    </script>


    <div class="content-page">

        <div class="content">
            <div class="container-fluid">

                <div class="row">
                </div>



                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h3 class="card-title text-white">{{ isset($id) ? "Send Mail to $useremail" : 'Send Bulk Mail to Staff' }}</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('postemailstaff') }}" method="post">
                                    @csrf
                                    <input type="text" hidden name="userid" value="{{ isset($id) ? $id : '' }}" id="">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" class="form-control" name="mailtitle"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea type="text" class="form-control" rows="5" name="mail"
                                                    placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="send_bulk"
                                            class="btn btn-primary waves-effect waves-light">Send Message To Users</button>
                                    </div>
                                </form>
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








    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
    </div>


    <div>
        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
            <i class="fa fa-pen fa-lg"></i>&nbsp;
            <span>Send Email</span>

        </button>
    </div>
    </form>
    </div>
    </div>
    </div>




    </div>
    </div>
    </div>
    </div>
@endsection
