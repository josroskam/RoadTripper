
<div class="container login-container">
        <div class="row">
            <div class="alert alert-success" role="alert" id="alertBox" style="display:none">
                <p id="alertParagraph"></p>
            </div>
            <div class="col-md-6 login-form-1">
                <h3>Login in</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Emailaddress *" value="" name="email" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" value=""
                            name="hashedpassword" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" name="LoginUser" />
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Register new account</h3>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Firstname *" value="" name="firstname" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Lastname *" value="" name="lastname" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Emailaddress *" value="" name="email" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password *" value=""
                            name="hashedpassword" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Repeat password *" value=""
                            name="passwordrepeat" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Favorite holiday destination *" value=""
                            name="destination" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Register" name="SubmitNewUser" />
                    </div>
                </form>
            </div>
        </div>
    </div>