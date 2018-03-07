<?php require 'header.php'; ?>

<div class="banner-home">
    <h1 class="home-title">Find the one</h1>
    <img src="img/hearts.png" style="position: relative; right: 100px;">
   <!-- <img src="img/banner.jpg" width="100%">-->
   <?php if (!isset($_SESSION['auth'])) { ?>
    	<a href="register.php"><input type="submit" name="begin" value="Begin Experience" class="btn btn-primary btn-home"></a>
    <?php } ?>
</div>