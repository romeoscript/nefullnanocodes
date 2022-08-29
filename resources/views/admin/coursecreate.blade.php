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
                                <h3 class="card-title text-white">Create course </h3>
                            </div>
                            <div class="card-body">

                                <form class="row g-3" action="{{route('post_create_course')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Course</label>
                                            <input type="text" required class="form-control" name="course"
                                                placeholder="course name"  value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Price</label>
                                        <input type="text" required name="price" value="" class="form-control"
                                            id="inputEmail4" placeholder="price">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Prerequisite</label>
                                        <input type="text" required name="prerequisite" value="" placeholder="prerequisite"
                                            class="form-control" id="inputPassword4">
                                    </div>

                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Tutor</label>
                                        <select name="tutor" required class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                                            <option  disabled >Open this select menu</option>

                                           @if (isset($staff))
                                           @foreach ($staff as $staffmamber )
                                           <option value="{{$staffmamber->id}}">{{$staffmamber->name}}</option>
                                           @endforeach

                                           @endif
                                          </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Max Duration </label>
                                        <input type="text" required class="form-control" name="maxduation" value=""
                                            id="inputAddress2" placeholder="Program maximum duration">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">courseouline</label>
                                        <input type="file" required name="courseouline" value="" placeholder="course outlin file in pdf ormsword orimage"
                                            class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">timetable</label>
                                        <input type="text" required name="timetable" value="" placeholder="days and time of classes"
                                            class="form-control" id="inputCity">
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-md" style="width: 100%">Create </button>
                                    </div>
                                </form>
                               Use the from to create a course
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
