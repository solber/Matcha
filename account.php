<?php require 'header.php'; require 'required/functions.php'; iNotConnected(); ?>

<div class="banner-home">
	<div class="login">
    	<div class="container" style="position: relative; top: 10%; color: whitesmoke; z-index: 2;">
    		<form action="action/account_editor.php" method="POST">
				<div class="form-group">
		            <label for="username" style="font-family: Gabriola; font-style: italic; font-size: 2vw">Change username :</label>
		            <input type="text" class="form-control" name="username" value="<?php echo $_SESSION['auth']->username ?>" required>
		            <center><input type="submit" class="btn btn-primary" name="subusername" value="Validate"></center>
		        </div>
		    </form>
		    <form action="action/account_editor.php" method="POST">
		        <div class="form-group">
		            <label for="mail" style="font-family: Gabriola; font-style: italic; font-size: 2vw">Change mail :</label>
		            <input type="text" class="form-control" name="mail" value="<?php echo $_SESSION['auth']->mail ?>" required>
		            <center><input type="submit" class="btn btn-primary" name="submail" value="Validate"></center>
		        </div>
		    </form>
		    <form action="action/account_editor.php" method="POST">
		        <div class="form-group">
		            <label for="psw" style="font-family: Gabriola; font-style: italic; font-size: 2vw">Change password :</label>
		            <input type="password" class="form-control" name="psw" value="" required>
		            <input type="password" class="form-control" name="pswr" value="" required>
		            <center><input type="submit" class="btn btn-primary" name="subpsw" value="Validate"></center>
		        </div>
		    </form>
    	</div>
    </div>
</div>