<div class="container gallery-album-detail">

<div class="row">
	<ol class="breadcrumb">
		<li><a href="./">Home</a></li>
	   <li><a href="?alb=album1">Album 1</a></li>
		<li class="active">Detail</li>
	</ol>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
	<div class="img-detail" >
	  <a data-fancybox="gallery" href="media/4.jpeg"><img src="media/4.jpeg"></a>
	</div>
  </div>
	<div class="col-xs-12 col-sm-6 col-md-6">
		<h2>Judul foto</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut placerat lacus. Ut tempus nisi eu venenatis mattis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus purus lorem, blandit eu justo at, consectetur accumsan risus. Mauris nec pellentesque felis. Fusce id mauris lobortis, sollicitudin ipsum eget, porta erat. Morbi pretium dapibus nibh vel egestas.</p>
		
			<div id="comment">
				<form name="submitcomment" method="post" action="submit/submit4.php">
					Nama:<br><input name="nama" type="text" size="40">
				<br>
					Email(optional):<br><input name="email" type="text" size="40">
				<br>
					Komentar:<br><textarea name="komentar" rows="6" cols="50"></textarea><br>
				<input name="tombol" value="Kirim" type="submit"></form>
			</div>

			<div id="publishcomment">
				<?php
					getcomment("1");
				function getcomment($id){
					$commentquery = mysql_query("SELECT * FROM tabel WHERE caption=4 ORDER BY id DESC") or die(mysql_error());
					$commentNum = mysql_num_rows($commentquery);
				echo "<h4>" . "Current comment(s)..." . "</h4>";
				echo "<b>" . $commentNum . " comment(s) so far. Leave a comment..." ."</b>" . "<br />" . "<br />";
				echo "<hr>";
				while($row = mysql_fetch_array($commentquery))
			{
				echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" . $row['email'] . "</i>" . "<br />" . "<br />" . $row['komentar'] . "<br />";
				echo "<hr>";
			}
			}

				?>
			</div>
		
	</div>
</div>
</div>
