<?php


require_once 'baglan.php';
if(isset($_POST['kaydet'])){

    $kaydet=$veritabani->prepare("INSERT INTO randevular set 
        tc_no=:tc_no,
        tel_no=:tel_no,
        konu=:konu,
        il=:il,
        ilce=:ilce,
        tarih=:tarih,
        saat=:saat"
        );

    $insert=$kaydet->execute(array(
        
        'tc_no'=> $_POST['tc_no'],
        'tel_no'=> $_POST['tel_no'],
        
        'konu'=> $_POST['konu'],
        'il' => $_POST['il'],
        'ilce' => $_POST['ilce'],
        'tarih' => $_POST['tarih'],
        'saat' => $_POST['saat']
        
        
   
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
  width: 41%;
  height: 400px;
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
  float: left;
  padding: 5px;
  margin-left: 25px;

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
          <li class="active"><a href="vatandasAna.html"><i class="bx bx-home"></i> <span>Anasayfa</span></a></li>
          <li><a href="vtndsSorgu.php"><i class="bx bx-server"></i> <span > Adres Kaydı Sorgula</a></li></span>
          <li><a href="vtndsBelge.html"><i class="bx bx-server"></i> <span > Belge İşlemleri</a></li></span>
          <li><a href="eRandevu.php"><i class="bx bx-server"></i> <span style="color: #149ddd;" > e-Randevu</a></li></span>
          <li><a href="index.php"><i class="bx bx-envelope"></i> Çıkış</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <section id="ana" class="ana">
    <div class="container">
        
        <div class="card">
            <div id="baslik">
                <h1 style="font-family: 'Poppins', sans-serif;">e-Randevu</h1>
            </div>
            <div class="icAnaDiv">
                <div class="content1">
                  
                  <div class="icBaslik">
                 <form action="" method="post">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">TC Kimlik Numarası</span>
                      </div>
                      <input type="text" class="form-control" name="tc_no" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Cep Telefonu</span>
                      </div>
                      <input type="text" name="tel_no" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <label style="font-size:x-large;">Randevuya konu olan belge türünü seçiniz.</label>
                    
                    
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="konu" id="konu" value="kimlik" >
                                <label class="form-check-label" for="exampleRadios1">
                                  Kimlik Kartı
                                </label>
                            </div>
                        </div>
                       <br>

                        
                    
                    
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="konu" id="konu" value="pasaport" >
                                <label class="form-check-label" for="exampleRadios1">
                                  Pasaport
                                </label>
                                
                              </div>
                        </div><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="konu" id="konu" value="ehliyet">
                            <label class="form-check-label" for="exampleRadios1">
                              Ehliyet
                            </label>
                            
                          </div>
                         
                        
                        </div>


                        
                        </div>
                        <div class="content2">
                          
      
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">İl</label>
                              </div>
                                <select class="custom-select" id="inputGroupSelect01" name="il" >
                                  <option value="0">------</option>
                                  <option value="Adana">Adana</option>
                                  <option value="2">Adıyaman</option>
                                  <option value="3">Afyonkarahisar</option>
                                  <option value="4">Ağrı</option>
                                  <option value="5">Amasya</option>
                                  <option value="6">Ankara</option>
                                  <option value="7">Antalya</option>
                                  <option value="8">Artvin</option>
                                  <option value="9">Aydın</option>
                                  <option value="10">Balıkesir</option>
                                  <option value="11">Bilecik</option>
                                  <option value="12">Bingöl</option>
                                  <option value="13">Bitlis</option>
                                  <option value="14">Bolu</option>
                                  <option value="15">Burdur</option>
                                  <option value="16">Bursa</option>
                                  <option value="17">Çanakkale</option>
                                  <option value="18">Çankırı</option>
                                  <option value="19">Çorum</option>
                                  <option value="20">Denizli</option>
                                  <option value="21">Diyarbakır</option>
                                  <option value="22">Edirne</option>
                                  <option value="23">Elazığ</option>
                                  <option value="24">Erzincan</option>
                                  <option value="25">Erzurum</option>
                                  <option value="26">Eskişehir</option>
                                  <option value="27">Gaziantep</option>
                                  <option value="28">Giresun</option>
                                  <option value="29">Gümüşhane</option>
                                  <option value="30">Hakkâri</option>
                                  <option value="31">Hatay</option>
                                  <option value="32">Isparta</option>
                                  <option value="33">Mersin</option>
                                  <option value="34">İstanbul</option>
                                  <option value="35">İzmir</option>
                                  <option value="36">Kars</option>
                                  <option value="37">Kastamonu</option>
                                  <option value="38">Kayseri</option>
                                  <option value="39">Kırklareli</option>
                                  <option value="40">Kırşehir</option>
                                  <option value="41">Kocaeli</option>
                                  <option value="42">Konya</option>
                                  <option value="43">Kütahya</option>
                                  <option value="44">Malatya</option>
                                  <option value="45">Manisa</option>
                                  <option value="46">Kahramanmaraş</option>
                                  <option value="47">Mardin</option>
                                  <option value="48">Muğla</option>
                                  <option value="49">Muş</option>
                                  <option value="50">Nevşehir</option>
                                  <option value="51">Niğde</option>
                                  <option value="52">Ordu</option>
                                  <option value="53">Rize</option>
                                  <option value="54">Sakarya</option>
                                  <option value="55">Samsun</option>
                                  <option value="56">Siirt</option>
                                  <option value="57">Sinop</option>
                                  <option value="58">Sivas</option>
                                  <option value="59">Tekirdağ</option>
                                  <option value="60">Tokat</option>
                                  <option value="61">Trabzon</option>
                                  <option value="62">Tunceli</option>
                                  <option value="63">Şanlıurfa</option>
                                  <option value="64">Uşak</option>
                                  <option value="65">Van</option>
                                  <option value="66">Yozgat</option>
                                  <option value="67">Zonguldak</option>
                                  <option value="68">Aksaray</option>
                                  <option value="69">Bayburt</option>
                                  <option value="70">Karaman</option>
                                  <option value="71">Kırıkkale</option>
                                  <option value="72">Batman</option>
                                  <option value="73">Şırnak</option>
                                  <option value="74">Bartın</option>
                                  <option value="75">Ardahan</option>
                                  <option value="76">Iğdır</option>
                                  <option value="77">Yalova</option>
                                  <option value="78">Karabük</option>
                                  <option value="79">Kilis</option>
                                  <option value="80">Osmaniye</option>
                                  <option value="81">Düzce</option>
                                </select>  
                            </div>
                            <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  id="inputGroup-sizing-default">İlçe</span>
                      </div>
                      <input type="text" class="form-control" name="ilce" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Randevu Tarihi</span>
                      </div>
                      <input type="date" class="form-action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tarih" required>
                  </div>
      
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Randevu Saati</span>
                      </div>
                      <input type="time" class="form-action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="saat" required>
                  </div>
                    <button type="submit" name="kaydet" class="btn btn-lg btn-primary">Randevu Al</button>
                     
                    </form>               
                                
                   
                    
                    

                        
                        
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