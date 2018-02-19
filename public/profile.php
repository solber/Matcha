<?php require 'header.php'; require 'required/functions.php'; iNotConnected(); ?>

<div class="banner-home"><br><br><br>
    <center><a href="profile_editor.php"><input class="btn btn-primary" type="submit" name="Edit" value="Edit Profile" style="position: absolute; z-index: 9999999999999; left: 0"></a>
                <a href="edit_photo.php"><input class="btn btn-primary" type="submit" name="EditPhoto" value="Edit Photo" style="position: absolute; z-index: 9999999999999; left: 110px"></a></center>
    <div class="left-container">
        <div class="MainPhoto">
            <img src="<?php echo $_SESSION['auth']->profile_img; ?>" width="100%" title="profile_img" alt="profile_img">
        </div>
    </div>
    <div class="middle-container">
        <h1>Profile of <?php echo $_SESSION['auth']->name ." - " .$_SESSION['auth']->age; ?>
            <span style="font-size: 2vw; color: yellow"><i class="fa fa-star" aria-hidden="true"></i><?php echo $_SESSION['auth']->popscore; ?></span>
        </h1>
        <div class="infos-container">
            <?php if ($_SESSION['auth']->gender === "M") { ?>
                <h4><span class="class">Gender :</span> <span style="color: royalblue;"><?php echo $_SESSION['auth']->gender; ?></span></h4>
            <?php }else{ ?>
                <h4><span class="class">Gender :</span> <span style="color: fuchsia;"><?php echo $_SESSION['auth']->gender; ?></span></h4>
            <?php } ?>
            <br>
            <?php if ($_SESSION['auth']->orientation === "F") { ?>
                <h4><span class="class">Interested by :</span> <span style="color: fuchsia;"><?php echo $_SESSION['auth']->orientation; ?></span></h4>
            <?php }else{ ?>
                <h4><span class="class">Interested by :</span> <span style="color: royalblue;"><?php echo $_SESSION['auth']->orientation; ?></span></h4>
            <?php } ?>
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