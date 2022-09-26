<?php
session_start();
$_SESSION['role'] = 'visiteur'; //administrateur utilisateur visiteur
$_SESSION['logIN'] = '0';
$_SESSION['admin'] = '0';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="/images/bio-logo-3.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">

    <title><?php echo isset($titre) ? $titre: 'Épicerie biologique'; ?></title>

</head>
<body>