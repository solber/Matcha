<?php if (session_status() == PHP_SESSION_NONE) { session_start(); }  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Matcha</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark" style="z-index: 999;">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="index.php">Matcha</a>
            <?php if (isset($_SESSION['auth']->id)) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recommanded.php">Recommanded</a>
                </li>
                <li class="nav-item" style="background-color: #5f9bfc!important">
                    <a class="nav-link" href="action/logout.php">Logout</a>
                </li>
            <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            <?php } ?>
        </ul>
    </nav>
<?php require 'flash.php'; ?>