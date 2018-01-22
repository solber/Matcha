<?php 
	require '../required/database.php';
	$req = $pdo->query("SELECT name FROM users WHERE name LIKE '%" .addslashes($_GET['term']) ."%'");
	$res = $req->fetchall();

	foreach ($res as $key) {
		$tab[] = $key->name;
	}
	print json_encode($tab);
?>