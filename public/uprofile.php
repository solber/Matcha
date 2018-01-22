<?php require 'header.php'; require 'required/functions.php'; iNotConnected(); ?>

<?php
        if (empty($_GET))
            put_flash('danger', "Error : Invalid values.", "/index.php");
         if (!isset($_GET['id']))
            put_flash('danger', "Error : Invalid values.", "/index.php");
         if (!is_numeric($_GET['id']))
            put_flash('danger', "Error : Invalid values.", "/index.php");

        require 'required/database.php';
        $req = $pdo->prepare('SELECT * FROM users WHERE id = ?');
        $req->execute([intval($_GET['id'])]);
        $userinfo = $req->fetch();

        if ($userinfo->id != $_SESSION['auth']->id)
            $req = $pdo->query('UPDATE users SET popscore = popscore + 1 WHERE id =' .intval($userinfo->id));


?>
<div class="banner-home">
    <div class="left-container">
        <div class="MainPhoto">
            <form action="/action/like.php" method="POST">
                <?php if ($userinfo->id != $_SESSION['auth']->id) { ?>
                    <center><input class="btn btn-primary like-btn" type="submit" name="like" value="LIKE"></center>
                <?php } ?>
            </form>
            <img src="<?php echo $userinfo->profile_img; ?>" width="100%" title="profile_img" alt="profile_img">
        </div>
    </div>
    <div class="middle-container">
        <h1>Profile of <?php echo $userinfo->name ." - " .$userinfo->age; ?>
            <span style="font-size: 2vw; color: yellow"><i class="fa fa-star" aria-hidden="true"></i><?php echo $userinfo->popscore; ?></span>
        </h1>
        <div class="infos-container">
            <?php if ($userinfo->gender === "M") { ?>
                <h4><span class="class">Gender :</span> <span style="color: royalblue;"><?php echo $userinfo->gender; ?></span></h4>
            <?php }else{ ?>
                <h4><span class="class">Gender :</span> <span style="color: fuchsia;"><?php echo $userinfo->gender; ?></span></h4>
            <?php } ?>
            <br>
            <?php if ($userinfo->orientation === "F") { ?>
                <h4><span class="class">Interested by :</span> <span style="color: fuchsia;"><?php echo $userinfo->orientation; ?></span></h4>
            <?php }else{ ?>
                <h4><span class="class">Interested by :</span> <span style="color: royalblue;"><?php echo $userinfo->orientation; ?></span></h4>
            <?php } ?>
            <br>
            <h4><span class="class">Bio :</span></h4>
            <textarea class="form-control" disabled><?php echo $userinfo->bio ?></textarea>
            <br>
            <h4><span class="class">Interest :</span> <span class="htag">#</span><span><?php echo $userinfo->i1; ?></span>
                <span class="htag">#</span><span><?php echo $userinfo->i2; ?></span>
                <span class="htag">#</span><span><?php echo $userinfo->i3; ?></span></h4>
        </div>
        <img src="img/hearts.png" width="30%" style="position: absolute; right: 0; bottom: 0; right: 80px;">
    </div>
</div>