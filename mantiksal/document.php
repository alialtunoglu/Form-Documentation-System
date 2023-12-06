<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="../Css/style.css" />
    <link rel="stylesheet" href="../Css/general.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="../js/script2.js"></script>
    <link rel="stylesheet" href="../Css/style2.css" />
  </head>

  <body>
    <div class="wrapper">
      <div class="sidebar">
        <h2 ><img src="../img/darphane-logo-siyah.png" alt="" /></h2>
        <ul>
          <li>
            <a href="index.php"><i class="fas fa-address-book"></i>Ana Menü</a>
          </li>
          <li>
            <a href="../allDoc.php"
              ><i class="fas fa-solid fa-folder-tree"></i>Tüm Dosyalar</a
            >
          </li>
          <li>
            <a href="../general.php"
              ><i class="fas fa-folder"></i>Genel Dökümanlar</a
            >
          </li>
          <li>
            <a href="../physical.php"
              ><i class="fas fa-solid fa-file"></i>Fiziksel Dökümanlar</a
            >
          </li>
          <li>
            <a href="../logical.php"
              ><i class="fas fa-project-diagram"></i>Mantıksal Dökümanlar</a
            >
          </li>
          <li>
            <a href="../rocs.php"><i class="fas fa-blog"></i>ROCS</a>
          </li>
        </ul>
      </div>
      <div class="main_content">
        <div class="header">
          <div class="box">
            <input type="text" placeholder="Search..." id="searchInput" onkeyup="searchList()"/>
            <a href="#"><i class="fas fa-search"></i></a>
          </div>

          <div class="box2">
            
            <div class="icon" id="bell"><i class="fa-solid fa-bell"></i></div>

            <div class="notifications" id="box">

              <h2>Notifications -> <span>2</span></h2>

              <div class="notifications-item">
                <img src="../img/kullanici.jpg" alt="img" />

                <div class="text">
                  <h4>Can Peksen</h4>
                  <p>Form dolduruldu onayınıza ihtiyaç var</p>
                </div>

              </div>

              <div class="notifications-item">

                <img src="https://img.icons8.com/flat_round/64/000000/vote-badge.png" alt="img"/>

                <div class="text">
                  <h4>Ömürcan Tutan</h4>
                  <p>2 tane formumun onayınıza ihtiyacı var</p>
                </div>
              </div>

            </div>

            <!-- Kullanıcı kısmı alt menü açılışları -->
            <div class="dropdown">
              <a href="" class="dropdown-toggle"><i class="fa-solid fa-user"></i></a>
              <ul class="dropdown-menu">
                <li><a href="../profil.php">Profil</a></li>
                <li><a href="../cikis.php">Çıkış Yap</a></li>
              </ul>
            </div>
          </div>
        </div>
<?php
session_start(); 
include '../deneme2/index.php';   
require 'baglan.php';
require_once 'vendor/autoload.php';
use PhpOffice\PhpWord\TemplateProcessor;
// Belge ID'sini alın

$id = $_GET['id'];


// Belgeyi veritabanından alın
$sorgu = $db->prepare('SELECT * FROM documents WHERE id = ?');
$sorgu->execute([$id]);
$document = $sorgu->fetch();

// Onay işlemi
if (isset($_POST['onayla'])) {
   

    // Belgedeki yer tutucuyu değiştirin
    $templateProcessor = new TemplateProcessor('../dosyalar/'.$document['do_name']);

    // Login olan kullanıcının ID numarasını alın
    $user_id = $_SESSION['user_id'];
    $user_name=$_SESSION['username'];
    echo $user_id.' id numaralı'.$user_name.'Bey/hanım işlemi onayladı';
   
    // Login olan kullanıcının kim olduğuna göre yer tutucuyu değiştirin
    if ($user_id == 4) {
        $templateProcessor->setValue('onay1', 'Onaylandı');
      
        $filepath = '../onayliDosyalar/'.$document['do_name'];
        $templateProcessor->saveAs($filepath);
        $sorgu = $db->prepare('UPDATE documents SET adminOnaySeda = "1" WHERE id = ?');
        $sorgu->execute([$id]);
    } elseif ($user_id == 5) {
      
        $templateProcessor->setValue('onay2', 'Onaylandı');
        $filepath = '../onayliDosyalar/'.$document['do_name'];
        $templateProcessor->saveAs($filepath);
        $sorgu = $db->prepare('UPDATE documents SET adminOnayEmre = "1" WHERE id = ?');
        $sorgu->execute([$id]);
    } elseif ($user_id == 6) {
        $sorgu = $db->prepare('UPDATE documents SET adminOnaySerdar = "1" WHERE id = ?');
        // Onay durumunu kontrol edin ve execute ile adminOnaySerdar verin
     if ($document['adminOnaySeda'] == 1 && $document['adminOnayEmre'] == 1 && $sorgu->execute([$id])) {
      // Belge onaylanmış, burada istediğiniz işlemleri yapabilirsiniz
          // Belgenin onay durumunu güncelleyin
          $templateProcessor = new TemplateProcessor('../dosyalar/'.$document['do_name']);
          $templateProcessor->setValue('onay1', 'Onaylandı');
          $templateProcessor->setValue('onay2', 'Onaylandı');
          $templateProcessor->setValue('onay3', 'Onaylandı');
          $filepath = '../onayliDosyalar/'.$document['do_name'];
          $templateProcessor->saveAs($filepath);
          $sorgu = $db->prepare('UPDATE documents SET do_status = "approved" WHERE id = ?');
          $sorgu->execute([$id]);
      }
      
    }
    
    header("Refresh:2; url=../notification.php");

}
?>






<h1 class="oh1"><center><?php echo $document['do_name']; ?></center></h1>
<?php $filename = str_replace('.docx', '.html', $document['do_name']);


?>

<center>
    <iframe src="../deneme2/dosya/<?php echo $filename?>" width="800" height="600" type="application/html"></iframe>
</center>

<style>
  .oh1{
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .btn20{
    width: 30%;
    background-color: #4CAF50;
    font-size: 18px;
    color: white;
    padding: 14px 20px;
    margin: 8px auto;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  .btn20:hover{
    background-color: #45a049;
  }
</style>

<form action="" method="post">
  <center><button class="btn20" type="submit" name="onayla">Onayla</button></center>
</form>

</div>
</div>
<script src="../js/index.js"></script>
</body>
</html>

