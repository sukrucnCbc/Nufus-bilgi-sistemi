<?php
	session_start();
	if (isset($_SESSION['user'])) {
		echo "Giriş yapmışsın. (".$_SESSION['user']['kullanici_adi'].")";
	}else {
		echo "Giriş yapılmamış.";
	}
 

?>




<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nüfus Bilgi Sistemi</title>
    <link rel="stylesheet" type="text/css" href="assets/css/giris.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<style>


#header {
    height: 300px;
    width: 500px;
    position: absolute;
    margin-top: 25px;
    top: 15;
    left: 185;
    font-size: 85px;
    font-family: 'Josefin Sans', sans-serif;
    color: #3f3d56;
}

form {
 width: 270px;
 position: absolute;
top:100;
right:175;
 
}
	</style>
</head>
<body>
    <img class="wave" src="assets/img/wave.png">
	<div class="container">

		<div class="img">
            <div id="header">NÜFUS KAYIT BİLGİ SİSTEMİ</div>
			<img src="assets/img/new_bg.svg">
		</div>
		<!-- Giriş Formu -->
		<div class="login-content">

			<form action="giris.php"  method="post">
				<img src="assets/img/avatar.svg">
				<h2 class="title">HOŞGELDİNİZ</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text" name="kullanici_adi" placeholder="Kullanıcı Adı" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="password" placeholder="Şifre" name="sifre" class="input">
            	   </div>
            	</div>
            	<a href="assets/img/avatar.svg"></a>
				
				<button type="submit" name="giris" class="btn">GİRİŞ</button>
				<p style="font-style: italic; font-weight: lighter;">ya da</p>
                <button type="button"  onclick="window.location.href = 'vatandasAna.html';" name="vatandas" class="btn">Vatandaş Girişi</button>
            </form>
        </div>
        
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    
</body>
</html>