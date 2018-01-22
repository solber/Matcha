<?php require 'header.php'; require 'required/functions.php'; iNotConnected(); ?>

<div class="login">
    <div class="container" style="position: relative; top: 15%; color: whitesmoke; z-index: 2;">
    	
    	<?php
    		require 'required/database.php';
    		if ($_SESSION['auth']->orientation === "M" OR $_SESSION['auth']->orientation === "F")
    		{
    			$req = $pdo->prepare("SELECT * FROM users WHERE gender = ?");
    			$req->execute([$_SESSION['auth']->orientation]);
    		}
    		else
    			$req = $pdo->query('SELECT * FROM users');
			$res = $req->fetchall();

			foreach ($res as $currentUser) {
				if ($currentUser->id != $_SESSION['auth']->id)
				{
					?><a href="uprofile?id=<?php echo $currentUser->id; ?>"  style="color: whitesmoke;">
		    		<div class="profile-box">
			    		<h1 class="profile-box-h1"><?php echo $currentUser->name; ?> - <span><?php echo $currentUser->age; ?></span></h1>
			    		<h2 class="profile-box-h2"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $currentUser->location; ?></h2>
			    		<h2 class="profile-box-h2-pts" style="color: yellow;"><i class="fa fa-star" aria-hidden="true"></i><?php echo $currentUser->popscore; ?></h2>
			    		<img src="<?php echo $currentUser->profile_img; ?>" height="80%">
			    	</div>
			    	<br>
		    		</a><?php
		    	}
			}
			?>
    </div>
</div>
</div>