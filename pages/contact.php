<?php

$statusMsg = '';
$msgClass = '';

if(isset($_POST['submit'])){
  // Get the submitted form data
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = $_POST['message'];

  // Cek apakah ada data yang belum diisi
  if(!empty($email) && !empty($name) && !empty($message)){

      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
          $statusMsg = 'Please enter your valid email.';
          $msgClassk = 'errordiv';
      }else{
          // Pengaturan penerima email dan subjek email
          $toEmail = 'banirizkimaulana@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
          $emailSubject = 'Pesan website dari '.$name;
          $htmlContent = '<p>'.$name.'</p><p>'.$email.'</p><p>'.$message.'</p>';


          // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

          // Header tambahan
          $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

          // Send email
          if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
              $statusMsg = 'Pesan Anda sudah terkirim dengan sukses !';
              $msgClass = 'succdiv';
          }else{
              $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
              $msgClass = 'errordiv';
          }
      }
  }else{
      $statusMsg = 'Harap mengisi semua field data';
      $msgClass = 'errordiv';
  }
}
?>

<style>
p.statusMsg{font-size:18px;}
p.succdiv{color: #008000;}
p.errordiv{color:#E80000;}
</style>

<section id="contact">
<div class="container">
<div class="row">
<div class="col-md-offset-1 col-md-10 col-sm-12">

  <div class="section-title">
    <h3>get in touch</h3>
    <h2>Kritik dan saran dapat Anda sampaikan ke kami melalui kotak di bawah ini.</h2>
  </div>
  <div class="text-center">
  <?php
    if(!empty($statusMsg)){
  ?>
      <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
  <?php
    }
  ?>
  </div>

  <form action="" method="post">
    <div class="col-md-6 col-sm-6">
      <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="col-md-6 col-sm-6">
      <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="col-md-12 col-sm-12">
  	   <textarea name="message" class="form-control" rows="5" placeholder="Details"></textarea>
    </div>
    <div class="col-md-3 col-sm-4">
  	   <input type="submit" name="submit" class="form-control" value="Send Message">
    </div>
  </form>

</div>
</div>
</div>
</section>
