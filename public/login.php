<?php require 'header.php'; require 'required/functions.php'; iConnected(); ?>
    <div class="login">
    <div class="container" style="position: relative; top: 15%; color: whitesmoke; z-index: 2;">
        <center><h1 style="font-family: Gabriola; font-style: italic; font-size: 4vw">Login</h1></center>
        <form action="action/login_user.php" method="POST">
            <div class="form-group">
                <label for="username" style="font-family: Gabriola; font-style: italic; font-size: 2vw">Username :</label>
                <input type="text" class="form-control" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="psw" style="font-family: Gabriola; font-style: italic; font-size: 2vw">Password :</label>
                <input type="password" class="form-control" name="password" id="psw" required>
            </div>
            <div class="form-group" style="position: relative;left: 5%;">
                <center><input type="submit" class="btn btn-primary" name="btn" value="Login"> <a href="reset.php" style="color: whitesmoke">Forgot password ?</a></center>
            </div>
        </form>
    </div>
    <img src="img/hearts.png" style="position: relative;left: 3%; z-index: 1;">
</div>