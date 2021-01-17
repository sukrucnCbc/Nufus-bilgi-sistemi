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
    background: #040b14;
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
  height: 200px;
  position: relative;
  float: left;
  margin:5px;
  margin-top: 0;
  padding: 5px;


}
.content2{
  background-color: whitesmoke;
  border:2px solid #149ddd;
  border-radius: 5px;
  width: 50%;
  height: 370px;
  position: relative;
  float: right;
  padding: 5px;

}
#baslik{
  font-family: 'Courier New', Courier, monospace;
  margin: 15px;
  
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

.sonuc{
    
    margin-top: 10px;
    height: 300px;
    
}

table.rg-table {
	margin: 0 0 1em 0;
	width: 100%;
	border-collapse: collapse;
	border-spacing: 0;
}
table.rg-table * {
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
	text-align: left;
}
table.rg-table thead {
	border-bottom: 1px solid rgba(195,195,197,.3);
}
table.rg-table th {
	font-weight: bold;
	padding: 0.5em;
	line-height: 1.4;
	border-bottom: 5px solid #555;
}
table.rg-table td {
	padding: 0.5em;
	line-height: 1.4;
}
table.rg-table .highlight td {
	font-weight: bold;
}
table.rg-table tr {
	border-bottom: 1px solid rgba(195,195,197,.3);
	color: #222;
}
table.rg-table .number {
	text-align: left;
}
table.rg-table.zebra tr:nth-child(even) {
	background: rgba(195, 195, 197, 0.1);
}
table.rg-table tr.highlight {
	background: #edece4;
}
@media screen and (max-width: 500px) {
.rg-container {
	max-width: 500px;
	margin: 0 auto;
}
table.rg-table {
	display: block;
	width: 100%;
}
table.rg-table tr.hide-mobile, table.rg-table th.hide-mobile, table.rg-table td.hide-mobile {
	display: none;
}
table.rg-table thead {
	display: none;
}
table.rg-table tbody {
	display: block;
	width: 100%;
}
table.rg-table td:last-child {
	padding-right: 0;
	border-bottom: 2px solid #ccc;
}
table.rg-table tr, table.rg-table th, table.rg-table td {
	display: block;
	padding: 0;
}
table.rg-table td[data-title]:before {
	content: attr(data-title) ":A0";
	font-weight: bold;
	display: inline-block;
	content: attr(data-title);
	float: left;
	margin-right: 0.5em;
	font-size: 0.95em;
}
table.rg-table tr {
	border-bottom: none;
	margin: 0 0 1em 0;
	padding: 0.5em 0;
}
table.rg-table tr:nth-child(even) {
	background: none;
}
table.rg-table td {
	padding: 0.5em 0 0.25em 0;
	border-bottom: 1px dotted #ccc;
	text-align: right;
}
table.rg-table td:empty {
	display: none;
}
table.rg-table .highlight td {
	background: none;
}
table.rg-table tr.highlight {
	background: none;
}
table.rg-table.zebra tr:nth-child(even) {
	background: none;
}
table.rg-table.zebra td:nth-child(even) {
	background: rgba(195, 195, 197, 0.1);
}
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
          <li><a href="vtndsSorgu.php"><i class="bx bx-server"></i> <span style="color: #149ddd;"> Adres Kaydı Sorgula</a></li></span>
          <li><a href="vtndsBelge.html"><i class="bx bx-server"></i> <span > Belge İşlemleri</a></li></span>
          <li><a href="eRandevu.php"><i class="bx bx-server"></i> <span > e-Randevu</a></li></span>
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
                <h1 style="font-family: 'Poppins', sans-serif;">ADRES KAYDI SORGULA</h1>
            </div>
            <div class="icAnaDiv">
                <div class="content1">
                  <div class="icBaslik">
                      <label style="font-size:x-large;" for="">Adres Sorgulama Ekranı</label>
                    
                    
           
<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);


$db = new PDO("mysql:host=localhost;dbname=nufus;charset=utf8", "root", "123456");

$tc_no1 = $_POST['tc_no1'];

$sorgu = $db->prepare("SELECT * FROM yeni_nufus_kaydi WHERE tc_no = ?");
$sorgu->execute(array($tc_no1));
$islem=$sorgu->fetch();



?>                   
                     <form action="" method="POST">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">TC Kimlik Numarası</span>
                      </div>
                      <input type="text" name="tc_no1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary btn-lg">Sorgula</button><br>
                    </form>

      
                    

                  </div>
                  
                  </div>    
                    
                  <div class="content2">
                    <div class="icBaslik">
                      
                      <div class="sonuc">
                        Sorgu Sonucu Burda Görüntülenir
                        <div class="rg-container" >
	
                          <div class="rg-content">
                            <table class="rg-table zebra">
                              <thead>
                                <th class="number rg-th">Başlık</th>
                                <th class="text rg-th">Sorgu Sonucu</th>
                              </thead>
                              <tbody>
                                <tr>

                                    <td>İsim</td>
                                    <td><?php echo $islem ['isim'] ?></td>
                                </tr>
                                <tr>
                                    <td>Soyisim </td>
                                    <td><?php echo $islem ['soyisim'] ?></td>
                                </tr>
                                <tr>
                                    <td>İL</td>
                                    <td><?php echo $islem ['il'] ?></td>
                                </tr>
                                <tr>
                                    <td>İlçe</td>
                                    <td><?php echo $islem ['ilce'] ?></td>
                                </tr>
                                <tr>
                                    <td>Mahalle/Köy</td>
                                    <td><?php echo $islem ['mahalle'] ?></td>
                                </tr>
                                <tr>
                                    <td>Sokak</td>
                                    <td><?php echo $islem ['sokak'] ?></td>
                                </tr>
                                <tr>
                                    <td>No</td>
                                    <td><?php echo $islem ['no'] ?></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          
                        </div><br>
                        
    
</div>

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