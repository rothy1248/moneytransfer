<?php
include 'common/header.php';
?>

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form">
            <h2>Please Sign Up <small>It's free and always will be.</small></h2>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="number" name="display_name" id="display_name" class="form-control input-lg" placeholder="Phone Number" tabindex="3">
            </div>
            <div class="form-group">
                <input type="number" name="display_name" id="display_name" class="form-control input-lg" placeholder="National ID or Passport Number" tabindex="3">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-3">
                    <span class="button-checkbox">
                        <label>I Agree
                            <input type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                        </label>
                    </span>
                </div>
                <div class="col-xs-8 col-sm-9 col-md-9">
                    By clicking <strong class="label label-primary">Register</strong>, you agree to the our <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a>.
                </div>
            </div>

            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>
            </div>
        </form>

    </div>
</div>
<?php
include 'common/footer.php';
?>