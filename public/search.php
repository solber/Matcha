<?php require 'header.php'; require 'required/functions.php'; iNotConnected(); ?>

<div class="login">
    <div class="container" style="position: relative; top: 15%; height: 80%; color: whitesmoke; z-index: 2; overflow-y: scroll;">
    	<?php
    	if (!empty($_POST) && isset($_POST['search']))
    	{
    		require 'required/database.php';
    		$req = $pdo->query("SELECT name FROM users WHERE name LIKE '%" .addslashes($_POST['search']) ."%'");
			$res = $req->fetchall();

			foreach ($res as $key) {
				$req = $pdo->prepare('SELECT * FROM users WHERE name = ?');
				$req->execute([$key->name]);
				$currentUser = $req->fetch();
				$number = getDistance($currentUser->lati, $currentUser->longi);
				$number = number_format($number, 2, ',', ' ');
				if ($number < 1.00)
					$local = "In your city";
				else
					$local = $number ." km away.";

				?><a href="uprofile?id=<?php echo $currentUser->id; ?>"  style="color: whitesmoke;">
		    		<div class="profile-box">
			    		<h1 class="profile-box-h1"><?php echo $currentUser->name; ?> - <span><?php echo $currentUser->age; ?></span></h1>
			    		<h2 class="profile-box-h2"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $local; ?></h2>
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