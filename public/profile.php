<?php require 'header.php'; require 'required/functions.php'; iNotConnected(); ?>

<div class="banner-home">
    <div class="left-container">
        <div class="MainPhoto">
            <center><a href="profile_editor.php"><input class="btn btn-primary" type="submit" name="Edit" value="Edit Profile"></a></center>
            <img src="<?php echo $_SESSION['auth']->profile_img; ?>" width="100%" title="profile_img" alt="profile_img">
        </div>
    </div>
    <div class="middle-container">
        <h1>Profile of <?php echo $_SESSION['auth']->name; ?></h1>
        <div class="infos-container">
            <h4><span class="class">Gender :</span> <span style="color: royalblue;"><?php echo $_SESSION['auth']->gender; ?></span></h4>
            <br>
            <h4><span class="class">Interested by :</span> <span style="color: fuchsia;"><?php echo $_SESSION['auth']->orientation; ?></span></h4>
            <br>
            <h4><span class="class">Bio :</span></h4>
            <textarea class="form-control" disabled><?php echo $_SESSION['auth']->bio ?></textarea>
            <br>
            <h4><span class="class">Interest :</span> <span class="htag">#</span><span><?php echo $_SESSION['auth']->i1; ?></span>
                <span class="htag">#</span><span><?php echo $_SESSION['auth']->i2; ?></span>
                <span class="htag">#</span><span><?php echo $_SESSION['auth']->i3; ?></span></h4>
        </div>
        <img src="img/hearts.png" width="30%" style="position: absolute; right: 0; bottom: 0; right: 80px;">
    </div>
</div>