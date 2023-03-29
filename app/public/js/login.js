var alertBox = document.getElementById('alertBox');
    var alertParagraph = document.getElementById('alertParagraph');

    function userRegisteredSuccessfully(){  
        alertBox.className = "alert alert-success";
        alertBox.style = "display:block"
        alertParagraph.innerHTML = "User registered successfully!";
    }

    function userRegisteredFailed(errorMessage){  
        alertBox.className = "alert alert-danger";
        alertBox.style = "display:block"
        alertParagraph.innerHTML = errorMessage;
    }