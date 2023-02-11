<?php
$nama="alif syah";
$username="lucifer";
$tgl_lhr="07-07-2006";

setcookie("nama",$nama,time()+3600);
setcookie("usesetcookiername",$username,time()+3600);
setcookie("tanggal_lahir",$tgl_lhr,time()+3600);

echo"nama :".$COOKIE['nama'];
echo"<br>";
echo"username:".$_COOKIE['username'];
echo"<br>";
echo"tanggal_lahir :".$_COOKIE['tanggal_lahir'];
?>