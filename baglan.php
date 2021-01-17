<?php

try{


$veritabani = new PDO('mysql:host=localhost;dbname=nufus;charset=utf8', 'root', '123456');
echo "Veritabanı bağlantısı Başarılı";

} catch (PDOException $e){
    echo $e-> getMessage();
}
/*
if ('$_POST[kayit_nedeni]' and '$_POST[isim]' and '$_POST[soyisim]' and '$_POST[baba_adi]' and '$_POST[anne_adi]' and '$_POST[dogum_tarihi]' and '$_POST[il]' and '$_POST[ilce]'
    and '$_POST[mahalle]' and '$_POST[sokak]' and '$_POST[no]' and '$_POST[dogum_yeri]' and '$_POST[uyrugu]' and '$_POST[fotograf_url]')
    {
      mysql_query("INSERT INTO yeni_nufus_kaydi (kayit_nedeni,isim,soyisim,baba_adi,anne_adi,dogum_tarihi,il,ilce,mahalle,sokak,dogum_yeri,uyrugu,fotograf_url)
      VALUES (
              '$_POST[kayit_nedeni]','$_POST[isim]','$_POST[soyisim]','$_POST[baba_adi]','$_POST[anne_adi]','$_POST[dogum_tarihi]','$_POST[il]','$_POST[ilce]',
              '$_POST[mahalle]','$_POST[sokak]','$_POST[no]','$_POST[dogum_yeri]','$_POST[uyrugu]','$_POST[fotograf_url]')");
}



try {
    $dbh = new PDO(
        DB_TYPE . ':host=localhost' . DB_HOST . ';dbname=nufus' . DB_NAME . ';charset=UTF-8-TURKISH-CI' . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_PERSISTENT            => true,
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES ' . DB_CHARSET . ' COLLATE ' . DB_COLLATE

        ]
    );
} catch ( PDOException $e ) {
    echo 'ERROR!';
    print_r( $e );
}
*/
?>




<!-- <?php 
// $veritabani = new PDO('mysql:host=localhost;dbname=nufus;charset=utf8', 'root', '123456');
// $query=$veritabani->query("SELECT * FROM yeni_kayit_islemi ORDER BY id DESC", PDO::FETCH_ASSOC); 
// if($query->rowCount()){
// foreach($query as $row ){	                      
?> -->