<?php
    define('PROJECT_ROOT_PATH', __DIR__);
    include_once (PROJECT_ROOT_PATH . '/../header/index.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Account</p>

    <?php
foreach($model as $user) {
    ?>
    <h4><?= ucfirst($user->getId())?></h4>
    <small>By: <?= $user->getFirstname()?> at <?=$user->getLastname()?></small>
    <p><?= $user->getPassword()?></p>
    <?php
}
?>
</body>
</html>