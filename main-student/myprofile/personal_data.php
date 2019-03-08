<form>


    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="" width="150px;" height="150px;">
                        </div>
                        <div class="col">
                            <label data-error="wrong" data-success="right" for="form9" class="label-form9">
                                <i class="fa fa-upload"></i>
                                <span id="label-span">CHOOSE FILE</span>
                            </label>
                            <input type="file" id="form9" name="file" class="form-control validate"> <!-- multiple="true" -->
                            <!-- <button type="button" id="main-menu" class="btn btn-info btn-menu-ctm"><i class="fa fa-bars"></i></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div  style="float: right;"> 
                <input type="submit" name="" class="btn btn-primary" value="Save Changes">
            </div>
        </div>
    </div>

    <br>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" name="name" id="firstname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="name" id="lastname" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="name" id="middlename" class="form-control" placeholder="Middle Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="birthday">Date of Birth</label>
                    <input type="text" name="birthday" id="birthday" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <label for="birthplace">Place of Birth</label>
                    <input type="text" name="birthplace" id="birthplace" class="form-control">
                </div>
                <div class="form-group col-sm-1">
                    <label for="age">Age</label>
                    <input type="text" name="age" id="age" class="form-control" disabled/>
                </div>
                <div class="form-group col-sm-3">
                    <label for="religion">Religion</label>
                    <input type="text" name="religion" id="religion" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    <label>Sex</label><br>
                    <div class="form-check-inline">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="male" name="gender" value="gender">
                            <label class="custom-control-label" for="male">
                                Male
                            </label>
                        </div>
                    </div>
                    <div class="form-check-inline">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="female" name="gender" value="gender">
                            <label class="custom-control-label" for="female">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="status">Civil Status</label>
                    <select class="form-control" id="status">
                        <option>Single</option>
                        <option>Married</option>
                        <option>Legally Separated</option>
                        <option>Living Together</option>
                        <option>Divorced</option>
                        <option>Widowed</option>
                    </select>
                </div>
                <div class="form-group col-sm-2">
                    <label for="nationality">Nationality</label>
                    <select class="form-control" id="nationality">
                        <option>Filipino</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div class="form-group col-sm-3"  id="other_nation"  style="display:hidden;">
                    <label for="nationality">Other</label>
                    <input type="text" name=""  class="form-control">
                </div>
            </div>

            
            <br>
                        <div class="form-group">
                            <label for="address">Residential Address</label>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="house_no">House No.</label>
                                    <input type="text" name=""  id="house_no" class="form-control" placeholder="House No.">
                                </div>
                                <div class="col-sm-4">
                                    <label for="street">Street Name</label>
                                    <input type="text" name=""  id="street" class="form-control" placeholder="Street Name">
                                </div> 
                                <div class="col-sm-3">
                                    <label for="barangay">Barangay</label>
                                    <input type="text" name=""  id="barangay" class="form-control" placeholder="Barangay">
                                </div>    
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="province">Province</label>
                                <select class="form-control" id="province">
                                    <option>province</option>
                                </select>
                            </div>    
                            <div class="col-sm-4">
                                <label for="town">Town</label>
                                <select class="form-control" id="town">
                                    <option>town</option>
                                </select>
                            </div> 
                            <div class="col-sm-4">
                                <label for="region">Region</label>
                                <select class="form-control" id="region">
                                    <option>region</option>
                                </select>
                            </div> 
                        </div>

                        <br><br>
                        <div class="form-group">
                            <label for="address">Permanent Address</label>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="house_no">House No.</label>
                                    <input type="text" name=""  id="house_no" class="form-control" placeholder="House No.">
                                </div>
                                <div class="col-sm-4">
                                    <label for="street">Street Name</label>
                                    <input type="text" name=""  id="street" class="form-control" placeholder="Street Name">
                                </div> 
                                <div class="col-sm-3">
                                    <label for="barangay">Barangay</label>
                                    <input type="text" name=""  id="barangay" class="form-control" placeholder="Barangay">
                                </div>    
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="province">Province</label>
                                <select class="form-control" id="province">
                                    <option>province</option>
                                </select>
                            </div>    
                            <div class="col-sm-4">
                                <label for="town">Town</label>
                                <select class="form-control" id="town">
                                    <option>town</option>
                                </select>
                            </div> 
                            <div class="col-sm-4">
                                <label for="region">Region</label>
                                <select class="form-control" id="region">
                                    <option>region</option>
                                </select>
                            </div> 
                        </div>

                        <br><br>
                        <div class="row">
                            <div class="form-group col-sm-7">
                                <label for="email">Email Address</label>
                                <input type="text" name="name" id="email" class="form-control">
                            </div>

                            <div class="form-group col-sm-5">
                                <label for="tel_cel">Contact No.</label>
                                <input type="text" name="name" id="tel_cel" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <br>
