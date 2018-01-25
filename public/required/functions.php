<?php
	function str_random($length)
	{
		$alphabet = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
	}

    function put_flash($alert, $message, $path)
    {
        if (session_status() == PHP_SESSION_NONE) { session_start(); }
        $_SESSION['flash'][$alert] = $message;
        header('Location: ' .$path);
        exit();
    }

    function send_mail($to, $subject, $message)
    {
     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     // En-têtes additionnels
     $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
     $headers .= 'From: Camaguru <camaguru@example.com>' . "\r\n";
     $headers .= 'Cc: camaguru_archive@example.com' . "\r\n";
     $headers .= 'Bcc: camaguru_verif@example.com' . "\r\n";
     // Envoi
     mail($to, $subject, $message, $headers);
    }

    function iConnected() {
        if (isset($_SESSION['auth']))
            put_flash('danger', "Error : You cannot access this page.", "../index.php");
    }

    function iNotConnected() {
        if (!isset($_SESSION['auth']))
            put_flash('danger', "Error : You cannot access this page.", "../index.php");
    }

    function getDistance($latitude2, $longitude2) {
        if (session_status() == PHP_SESSION_NONE) { session_start(); }
        $earth_radius = 6371;
        $latitude1 = $_SESSION['auth']->lati;
        $longitude1 = $_SESSION['auth']->longi;

        $dLat = deg2rad($latitude2 - $latitude1);
        $dLon = deg2rad($longitude2 - $longitude1);

        $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);
        $c = 2 * asin(sqrt($a));
        $d = $earth_radius * $c;

        return $d;
    }
?>