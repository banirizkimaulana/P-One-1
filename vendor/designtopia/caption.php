<?php

use Symfony\Component\Yaml\Yaml;

$album   = Yaml::parse(file_get_contents('album/'. $_GET['alb']  .'/'. $_GET['alb'] .'.yml'));
$caption = Yaml::parse(file_get_contents('album/'. $_GET['alb']  .'/'. $_GET['dtl'] .'.yml'));
?>

<div class="container gallery-album-detail">

<div class="row">
	<ol class="breadcrumb">
		<li><a href="./">Home</a></li>
	   <li><a href="?alb=<?php echo $_GET['alb'] ?>"><?php echo $album['nama_album'] ?></a></li>
		<li class="active"><?php echo $caption['judul']?></li>
	</ol>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-5 col-md-5">
		<div class="img-detail" >
			<a data-fancybox="gallery" href="<?php echo 'album/'. $_GET['alb'] .'/media/'. $caption['photo']?>"><img src="<?php echo 'album/'. $_GET['alb'] .'/media/'. $caption['photo']?>"></a>
		</div>
	</div>

	<div class="col-xs-12 col-sm-7 col-md-7">
		<h2><?php echo $caption['judul']?></h2>
		<p><?php echo $caption['artikel']?></p>

<?php
include designtopia .'comment.php';
?>
	</div>
</div>
</div>
