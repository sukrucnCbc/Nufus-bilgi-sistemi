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
        uyrugu=:uyrugu");

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
    font-size: 22px;
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
          <li class="active"><a href="belge.php"><i class="bx bx-home"></i> <span style="color: #149ddd;">Belge İşlemleri</span></a></li>
          <li><a href="adresislem.php"><i class="bx bx-user"></i> <span style="color: #a8a9b4;">Adres İşlemleri</span></a></li>
          <li><a href="randevular.php"><i class="bx bx-user"></i> <span style="color: #a8a9b4;">Randevular</span></a></li>
          <li><a href="index.php"><i class="bx bx-file-blank"></i> <span style="color: #a8a9b4;">Çıkış</span></a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <section id="ana" class="ana">
    <div class="container">
        
        <div class="card">
            <div id="baslik">
                <h1 style="font-family: 'Poppins', sans-serif;">BELGE DÜZENLE</h1>
            </div>
            <div class="icAnaDiv">
                <div class="content1">
                  <div class="icBaslik">
                      <label style="font-size:x-large;" for="">Düzenlenecek Belge Türü</label>
                    
                    
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Kimlik Kartı
                                </label>
                              </div>
                        </div>
                       
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Fotoğraf Seç</label>
                          </div>
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Yükle</button>
                          </div>
                        </div><br><br>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Pasaport
                                </label>
                                
                              </div>
                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Fotoğraf Seç</label>
                          </div>
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Yükle</button>
                          </div>
                        </div><br>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Öğrenci Belgesi</label>
                          </div><br>
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Yükle</button>
                          </div>
                        </div><br>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Muvafakat Belgesi</label>
                          </div><br>
          
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Yükle</button>
                          </div>
                        </div><br><br>
                    
                    
                    
                     
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Ehliyet
                                </label>
                                
                              </div>

                        </div>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Fotoğraf Seç</label>
                          </div><br>
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Yükle</button>
                          </div>
                        </div><br>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Sağlık Raporu</label>
                          </div><br>
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Yükle</button>
                          </div><br>
                        </div><br>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                            <label class="custom-file-label" for="inputGroupFile04">Sabıka Kaydı Beyannamesi</label>
                          </div><br>
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Yükle</button>
                          </div><br>
                        </div>
                    
                    
                    
                        <br>
                        
                        
                  </div>
                  </div>    

            <div class="content2">
                <div class="icBaslik">
                    <label style="font-size:x-large;" for="">Nüfus Bilgleri</label>
                </div> 
                    <form action="" method="post"> 
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">TC Kimlik Numarası</span>
                        </div>
                        <input type="text" name="tc" class="form-action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">İsim</span>
                        </div>
                        <input type="text" name="isim" class="form-action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Soyisim</span>
                        </div>
                        <input type="text" name="soyisim" class="form-action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Baba Adı</span>
                        </div>
                        <input type="text" class="form-action" name="baba_adi" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Anne Adı</span>
                        </div>
                        <input type="text" class="form-action" name="anne_adi" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Doğum Tarihi</span>
                        </div>
                        <input type="text" class="form-action" name="dogum_tarihi" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Uyruğu</span>
                        </div>
                        <input type="text" class="form-action" name="uyrugu" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                    </div><br><br>
                    
                </div>
               
                <button type="submit" name="yazdır" class="btn btn-secondary btn-lg btn-block">Belgeyi Düzenle Ve Yazdır</button>       
                </div> 
                </form> 
        
        
                
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       </div>
      </div>  
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>