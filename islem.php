<?php 
ob_start();
session_start();
require 'baglan.php';

if(isset($_POST['kayit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password_again=$_POST['password_again'];
    if(!$username){
        echo "Lütfen Kullanıcı adınızı girin";
    }
    elseif(!$password || !$password_again){
        echo "Lütfen şifrenizi girin";
    }
    elseif($password != $password_again){
        echo "Girdiğiniz şifreler birbiri ile aynı değil";
    }
    else{
        // Şifreyi hash'le
        $password = password_hash($password, PASSWORD_DEFAULT);

        //veritabanı kayıt işlemi
        $sorgu = $db->prepare('INSERT INTO users SET user_name = ?,user_password=?');
        $ekle = $sorgu->execute([$username,$password]);
        if($ekle){
            echo "Kayıt Başarıyla gerçekleşti, yönlendiriliyorsunuz";
            header('Refresh:2; index.php');
        }
        else {
            echo "Bir hata oluştu, Tekrar kontrol edin";
        }
    }
}

if(isset($_POST['giris'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(!$username){
        echo " Kullanıcı adınızı girin";
    }
    elseif(!$password ){
        echo " şifrenizi girin";
    }
    else {
        // Kullanıcının hash'lenmiş şifresini veritabanından al
        $kullanici_sor = $db->prepare('SELECT * FROM admins WHERE user_name = ?');
        $kullanici_sor->execute([$username]);
        $user = $kullanici_sor->fetch();

        // Şifreyi kontrol et
        if (password_verify($password, $user['user_password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username']=$username;
            echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz";
            header('Refresh:2; index.php');
        } else {
            echo "Bir hata oluştu tekrar kontrol edin";
        }
    }
}

?>
