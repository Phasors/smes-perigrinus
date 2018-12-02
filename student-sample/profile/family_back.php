<form>

    <div class="row">
        <div class="col-sm-6">
            <ul class="nav nav-pills" style="margin-top: 2%">
                <li class="active">
                    <a data-toggle="pill" href="#back1" class="btn btn-outline-success active">FATHER </a>
                </li>
                <li style="padding-left: 10px;">
                    <a data-toggle="pill" href="#back2" class="btn btn-outline-success">MOTHER </a>
                </li> 
            </ul>
        </div>
        <div class="col-sm-6">
            <div  style="float: right; padding-top: 10px;"> 
                <input type="submit" name="" class="btn btn-primary" value="Save Changes">
            </div>
        </div>
    </div>

    <div class="tab-content">

        <!----------------------------  FATHER  --------------------------------->
        <div id="back1" class="tab-pane show fade active">
            <br>
            <div class="card">
                <div class="card-body">
                    <br>
                    <div class="form-group">
                        <label>Father's Name</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" name="name" id="firstname_f" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="name" id="lastname_f" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="name" id="middlename_f" class="form-control" placeholder="Middle Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="birthday_f">Birthday</label>
                            <input type="text" name="birthday_f" id="birthday_f" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="birthplace_f">Place of Birth</label>
                            <input type="text" name="birthplace_f" id="birthplace_f" class="form-control">
                        </div>
                        <div class="form-group col-sm-1">
                            <label for="age_f">Age</label>
                            <input type="text" name="age" id="age_f" class="form-control" disabled/>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="religion_f">Religion</label>
                            <input type="text" name="religion_f" id="religion_f" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="occup_f">Occupation</label><br>
                            <input type="text" name="occup_f" id="occup_f" class="form-control">
                        </div>

                        <div class="form-group col-sm-2">
                            <label for="nationality_father">Nationality</label>
                            <select class="form-control" id="nationality_father">
                                <option>Filipino</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-3"  id="other_nation_father"  style="display:hidden;">
                            <label for="nationality_father">Other</label>
                            <input type="text" name=""  class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-7">
                            <label for="email_f">Email Address</label>
                            <input type="text" name="email_f" id="email_f" class="form-control">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="tel_cel_f">Telephone No./Cellphone No.</label>
                            <input type="text" name="tel_cel_f" id="tel_cel_f" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>Educational Attainment</label><br>
                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_elem_f" name="educ_attain_elem_f" value="educ_attain_elem_f">
                                    <label class="custom-control-label" for="educ_attain_elem_f">
                                        Elementary
                                    </label>
                                </div>
                            </div>
                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_high_f" name="educ_attain_high_f" value="educ_attain_high_f">
                                    <label class="custom-control-label" for="educ_attain_high_f">
                                        High School
                                    </label>
                                </div>
                            </div>

                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_college_f" name="educ_attain_college_f" value="educ_attain_college_f">
                                    <label class="custom-control-label" for="educ_attain_college_f">
                                        College
                                    </label>
                                </div>
                            </div>

                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_mas_f" name="educ_attain_mas_f" value="educ_attain_mas_f">
                                    <label class="custom-control-label" for="educ_attain_mas_f">
                                        Master's
                                    </label>
                                </div>
                            </div>

                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_doc_f" name="educ_attain_doc_f" value="educ_attain_doc_f">
                                    <label class="custom-control-label" for="educ_attain_doc_f">
                                        Doctorate
                                    </label>
                                </div>
                            </div>

                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_voc_f" name="educ_attain_voc_f" value="educ_attain_voc_f">
                                    <label class="custom-control-label" for="educ_attain_voc_f">
                                        Vocational Technology
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                </div>
            </div>

        </div>

        <!----------------------------  MOTHER  --------------------------------->
        <div id="back2" class="tab-pane fade">
            <br>
            <div class="card">
                <div class="card-body">
                    <br>
                    <div class="form-group">
                        <label>Mother's Name</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" name="name" id="firstname_m" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="name" id="lastname_m" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="name" id="middlename_m" class="form-control" placeholder="Middle Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="birthday_m">Birthday</label>
                            <input type="text" name="birthday_m" id="birthday_m" class="form-control">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="birthplace_m">Place of Birth</label>
                            <input type="text" name="birthplace_m" id="birthplace_m" class="form-control">
                        </div>
                        <div class="form-group col-sm-1">
                            <label for="age_m">Age</label>
                            <input type="text" name="age" id="age_m" class="form-control" disabled/>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="religion_m">Religion</label>
                            <input type="text" name="religion_m" id="religion_m" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="occup_m">Occupation</label><br>
                            <input type="text" name="occup_m" id="occup_m" class="form-control">
                        </div>

                        <div class="form-group col-sm-2">
                            <label for="nationality_mother">Nationality</label>
                            <select class="form-control" id="nationality_mother">
                                <option>Filipino</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-3"  id="other_nation_mother"  style="display:hidden;">
                            <label for="nationality_mother">Other</label>
                            <input type="text" name=""  class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-7">
                            <label for="email_m">Email Address</label>
                            <input type="text" name="email_m" id="email_m" class="form-control">
                        </div>
                        <div class="form-group col-sm-5">
                            <label for="tel_cel_m">Telephone/Cellphone</label>
                            <input type="text" name="tel_cel_m" id="tel_cel_m" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label>Educational Attainment</label><br>
                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_elem_m" name="educ_attain_elem_m" value="educ_attain_elem_m">
                                    <label class="custom-control-label" for="educ_attain_elem_m">
                                        Elementary
                                    </label>
                                </div>
                            </div>
                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_high_m" name="educ_attain_high_m" value="educ_attain_high_m">
                                    <label class="custom-control-label" for="educ_attain_high_m">
                                        High School
                                    </label>
                                </div>
                            </div>

                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_college_m" name="educ_attain_college_m" value="educ_attain_college_m">
                                    <label class="custom-control-label" for="educ_attain_college_m">
                                        College
                                    </label>
                                </div>
                            </div>

                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_mas_m" name="educ_attain_mas_m" value="educ_attain_mas_m">
                                    <label class="custom-control-label" for="educ_attain_mas_m">
                                        Master's
                                    </label>
                                </div>
                            </div>

                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_doc_m" name="educ_attain_doc_m" value="educ_attain_doc_m">
                                    <label class="custom-control-label" for="educ_attain_doc_m">
                                        Doctorate
                                    </label>
                                </div>
                            </div>

                            <div class="form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="educ_attain_voc_m" name="educ_attain_voc_m" value="educ_attain_voc_m">
                                    <label class="custom-control-label" for="educ_attain_voc_m">
                                        Vocational Technology
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <!----------------------------  GUARDIAN  --------------------------------->
    <br>
    <div class="card">
        <div class="card-header">
            <h5>GUARDIAN</h5>
        </div>
        <div class="card-body">  
            <div class="form-group">
                <label>Guardian's Name</label>
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" name="name" id="firstname_guard" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="name" id="lastname_guard" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="name" id="middlename_guard" class="form-control" placeholder="Middle Name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="rel_guard">Relation</label>
                    <input type="text" name="name" id="rel_guard" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <label for="tel_cel">Telephone No./Cellphone No.</label>
                    <input type="text" name="name" id="tel_cel_guard" class="form-control">
                </div>
                <div class="form-group col-sm-5">
                    <label for="email_guard">Email Address</label>
                    <input type="text" name="email_guard" id="email_guard" class="form-control">
                </div>

                
            </div>

            <div class="form-group">
                <label for="address_guard">Address</label>
                <div class="row">
                    <div class="col-sm-7">
                        <input type="text" name="name" id="address_no_guard" class="form-control" placeholder="Rm# Bldg./House#, Street, Brgy.">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="name" id="address_city_guard" class="form-control" placeholder="City">
                    </div>    
                </div>
            </div>
        </div>
    </div>
</form>

<br>

