<div class="blog-comment-form">
  <h3>Leave a Comment</h3>
  <p>Your email address will not be published.</p>
  <form action="<?php echo designtopia .'comment-ins.php?alb='. $_GET['alb'] .'&dtl='.$_GET['dtl']; ?>" method="post" id="form_komentar">
    <textarea class="form-control" name="desc" id="editor1" rows="4" cols="80" placeholder="Type your comment here"></textarea>
    <input type="text" class="form-control" placeholder="Name" name="nm_nama" required>
    <input type="email" class="form-control" placeholder="Email" name="nm_email" required>
    <div class="col-md-6 col-sm-6">
      <input type="submit" class="form-control" value="Post Your Comment" name="submit">
    </div>
  </form>
</div>

<div class="clearfix"></div>

<div class="blog-comment">
<?php
  $caption = $_GET['dtl'];

  $result = $mysqli->query("SELECT * FROM komentar WHERE caption='$caption' ORDER BY waktu DESC");

  //Jumlah komentar
  $jml_komentar = $result->num_rows;

  if($jml_komentar > 1){
    $var_kom = " Comments";
  }else{
    $var_kom = " Comment";
  }
?>

  <h3><?php echo $jml_komentar . $var_kom;?></h3>


<?php
while ($row=$result->fetch_object()) {

  $default = "mm";
  $size = 50;
  $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $row-> email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

  $date = new DateTime($row-> waktu);

  echo '<div class="media">';
  echo '<div class="media-object pull-left">';
  echo    '<img src="'. $grav_url .'" class="img-responsive img-circle">';
  echo '</div>';
  echo '<div class="media-body">';
  echo 		'<h3 class="media-heading">'. $row-> nama .'</h3>';
  echo 		'<span>'. $date->format('F d, Y') .'</span>';
  echo 		'<p>'. $row-> kom_isi .'</p>';
  echo '</div>';
  echo '<div class="clearfix"></div>';
  echo '</div>';
}
?>

</div>
