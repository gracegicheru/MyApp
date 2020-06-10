
 @extends('layouts.master')
 @section('content')
 <section class="login_part section_padding ">
        <div class="container" style= "margin-top: -200px;">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Already Have an Account?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="/login" class="btn_3">Sign In</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome! <br>
                                Please Sign up now</h3>
                            <form class="row contact_form" id="registerform" method="post" novalidate="novalidate">
                                @csrf
                                 <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="fname" name="fname" value=""
                                        placeholder="First Name">
                                </div>
                                 <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="lname" name="lname" value=""
                                        placeholder="Last Name">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="email" value=""
                                        placeholder="Email">
                                </div>
                                 <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="phone" name="phone" value=""
                                        placeholder="Phone number">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                 <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="cpassword" name="cpassword" value=""
                                        placeholder="Confirm Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" id="registerbtn" class="btn_3">
                                        Sign Up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <script src="./assets/js/register.js"></script>

    @endsection
       


