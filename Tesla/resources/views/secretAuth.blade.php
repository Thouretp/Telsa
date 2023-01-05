<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /logAuth');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma page secrete</title>
</head>
<body>
    <h1>Cette page ne devrait pas être accessible</h1>
    <?= dd($_SESSION)?>
</body>
</html>