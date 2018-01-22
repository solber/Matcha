<?php if (session_status() == PHP_SESSION_NONE) { session_start(); }  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Matcha</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script>
        $(document).ready(function(){ 
            $("#search").autocomplete({source: "action/search.php"}); 
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-inverse " style="z-index: 999; background-color: #1b63d6!important; border: none; border-radius: 0;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="/index.php">Matcha</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <!-- <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul>
            </li> -->
            <?php if (isset($_SESSION['auth']->id)) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recommanded.php">Recommanded</a>
                    </li>
                    <form class="navbar-form navbar-left" action="search.php" method="POST">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search" id="search" style="z-index: 9999">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                <?php } ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if (!isset($_SESSION['auth']->id)) { ?>
                <li><a href="/register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                <li><a href="/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <?php }else{ ?>
                <li><a href="/action/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- <nav class="navbar navbar-expand-sm bg-primary navbar-dark" style="z-index: 999;">
        <ul class="navbar-nav">
            <a class="navbar-brand" href="/index.php">Matcha</a>
            <?php if (isset($_SESSION['auth']->id)) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/recommanded.php">Recommanded</a>
                </li>
                <li class="nav-item" style="background-color: #5f9bfc!important">
                    <a class="nav-link" href="/action/logout.php">Logout</a>
                </li>
            <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register.php">Register</a>
                </li>
            <?php } ?>
        </ul>
    </nav> -->
<?php require 'flash.php'; ?>