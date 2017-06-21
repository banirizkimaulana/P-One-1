<?php
require_once('../../config.php');
//require_once('../autoload.php');


$album        = $_GET['alb'];
$caption      = $_GET['dtl'];

$nm_nama      = $_POST["nm_nama"];
$nm_email     = $_POST["nm_email"];
$nm_komentar  = $_POST["desc"];


//$config = HTMLPurifier_Config::createDefault();
//$purifier = new HTMLPurifier($config);
//$clean_html = $purifier->purify($nm_komentar);
$clean_html = htmlspecialchars($nm_komentar, ENT_QUOTES);


$sql = "INSERT INTO komentar (nama, email, kom_isi, caption)
      VALUES ('$nm_nama', '$nm_email', '$clean_html', '$caption')";

$mysqli->query($sql);

$mysqli->close();

header('location:../../index.php?alb='. $_GET['alb'] .'&dtl='. $caption);
?>
