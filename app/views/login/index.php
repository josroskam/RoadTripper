<?php
    require_once __DIR__ . '../../components/head.php';
    require_once __DIR__ . '../../components/header.php';
    require_once __DIR__ . '/login.php';
    require_once __DIR__ . '../../components/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script>
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
</script>
</html>