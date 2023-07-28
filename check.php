<?php
// Tarayıcı önbelleğini devre dışı bırakma
header("Cache-Control: no-cache, must-revalidate");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correctUsername = "erencsahin0@gmail.com";
    $correctPassword = "123456";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $correctUsername && $password === $correctPassword) {
        // Giriş başarılı, yönlendirme yapabilirsiniz
        header("Location: mywebsite.html");
        exit;
    } else {
        // Hatalı giriş, login sayfasına geri yönlendir
        header("Location: index.html");
        exit;
    }
} else {
    // Eğer formdan post edilmediyse doğrudan login sayfasına yönlendir
    header("Location: index.html");
    exit;
}
?>
