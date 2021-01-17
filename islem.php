<?php
require_once 'baglan.php';
if(isset($_POST['kaydet'])){

    $kaydet=$veritabani->prepare("INSERT INTO belge_duzenle set 
        tc=:tc,
        isim=:isim,
        soyisim=:soyisim,
        baba_adi=:baba_adi,
        anne_adi=:anne_adi,
        dogum_tarihi=:dogum_tarihi,
        uyrugu=:uyrugu
        
        ");

    $insert=$kaydet->execute(array(

        'tc'=> $_POST['tc'],
        'isim' => $_POST['isim'],
        'soyisim' => $_POST['soyisim'],
        'baba_adi' => $_POST['baba_adi'],
        'anne_adi' => $_POST['anne_adi'],
        'dogum_tarihi' => $_POST['dogum_tarihi'],
        'uyrugu' => $_POST['uyrugu']
        ));

}

?>