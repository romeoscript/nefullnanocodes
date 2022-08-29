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
                                <h3 class="card-title text-white">Create Student </h3>
                            </div>
                            <div class="card-body">

                                <form class="row g-3" action="{{ route('post_create_student') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>student Name</label>
                                            <input type="text" required class="form-control" name="name"
                                                placeholder="Student full name" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" required name="email" value="" class="form-control"
                                            id="inputEmail4" placeholder="Email address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Phone</label>
                                        <input type="tel" required name="phone" value="" class="form-control"
                                            id="inputEmail4" placeholder="phone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Sex</label>
                                        <input type="text" required name="sex" value="" class="form-control"
                                            id="inputEmail4" placeholder="sex">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">state</label>
                                        <input type="text" required name="state" value=""
                                            placeholder="State of Origin" class="form-control" id="inputPassword4">
                                    </div>

                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Course</label>
                                        <select name="course" required class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example">

                                            <option disabled>Click to select course</option>

                                            @if (isset($courses))
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->course }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Current Address</label>
                                        <input type="text" required name="address" value=""
                                            placeholder="Enter your crrent address" class="form-control"
                                            id="inputCity">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress2" class="form-label">L.G.A </label>
                                        <input type="text" required class="form-control" name="lga" value=""
                                            id="inputAddress2" placeholder="Local Government of Origin">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Student Passport</label>
                                        <input type="file" required name="studentpassport" value=""
                                            placeholder="passport" class="form-control" id="inputCity">
                                    </div>
                                    <br><br>


                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-md" style="width: 100%">Create
                                        </button>
                                    </div>
                                </form>
                                Use the from to create a Student
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
