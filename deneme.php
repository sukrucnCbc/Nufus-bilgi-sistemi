



<?php


error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);


$db = new PDO("mysql:host=localhost;dbname=nufus;charset=utf8", "root", "123456");



$sorgu = $db->prepare("SELECT * FROM yeni_nufus_kaydi ORDER BY id DESC");
$sorgu->execute();
$islem=$sorgu->fetch();
    echo $islem ['isim'];
    echo $islem ['soyisim'];
    echo $islem ['il'];
    echo $islem ['ilce'];
    echo $islem ['mahalle'];
    echo $islem ['sokak'];
    echo $islem ['no'];
   

?>




error_reporting(E_ALL ^ E_NOTICE);
                            ini_set('error_reporting', E_ALL ^ E_NOTICE);
                            
          include('adresSorgu.php');
          
          $tc=$_POST['tc_no1'];

          $sorgu=$vt -> prepare('SELECT * FROM yeni_nufus_kaydi WHERE tc=?');
          $sorgu->execute(array($tc));
          $kisiList=$sorgu-> fetchAll(PDO::FETCH_OBJ);



