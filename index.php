<?php
/*
if (version_compare(PHP_VERSION, '5.6.30', '<')) {
    exit("Sorry, We can't run on a PHP version smaller than 5.6.30 !");
}*/
require_once('vendor/autoload.php');

require_once('config.php');

require_once('pages/_header.php');

/*
if(isset($_GET['p'])) {
	$page = 'pages/' . $_GET['p'] . ".php";
	include ($page);
} elseif (isset($_GET['alb'])) {
   $page = 'album/' . $_GET['alb'] . ".php";
	include ($page);
} elseif (isset($_GET['dtl'])) {
   $page = 'caption/' . $_GET['dtl'] . ".php";
	include ($page);
} else {
   include 'pages/home.php';
}
*/


if(isset($_GET['p'])){
  if (!isset($_GET['p']) || empty($_GET['p'])){
    include 'pages/404.php';
  } else {
    $page = 'pages/' . $_GET['p'] . ".php";

    if (file_exists($page)) {
      include ($page);
    } else {
      include 'pages/404.php';
    }
  }
} elseif (isset($_GET['alb'])) {
	if (!isset($_GET['alb']) || empty($_GET['alb'])){
		include 'pages/404.php';
	} elseif (isset($_GET['dtl'])) {

    $page = 'vendor/designtopia/caption.php';
    include ($page);

	} else {
    $page = 'album/'. $_GET['alb'] ."/". $_GET['alb'] .".php";

    if (file_exists($page)) {
      include ($page);
    } else {
      include 'pages/404.php';
    }
  }
} else {
	include 'pages/home.php';
}


require_once('pages/_footer.php');
?>
