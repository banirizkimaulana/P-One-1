<?php

use Symfony\Component\Yaml\Yaml;

$album	= Yaml::parse(file_get_contents('album/'. $_GET['alb']  .'/'. $_GET['alb'] .'.yml'));
?>

<div class="row">
	 <ol class="breadcrumb">
			<li><a href="./">Home</a></li>
			<li class="active"><?php echo $album ['nama_album']?></li>
	 </ol>

	 <div class="header center-block">
			<h1><b><?php echo $album ['nama_album']?></b></h1>
			<p><?php echo $album ['desc']?></p>
	 </div>
</div>
