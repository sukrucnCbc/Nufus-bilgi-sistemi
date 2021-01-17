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


$sorgu=$vt->prepare('SELECT * FROM randevular');
$sorgu->execute();
$kisiList=$sorgu-> fetch();

?>








<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nüfus Bilgi Sistemi</title>
    <link type="" href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <style>
        body {
    font-family: 'Josefin Sans';
    color: #272829;
  }
  a {
color: silver;
text-decoration: none;
}

a:hover {
color:silver;
text-decoration: none;

}

h1, h2, h3, h4, h5, h6 {
font-family: "Raleway", sans-serif;

}

.dropdown-menu{
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    width: 300px;
    transition: all ease-in-out 0.5s;
    z-index: 9997;
    transition: all 0.5s;
    padding: 0 15px;
    background: #131414;
    overflow-y: auto;
  }
  
  #header .profile img {
    margin: 15px auto;
    display: block;
    width: 150px;
    border: 5px double #565252 ;
    border-radius:50%;
  }
  #header .profile h1 {
    font-size: 20px;
    margin: 0;
    padding: 0;
    font-weight: 600;
    -moz-text-align-last: center;
    text-align-last: center;
    font-family: "Poppins";
  }
  
  
  
  
  
  #main {
    margin-left: 300px;
  }
  
  @media (max-width: 1199px) {
    #header {
      left: -300px;
    }
    #main {
      margin-left: 0;
    }
  }
  /* Desktop Navigation */
.nav-menu {
  padding-top: 30px;
}

.nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
}

.nav-menu a {
  display: flex;
  align-items: center;
  
  padding: 12px 15px;
  margin-bottom: 8px;
  transition: 0.3s;
  font-size: 22px;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  text-decoration: none;
  
  font-size: 25px;
}
.content1{
  background-color: whitesmoke;
  border:2px solid #149ddd;
  border-radius: 5px;
  width: 48%;
  height: 650px;
  position: relative;
  float: left;
  padding: 5px;


}
.content2{
  background-color: whitesmoke;
  border:2px solid #149ddd;
  border-radius: 5px;
  width: 50%;
  height: 440px;
  position: relative;
  float: right;
  padding: 5px;

}
#baslik{
  font-family: 'Courier New', Courier, monospace;
  padding: 5px;
  margin: 15px;
}


.card{
    
    height: 800px;
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/



/*--------------------------------------------------------------
# Ana
--------------------------------------------------------------*/

.container{
    background-color:whitesmoke;
    position:absolute;
    top:0px;
    left:300px;
    width: 78%;
    float:right;
    padding: 25px;
}


.icAnaDiv{
  padding: 5px;
  
}



.kayit .form-check{
    
    float: left;
    margin: 10px;
}
    </style>

</head>
<body>
  

   
    <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/avatar.svg" alt="" class="img-fluid">
        <h1 class="text-light"><a href="#">NÜFUS KAYIT BİLGİ SİSTEMİ</a></h1>

      </div>

      <nav class="nav-menu">
        <ul>
          
          <li><a href="anasayfa.html"><i class="bx bx-user"></i> <span style="color: #a8a9b4;">Anasayfa</span></a></li>
          <li><a href="kayitİslem.php"><i class="bx bx-user"></i> <span style="color: #a8a9b4;">Yeni Kayıt Ekle</span></a></li>
          <li><a href="kayitSil.html"><i class="bx bx-file-blank"></i> <span style="color: #a8a9b4;">Kayıt Sil/Değiştir</span></a></li>
          <li class="active"><a href="belge.php"><i class="bx bx-home"></i> <span style="color:  #a8a9b4;">Belge İşlemleri</span></a></li>
          <li><a href="adresislem.php"><i class="bx bx-user"></i> <span style="color: #a8a9b4;">Adres İşlemleri</span></a></li>
          <li><a href="randevular.html"><i class="bx bx-user"></i> <span style="color: #149ddd;">Randevular</span></a></li>
          <li><a href="index.php"><i class="bx bx-file-blank"></i> <span style="color: #a8a9b4;">Çıkış</span></a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <section id="ana" class="ana">
    <div class="container">
<?php


error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);


$db = new PDO("mysql:host=localhost;dbname=nufus;charset=utf8", "root", "123456");



$sorgu = $db->prepare("SELECT * FROM randevular ORDER BY id DESC");
$sorgu->execute();
$islem=$sorgu->fetch();
?>           
            


        <div class="card">
            <div id="baslik">
                <h1 style="font-family: 'Poppins', sans-serif;">RANDEVU TAKİP EKRANI</h1>
            </div>
            <div class="icAnaDiv">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1">
                        <table class="table table-bordered table-striped">
                        <thead>
                            <th width="125">TC Kİmlik No</th>
                            <th width="125">Cep Telefon No</th>
                            <th width="125">Konu</th>
                           
                            <th width="75">Randevu İl</th>
                            <th width="100">Randevu İlçe</th>
                            <th width="100">Randevu Tarihi</th>
                            <th width="100">Randevu Saati</th>
                            
                            <th width="70"></th>
                            <th width="70"></th>
                        </thead>
                        <tbody>
                            
                              
                            <tr>
                                <td><?php echo $islem ['tc_no']; ?></td>
                                <td><?php echo $islem ['tel_no']; ?></td>
                                <td><?php echo $islem ['konu']; ?></td>
                                <td><?php echo $islem ['il']; ?></td>
                                <td><?php echo $islem ['ilce']; ?></td>
                                <td><?php echo $islem ['tarih']; ?></td>
                                <td><?php echo $islem ['saat']; ?></td>
                               
                
                                
                                <td class="text-center"><button class="btn btn-danger" data-toggle="modal">Sil</button></td>
                                <td class="text-center"><button class="btn btn-success" data-toggle="modal">Onayla</button></td>
                              
                            </tr>
                        
                        </tbody>
                    </table>
                    </div>
                </div>
                

            
               
                
            </div> 
                
        
                
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       </div>
      </div>  
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>