<?php
    // session_start();
    define('PROJECT_ROOT_PATH', __DIR__);
    include_once (PROJECT_ROOT_PATH . '/../header/index.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/mystyle.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Account</title>
    <link href="../feed/css/mystyle.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <style>
        <?php include '../../app/css/mystyle.css';
        ?>
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
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
                            <!-- <button id="modal-btn" type="button" class="modal-btn">Update account</button> -->
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
    <footer>
        <?php
            // define('PROJECT_ROOT_PATH', __DIR__);
            include_once (PROJECT_ROOT_PATH . '/../footer/index.php');
        ?>
    </footer>
    <script>
        // Get DOM Elements
        const modal = document.querySelector('#my-modal');
        const modalBtn = document.querySelector('#modal-btn');
        const closeBtn = document.querySelector('.close');

        // Events
        modalBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);
        window.addEventListener('click', outsideClick);

        // Open
        function openModal() {
            modal.style.display = 'block';
        }

        // Close
        function closeModal() {
            modal.style.display = 'none';
            var form = document.getElementById('myForm');
            form.reload();
        }

        // Close If Outside Click
        function outsideClick(e) {
            if (e.target == modal) {
                modal.style.display = 'none';
            }
        }
        var readonly = true;

        function switchReadonly() {
            // $('#modal-btn').on('click', (e) => {
            readonly = !readonly
            $('input').attr('readonly', readonly);
            // });
            notReadonlyInput();
        }

        function notReadonlyInput() {
            const input = document.getElementById('notreadonly');
            readonly = true;
            $(input).attr('readonly', readonly);
        }

        function showSaveButton() {
            const button = document.getElementById('modal-btn2');
            button.style.display = 'block';
        }

        function setPasswordValueToNull() {
            var v = document.getElementById('pwd').value = '';
        }

        var alertBox = document.getElementById('alertBox');
        var alertParagraph = document.getElementById('alertParagraph');

        function userRegisteredSuccessfully(succesMessage) {
            alertBox.className = "alert alert-success";
            alertBox.style = "display:block"
            alertParagraph.innerHTML = succesMessage;
        }

        function userRegisteredFailed(errorMessage) {
            alertBox.className = "alert alert-danger";
            alertBox.style = "display:block"
            alertParagraph.innerHTML = errorMessage;
        }

        // $(document).ready(function(){
        function updateFormFields() {
            $.ajax({
                url: "/api/user",
                type: "GET",
                success: function (userData) {
                    Object.keys(userData).forEach(function (key) {
                        // console.log(userData[key]);
                        console.log(userData.firstname);
                        // document.getElementById("newFirstname").value = userData[key]["firstname"];
                    });
                },
                error: function (xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        }

        function deleteAccount() {
  // send a DELETE request to the server to delete the account
  fetch('/api/user', {
    method: 'DELETE'
  })
  .then(response => {
    if (response.ok) {
      alert("Your account has been deleted.");
      // redirect the user to the login page
    //   window.location.replace("/login");
    } else {
      alert("An error occurred while deleting your account. Please try again later.");
    }
  })
  .catch(error => {
    console.error("Error deleting account:", error);
    alert("An error occurred while deleting your account. Please try again later.");
  });
}
    </script>
</body>

</html>