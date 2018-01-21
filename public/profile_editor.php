<?php require 'header.php'; require 'required/functions.php'; iNotConnected(); ?>

<div class="banner-home">
	<div class="login">
    	<div class="container" style="position: relative; top: 15%; color: whitesmoke; z-index: 2;">
			<form action="action/profile_editor.php" method="POST">
				<div class="form-group">
		            <label for="name" style="font-family: Gabriola; font-style: italic; font-size: 2vw">Your name :</label>
		            <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['auth']->name ?>" required>
		        </div>
		        <div class="form-group">
		        	<label for="gender" style="font-family: Gabriola; font-style: italic; font-size: 2vw">Gender : </label>
		        	<p style="font-size: 2vw">

		      		<?php if ($_SESSION['auth']->gender === "M") { ?>
		        		<input type="radio" name="gender" value="M" checked>Male
		        	<?php }else{ ?>
		        		<input type="radio" name="gender" value="M">Male
		        	<?php } ?>

		        	<?php if ($_SESSION['auth']->gender === "F") { ?>
		        		<input type="radio" name="gender" value="F" checked>Female</p>
		        	<?php }else{ ?>
		        		<input type="radio" name="gender" value="F">Female</p>
		        	<?php } ?>
		        	</p>
		        </div>
		        <div class="form-group">
		            <label for="orientation" style="font-family: Gabriola; font-style: italic; font-size: 2vw">Your orientation :</label>
		            <p style="font-size: 2vw">
		            	<?php if ($_SESSION['auth']->orientation === "M") { ?>
			            	<input type="radio" name="orientation" value="M" checked>Male
			            <?php }else{ ?>
			            	<input type="radio" name="orientation" value="M">Male
			            <?php } ?>
			       		
			       		<?php if ($_SESSION['auth']->orientation === "F") { ?>
			            	<input type="radio" name="orientation" value="F" checked>Female
			            <?php }else{ ?>
			            	<input type="radio" name="orientation" value="F">Female
			            <?php } ?>

			            <?php if ($_SESSION['auth']->orientation === "M/F") { ?>
			            	<input type="radio" name="orientation" value="M/F" checked>Male/Female
			            <?php }else{ ?>
			            	<input type="radio" name="orientation" value="M/F">Male/Female
			            <?php } ?>
			        </p>
		        </div>
		        <div class="form-group">
		        	<label for="bio" style="font-family: Gabriola; font-style: italic; font-size: 2vw">Your bio :</label>
		        	<input type="textarea" name="bio" class="form-control" maxlength="255" value="<?php echo $_SESSION['auth']->bio ?>">
		        </div>
		        <div class="form-group">
		        	<label style="font-family: Gabriola; font-style: italic; font-size: 2vw">Interest : </label><br>
		        	<p>
			        	<input type="text" name="i1" value="<?php echo $_SESSION['auth']->i1; ?>">
			        	<input type="text" name="i2" value="<?php echo $_SESSION['auth']->i2; ?>">
			        	<input type="text" name="i3" value="<?php echo $_SESSION['auth']->i3; ?>">
		        	</p>
		        </div>
		        <div class="form-group">
		        	<center><input type="submit" class="btn btn-primary" name="submit" value="Validate"></center>
		        </div>
			</form>
		</div>
	</div>
</div>