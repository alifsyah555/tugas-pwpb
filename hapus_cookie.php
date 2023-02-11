<?php
setcookie("nama",$nama,time()+3600);
setcookie("usesetcookiername",$username,time()+3600);
setcookie("tanggal_lahir",$tgl_lhr,time()+3600);
header('location:logout.php');
?>