<?php if (session_status() == PHP_SESSION_NONE) { session_start(); } date_default_timezone_set( 'Europe/Paris' ); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Matcha</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script>
        $(document).ready(function(){ 
            $("#search").autocomplete({source: "action/search.php"}); 
        });
    </script>
    <script>
      $(document).ready(function(){

      // updating the view with notifications using ajax
      function load_unseen_notification(view = '')
      {
        $.ajax({
            url:"fetch_noti.php",
            method:"POST",
            data:{view:view},
            dataType:"json",
            success:function(data)
            {
              $('.notil').html(data.notification);
              if(data.unseen_notification > 0)
              {
                $('.count').html(data.unseen_notification);
              }
            }
        });
      }

      load_unseen_notification('yes');

      $(document).on('click', '.noti', function(){
        $('.count').html(''); 
        load_unseen_notification('seen'); 
      });
      setInterval(function(){
        $('.count').html('');
        load_unseen_notification('yes');
        }, 2000);
      });
      </script>


</head>
<body>
     <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="z-index: 999; background-color: #2377ff!important;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/index.php">Matcha</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php if (isset($_SESSION['auth'])) { ?>
              <li class="nav-item active">
                <a class="nav-link" href="/profile.php">Profile <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/chat.php">Chat <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/account.php">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/recommanded.php">Recommended</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Search by
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/filter_age.php">Age</a>
                  <a class="dropdown-item" href="/filter_local.php">Location</a>
                  <a class="dropdown-item" href="/filter_popu.php">Popularity</a>
                  <a class="dropdown-item" href="/filter_tags.php">Interest</a>
                </div>
                <li class="nav-item">
                  <a class="nav-link" href="/action/logout.php">logout</a>
                </li>
                <li class="nav-item dropdown" style=" position: relative; top: 8px">
                  <a href="#" class="dropdown-toggle noti" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px; color: red"></span> <i class="fa fa-bell" aria-hidden="true" style="color: black;"></i></a>
                  <ul class="dropdown-menu notil"></ul>
                </li>
              </li>
            <?php }else{ ?>
              <li class="nav-item active">
                <a class="nav-link" href="/login.php">Login <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register.php">Register</a>
              </li>
            <?php } ?>
        </ul>
        <?php if (isset($_SESSION['auth'])) { ?>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
          <select class="form-control" id="exampleSelect1" name="selectedfilter">
            <option value="l">Location</option>
            <option value="a">Age</option>
            <option value="p">Popu</option>
            <option value="i">Interest</option>
          </select>
          <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" id="search">
          <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
        </form>
        <?php } ?>
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