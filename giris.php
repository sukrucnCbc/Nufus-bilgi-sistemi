<?php

try{




session_start();

$db = new PDO('mysql:host=localhost;dbname=nufus;charset=utf8', 'root', '123456');
echo "Veritabanı bağlantısı Başarılı  . . . . .. . . .  .                     "; 

} catch (PDOException $e){
    echo $e-> getMessage();
}


$kadi = $_POST['kullanici_adi'];
$sifre = $_POST['sifre'];


if (!$kadi || !$kadi) {
    die("BOŞ ALAN BIRAKMAYINIZ!");
}



$user = $db->query("SELECT * FROM giris_ekranı WHERE kullanici_adi = '$kadi' AND sifre = '$sifre'")->fetch();



if ($user) {
    $_SESSION['user'] = $user;
    header("location:anasayfa.html");
}else {
    echo "Bilgiler hatalı";
}




?>



