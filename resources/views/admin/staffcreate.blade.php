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
                                <h3 class="card-title text-white">Create staff profile</h3>
                            </div>
                            <div class="card-body">

                                <form class="row g-3" action="{{route('post_create_staff')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" required class="form-control" name="name"
                                                placeholder="staff name" value="{{ isset($staff) ? $staff->name : '' }}"
                                                {{ isset($user) ? 'readonly' : '' }}>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" required name="email" value="" class="form-control"
                                            id="inputEmail4" placeholder="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Phone</label>
                                        <input type="tel" required name="phone" value="" placeholder="phone"
                                            class="form-control" id="inputPassword4">
                                    </div>

                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Skill</label>
                                        <input type="text" required class="form-control" name="skill" value=""
                                            id="inputAddress" placeholder="Professional Skills">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Self Description </label>
                                        <input type="text" class="form-control" name="description" value=""
                                            id="inputAddress2" placeholder="Self description">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Instagram</label>
                                        <input type="text" name="instagram" value="" placeholder="Ig handle"
                                            class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Twitter</label>
                                        <input type="text" name="twitter" value="" placeholder="twitter handle"
                                            class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Facebook</label>
                                        <input type="text" name="facebook" value=""
                                            placeholder="facebook profile link" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label ">Github</label>
                                        <input type="text" name="github" value=""
                                            placeholder="Github profile link" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label col-form-label">State</label><br>
                                        <select id="inputState" class="form-select" name="state">
                                            <option value="" selected="selected">- Select -</option>
                                            <option value="Abuja FCT">Abuja FCT</option>
                                            <option value="Abia">Abia</option>
                                            <option value="Adamawa">Adamawa</option>
                                            <option value="Akwa Ibom">Akwa Ibom</option>
                                            <option value="Anambra">Anambra</option>
                                            <option value="Bauchi">Bauchi</option>
                                            <option value="Bayelsa">Bayelsa</option>
                                            <option value="Benue">Benue</option>
                                            <option value="Borno">Borno</option>
                                            <option value="Cross River">Cross River</option>
                                            <option value="Delta">Delta</option>
                                            <option value="Ebonyi">Ebonyi</option>
                                            <option value="Edo">Edo</option>
                                            <option value="Ekiti">Ekiti</option>
                                            <option value="Enugu">Enugu</option>
                                            <option value="Gombe">Gombe</option>
                                            <option value="Imo">Imo</option>
                                            <option value="Jigawa">Jigawa</option>
                                            <option value="Kaduna">Kaduna</option>
                                            <option value="Kano">Kano</option>
                                            <option value="Katsina">Katsina</option>
                                            <option value="Kebbi">Kebbi</option>
                                            <option value="Kogi">Kogi</option>
                                            <option value="Kwara">Kwara</option>
                                            <option value="Lagos">Lagos</option>
                                            <option value="Nassarawa">Nassarawa</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Ogun">Ogun</option>
                                            <option value="Ondo">Ondo</option>
                                            <option value="Osun">Osun</option>
                                            <option value="Oyo">Oyo</option>
                                            <option value="Plateau">Plateau</option>
                                            <option value="Rivers">Rivers</option>
                                            <option value="Sokoto">Sokoto</option>
                                            <option value="Taraba">Taraba</option>
                                            <option value="Yobe">Yobe</option>
                                            <option value="Zamfara">Zamfara</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputZip" class="form-label">LGA</label>
                                        <input type="text" name="lga" placeholder="Local Government Area" value="" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputZip" class="form-label">Image</label>
                                        <input type="file" name="pic" placeholder="chose profile picture" value="" class="form-control" id="inputZip">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-md" style="width: 100%">Create Profile</button>
                                    </div>
                                </form>
                               Use the from to create a staff profile
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
