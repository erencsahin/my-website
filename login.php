<?php
$correctUsername='g211210088@ogr.sakarya.edu.tr';
$correctPassword='g211210088'; 

if (isset($_POST['username'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($correctUsername==$username && $correctPassword==$password){
        echo "Hoşgeldiniz + $username";
        header('Location: http://localhost/my-website/mywebsite.html');
    }

    else {
        echo "Tekrar deneyiniz.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
    <link rel="stylesheet" href="styles/login.css">
<body>
    <div class="container"> 
        <div class="logo">
            <img src="images/yüzme_n.jpg" alt="Logo">
        </div>
        <form action="" method="post">
            <div class="title">GİRİŞ YAP</div>
            <div class="input-box">
                <input type="email" name="username" placeholder="Email giriniz (erencsahin0@gmail.com)"required autofocus>
                <div class="underline"></div>
            </div>
            <div class="input-box button">
                <input type="password" name="password" placeholder="Şifre giriniz " required>
                <div class="underline"></div>
            </div>
            <div class="input-box">
                <input type="submit" id="login-button" value="Giriş Yap">
            </div>
        </form>
    </div>
</body>
</html>