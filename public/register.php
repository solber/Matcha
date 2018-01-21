<?php require 'header.php'; require 'required/functions.php'; iConnected(); ?>

<div class="login">
    <div class="container" style="position: relative; top: 10%; color: whitesmoke; z-index: 2;">
        <center><h1 style="font-size: 4vw;">Register</h1></center><img src="img/hearts.png" width="5%">
        <form action="action/register_user.php" method="POST">
            <div class="form-group">
                <label for="username" style="font-size: 2vw;">Username :</label>
                <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="Email" style="font-size: 2vw;">Email :</label>
                <input type="email" class="form-control" name="email" id="Email" required>
            </div>
            <div class="form-group">
                <label for="psw" style="font-size: 2vw;">Password :</label>
                <input type="password" class="form-control" name="password" id="psw" required>
            </div>
            <div class="form-group">
                <label for="pswr" style="font-size: 2vw;">Repeat Password :</label>
                <input type="password" class="form-control" name="passwordr" id="pswr" required>
            </div>
            <div class="form-group">
                <center><input type="submit" class="btn btn-primary" name="btn" value="Register"></center>
            </div>
        </form>
    </div>
</div>