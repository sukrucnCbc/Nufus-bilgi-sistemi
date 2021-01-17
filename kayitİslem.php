<?php


require_once 'baglan.php';
if(isset($_POST['kaydet'])){

    $kaydet=$veritabani->prepare("INSERT INTO yeni_nufus_kaydi set 
        kayit_nedeni=:kayit_nedeni,
        isim=:isim,
        soyisim=:soyisim,
        baba_adi=:baba_adi,
        anne_adi=:anne_adi,
        dogum_tarihi=:dogum_tarihi,
        il=:il,
        ilce=:ilce,
        mahalle=:mahalle,
        sokak=:sokak,
        
        dogum_yeri=:dogum_yeri,
        uyrugu=:uyrugu,
        tc_no=:tc_no"
        );

    $insert=$kaydet->execute(array(
        'kayit_nedeni'=> $_POST['kayit_nedeni'],
        'isim' => $_POST['isim'],
        'soyisim' => $_POST['soyisim'],
        'baba_adi' => $_POST['baba_adi'],
        'anne_adi' => $_POST['anne_adi'],
        'dogum_tarihi' => $_POST['dogum_tarihi'],
        'il' => $_POST['il'],
        'ilce' => $_POST['ilce'],
        'mahalle' => $_POST['mahalle'],
        'sokak' => $_POST['sokak'],
        
        'dogum_yeri' => $_POST['dogum_yeri'],
        'uyrugu' => $_POST['uyrugu'],
        'tc_no'=> $_POST['tc_no']
        ));

}
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


$sorgu=$vt->prepare('SELECT * FROM yeni_kayit_islemi');
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
    border-right: none;
    border-radius: 3px;
    width: 50%;
    height: 500px;
    position: relative;
    float: left;
    padding: 5px;


  }

  .input-group-append, .input-group-prepend {
    display: -ms-flexbox;
    display:block;
    
}
  .content2{
    background-color: whitesmoke;
    border:2px solid #149ddd;
    border-left: 0;
    border-radius: 3px;
    width: 50%;
    height: 500px;
    position: relative;
    float: right;
    padding: 5px;

  }
  #baslik{
    font-family: 'Courier New', Courier, monospace;
    margin:15px
  }
  /*--------------------------------------------------------------
  # Sections General
  --------------------------------------------------------------*/



  /*--------------------------------------------------------------
  # Ana
  --------------------------------------------------------------*/

  .container{
      background-color:whitesmoke;
      border:1px solid silver;
      width: 78%;
      float:right;
      padding: 25px;
  }


  .icAnaDiv{
    padding: 5px;
    
  }


  .nav-menu img{
    width:30px;
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
         <li class="active"><a href="anasayfa.html"><i class="bx bx-home"></i> <span>Anasayfa</span></a></li>
          <li><a href="kayitİslem.php"><i class="bx bx-user"></i> <span style="color: #149ddd;">Yenit Kayıt Ekle</span></a></li>
          <li><a href="kayitSil.html"><i class="bx bx-file-blank"></i> <span>Kayıt Sil/Değiştir</span></a></li>
          <li><a href="belge.php"><i class="bx bx-book-content"></i>Belge İşlemleri</a></li>
          <li><a href="adresislem.php"><i class="bx bx-server"></i> Adres İşlemleri</a></li>
          <li><a href="randevular.php"><i class="bx bx-server"></i> Randevular</a></li>
          <li><a href="index.php"><i class="bx bx-envelope"></i> Çıkış</a></li>

        </ul>
      </nav>
      

    </div>
  </header><!-- End Header -->

  <section id="ana" class="ana">
    <div class="container">
        
      <div class="card">
            <div id="baslik">
                <h1 style="font-family: 'Poppins', sans-serif;">YENİ NÜFUS KAYDI</h1>
            </div>
            <div class="icAnaDiv">
                    <div class="content1">
                    <div class="icBaslik">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Kayıt Ekleme Nedeni</label>
                          </div>
                <form action="" method="post">
                            <select class="custom-select" id="kayit_nedeni" name="kayit_nedeni" >
                              <option selected>Seç</option>
                              <option value="Doğum">Doğum</option>
                              <option value="Göç">Göç</option>
                              <option value="Yeni Vatandaş">Yeni Vatandaşlık</option>
                            </select>
                        </div>
                      
                      
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-default">İsim</span>
                              </div>
                              <input type="text" class="form-action" name="isim" required>
                          </div>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Soyisim</span>
                              </div>
                              <input type="text" class="form-action" aria-label="Sizing example input"  aria-describedby="inputGroup-sizing-default" name="soyisim" required>
                          </div>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Baba Adı</span>
                              </div>
                              <input type="text" class="form-action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="baba_adi" required>
                          </div>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Anne Adı</span>
                              </div>
                              <input type="text" class="form-action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="anne_adi" required>
                          </div>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Doğum Tarihi</span>
                              </div>
                              <input type="date" class="form-action" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="dogum_tarihi" required>
                          </div>
                            
                          <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="form-action" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="fotograf_url" >
                                <label class="custom-file-label" for="inputGroupFile04">Fotoğraf Seç</label>
                            </div>
                              <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Yükle</button>
                              </div>
                          </div>
                    </div>      
                  </div> 
      
                 

                  
                     

                  <div class="content2">
                    <div class="icBaslik">



                
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
                          
                      <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-sm">İlçe</span>
                            </div>
                            <input type="text" class="form-action" name="ilce" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>

                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-default">Mahalle/Köy</span>
                          </div>
                          <input type="text" class="form-action" name="mahalle" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>

                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-default">Sokak</span>
                          </div>
                          <input type="text" class="form-action" name="sokak" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">No</span>
                          </div>
                          <input type="text" class="form-action" name="no" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Doğum Yeri</span>
                        </div>
                        <input type="text" class="form-action" name="dogum_yeri" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">Uyruğu</span>
                        </div>
                        <input type="text" class="form-action" name="uyrugu" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-default">TC Kimlik No</span>
                        </div>
                        <input type="text" class="form-action" name="tc_no" required aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                      </div>
                        <label  style="color:#ef4545; font-size:large; ">! Lütfen alt kısımda bir TC kimlik no oluşturun ve bu alana yapıştırın.</label>
                        <br>


                    </div>
                  </div>
                                        
                  </div>   

                  <div class="form-group">
                   
                  <button type="submit" name="kaydet" class="btn btn-secondary btn-lg btn-block"  >Kaydet</button> 
                </form>  
                </div> 
                
            
                
<?php


error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);


$db = new PDO("mysql:host=localhost;dbname=nufus;charset=utf8", "root", "123456");



$sorgu = $db->prepare("SELECT * FROM yeni_nufus_kaydi ORDER BY id DESC");
$sorgu->execute();
$islem=$sorgu->fetch();
?>           
            


            
            <hr>
            <div id="sonuc">Belirlenen TC Kimlik Numarası : <span style="color:#ef4545; font-size:x-large; " id="tc_no"></span></div>
             <button onclick="sayiUret();" >TC Kimlik NO oluştur</button>
            
            <hr>
      </div>
      <hr>  
            <h1 style="text-align:center; color:#ef4545; font-family: 'Poppins', sans-serif;" >Son Eklenen Güncel Kayıt</h1>
              <div class="row justify-content-center">
            <div class="col">
            <table class="table table-bordered table-striped table-dark">
              <tr>
              <td>TC Kimlik No</td>
              <td>İsim</td>
              <td>Soyisim</td>
              <td>Kayıt Nedeni</td>
              <td>Kayıtlı Olduğu İl</td>
              <td width="75"></td>
              
              </tr>
              
             
             
                <tr>
                
                <td><?php echo $islem ['tc_no']; ?></td>
                <td><?php echo $islem ['isim']; ?></td>
                <td><?php echo $islem ['soyisim']; ?></td>
                <td><?php echo $islem ['kayit_nedeni']; ?></td>
                <td><?php echo $islem ['il']; ?></td>
                <td><a href="#" class="btn btn-danger">Sil</a></td>
                </tr>
                  
                
         
        
              </table>  
              </div>  
            </div>
    </div>        


  

		
      
       
</section>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script>
    function sayiUret() {
      document.getElementById("tc_no").innerHTML = randomInt(10500000000, 99999999900);
    }

    function randomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
  </script>  
</body>
</html>          
