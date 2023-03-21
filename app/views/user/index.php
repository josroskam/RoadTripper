<?php
    require_once __DIR__ . '../../components/head.php';
    require_once __DIR__ . '../../components/header.php';
?>

    <div id="my-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Update your account</h2>
            </div>
            <div class="modal-body">
                <p>Security check! Please enter your password to update your login credintials.</p>
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Password:</label>
                        </div>
                        <div class="col-12 col-md-7">
                            <div class="form-group mb-2">
                                <input type="password" class="form-control" name="passwordToCheck" />
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="form-group mb-2">
                                <button class="btn btn-primary" type="submit" value="Submit" name="passwordCheck"
                                    id="myBtn">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- <h3>Modal Footer</h3> -->
            </div>
        </div>
    </div>
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
                            <button class="btn btn-danger" type="submit" value="Submit" name="deleteAccount">Delete</button>
                            <!-- <button class="btn btn-danger" type="submit" value="Submit" name="deleteAccount" id="myBtn">Delete Account</button> -->
                            <button id="modal-btn2" type="Submit" name="updateAccount" onclick="updateAccount()" class="modal-btn mt-2" style="display:none">Save changes</button>
                        </div>
                        <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <?php
            require_once __DIR__ . '../../components/footer.php';
        ?>
    <script src="/js/user.js"></script>