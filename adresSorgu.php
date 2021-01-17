 <?php

try{
    $host='localhost';
    $vtadi='nufus';
    $kullanici='root';
    $sifre='123456';
    $vt = new PDO("mysql:host=$host;dbname=$vtadi","$kullanici","$sifre");
}
catch(PDOException $e){
    print $e->getMessage();
}




?> 






