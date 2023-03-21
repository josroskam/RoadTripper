<?php
    require_once __DIR__ . '../../components/head.php';
    require_once __DIR__ . '../../components/header.php';
?>

<!-- 404 page -->

<style>
    body {
        background-color: #f8f8f8;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
    }

    h1, h2 {
        font-weight: 700;
        text-align: center;
        margin: 0 0 20px;
    }

    p {
        margin: 0 0 10px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 50px 20px;
        text-align: center;
    }

    .illustration {
        margin-bottom: 50px;
    }

    .illustration img {
        max-width: 100%;
        height: auto;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
    }

    .button:hover {
    background-color: #555;
    color: #fff;
    text-decoration: none;
}


    .error-page {
        font-size: 120px;
        margin: 0 0 20px;
        color: #333;
    }
</style>

<div class="container">
    <!-- <div class="illustration">
        <img src="/assets/images/404-illustration.png" alt="404 illustration">
    </div> -->
    <h1 class="error-page">Oops! 404</h1>
            <p>Alas! The page you seek is lost,</p>
            <p>But we'll help you find the path you must.</p>
            <p>Let's guide you home, dear wanderlust.</p>
            <br>
    <a href="/" class="button">Back to homepage</a>
</div>

<?php
    require_once __DIR__ . '../../components/footer.php';
?>
