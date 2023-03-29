<div class="container login-container">
        <div class="row">
            <div class="alert alert-success" role="alert" id="alertBox" style="display:none">
                <p id="alertParagraph"></p>
            </div>
            <div class="col-ml-6 login-form-2">
                <h3>Update your account</h3>
                <p style="color: #FFFFFF">Please click the button below to verify your password.</p>
                <div class="col-12 d-flex justify-content-around">
                    <form method="POST" id="myForm">
                        <?php
                        foreach ($model as $user) {
                        ?>
                        <div class="row">
                            <div class="col-12 col-sm-5">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Firstname:</label>
                            </div>
                            <div class="col-12 col-sm-7">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="newFirstname"
                                        value="<?= ucfirst($user->getFirstname()) ?>" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-5 ">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Lastname:</label>
                            </div>
                            <div class="col-12 col-sm-7">
                                <div class="form-group mb-2">
                                    <input type="text" placeholder="" class="form-control" name="newLastname"
                                        value="<?= ucfirst($user->getLastname()) ?>" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-5 ">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Emailaddress:</label>
                            </div>
                            <div class="col-12 col-sm-7">
                                <div class="form-group mb-2">
                                    <input type="emailaddress" id="notreadonly" class="form-control"
                                        name="newEmailaddress" value="<?= $user->getEmailaddress() ?>" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-5 ">
                                <label id="testlbl" for="colFormLabel" class="col-sm-2 col-form-label">Password:</label>
                            </div>
                            <div class="col-12 col-sm-7">
                                <div class="form-group mb-2">
                                    <input type="password" class="form-control" name="newPassword" value="hidden"
                                        id="pwd" style="font-style:italic;" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-5 ">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Favorite destination:</label>
                            </div>
                            <div class="col-12 col-sm-7">
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control" name="newDestination"
                                        value="<?= $user->getFavorite_Holiday_Destination() ?>" readonly />
                                </div>
                            </div>
                            <button id="modal-btn" type="button" class="modal-btn">Update account</button>
                            <br> <br>
                            <button class="btn btn-danger" type="button" value="Submit" id="deleteAccount">Delete</button>
                            <button id="modal-btn2" type="Submit" name="updateAccount" onclick="updateAccount()" class="modal-btn mt-2" style="display:none">Save changes</button>
                        </div>
                        <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>