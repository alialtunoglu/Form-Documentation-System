<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bildirimler</title>
  <link rel="stylesheet" href="Css/style.css" />
  <link rel="stylesheet" href="Css/general.css" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="js/script2.js"></script>
  <link rel="stylesheet" href="Css/style2.css" />



  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);


    body {
      font-family: "Roboto", sans-serif;
      min-height: 100vh;
      position: relative;
    }

    .section-50 {
      padding: 30px 20px;
    }

    .m-b-50 {
      margin-bottom: 50px;
    }

    .dark-link {
      color: #333;
    }

    .heading-line {
      position: relative;
      padding-bottom: 5px;
    }

    .heading-line:after {
      content: "";
      height: 4px;
      width: 83px;
      background-color: #29b6f6;
      position: absolute;
      bottom: 0;
      left: 0;
    }

    .notification-ui_dd-content {
      margin-bottom: 30px;
    }

    .notification-list {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      padding: 20px;
      margin-bottom: 7px;
      background: #fff;
      -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
    }

    .notification-list--unread {
      border-left: 2px solid #29b6f6;
    }

    .notification-list .notification-list_content {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
    }

    .notification-list .notification-list_content .notification-list_img img {
      height: 48px;
      width: 48px;
      border-radius: 50px;
      margin-right: 20px;
    }

    .notification-list .notification-list_content .notification-list_detail p {
      margin-bottom: 5px;
      line-height: 1.2;
    }

    .notification-list .notification-list_feature-img img {
      height: 48px;
      width: 48px;
      border-radius: 5px;
      margin-left: 20px;
    }
    a, a:visited {
    color: #4b4276;
  }
  </style>
  <script type="text/javascript" src=""></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script type="text/javascript"
    src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</head>

<body class="snippet-body">

  <?php
  session_start();
  require 'baglan.php';
  $user_id = $_SESSION['user_id'];
  
  // Onay bekleyen belgeleri alın
  if($user_id==4){
    $sorgu = $db->prepare('SELECT * FROM documents WHERE do_status = "pending" AND adminOnaySeda="0" AND adminOnayEmre="0" AND adminOnaySerdar="0" ');
    $sorgu->execute();
    $documents = $sorgu->fetchAll();
  }
  elseif($user_id==5){
    $sorgu = $db->prepare('SELECT * FROM documents WHERE do_status = "pending" AND adminOnaySeda="1" AND adminOnayEmre="0" AND adminOnaySerdar="0"');
    $sorgu->execute();
    $documents = $sorgu->fetchAll();
  }
  elseif($user_id==6){
      $sorgu = $db->prepare('SELECT * FROM documents WHERE do_status = "pending" AND adminOnaySeda="1" AND adminOnayEmre="1" AND adminOnaySerdar="0"');
      $sorgu->execute();
      $documents = $sorgu->fetchAll();
  }
  
 
  ?>
  <div class="wrapper">
    <div class="sidebar">
      <h2 class="asdasd"><img src="img/darphane-logo-siyah.png" alt="" /></h2>
      <ul>
        <li>
          <a href="index.php"><i class="fas fa-address-book"></i>Ana Menü</a>
        </li>
        <li>
          <a href="allDoc.php"><i class="fas fa-solid fa-folder-tree"></i>Tüm Dosyalar</a>
        </li>
        <li>
          <a href="general.php"><i class="fas fa-folder"></i>Genel Dökümanlar</a>
        </li>
        <li>
          <a href="physical.php"><i class="fas fa-solid fa-file"></i>Fiziksel Dökümanlar</a>
        </li>
        <li>
          <a href="logical.php"><i class="fas fa-project-diagram"></i>Mantıksal Dökümanlar</a>
        </li>
        <li>
          <a href="rocs.php"><i class="fas fa-blog"></i>ROCS</a>
        </li>
      </ul>
    </div>
    <div class="main_content">
      <div class="header">
        <div class="box">
          <input type="text" placeholder="Search..." id="searchInput" onkeyup="searchList()" />
          <a href="#"><i class="fas fa-search"></i></a>
        </div>

        <div class="box2">

          <div class="icon" id="bell"><i class="fa-solid fa-bell"></i></div>

          <div class="notifications" id="box">

            <h2><a href="notification.php"> Notifications -> </a><span>2</span></h2>

            <div class="notifications-item">
              <img src="img/kullanici.jpg" alt="img" />

              <div class="text">
                <h4>Can Peksen</h4>
                <p>Form dolduruldu onayınıza ihtiyaç var</p>
              </div>

            </div>

            <div class="notifications-item">

              <img src="https://img.icons8.com/flat_round/64/000000/vote-badge.png" alt="img" />

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
              <li><a href="profil.php">Profil</a></li>
              <li><a href="cikis.php">Çıkış Yap</a></li>
            </ul>
          </div>
        </div>
      </div>

      

      <section class="section-50">
        <div class="container">
          <h3 class="m-b-50 heading-line">
            Bildirimler <i class="fa fa-bell text-muted"></i>
          </h3>

          <?php if (count($documents) > 0): ?>
            <div class="notification-ui_dd-content">
              <?php foreach ($documents as $document): ?>
                <div class="notification-list notification-list--unread">
                  <div class="notification-list_content">
                    <div class="notification-list_img">
                      <img src="img/kullanici.jpg" alt="user" />
                    </div>
                    <div class="notification-list_detail">
                      <p><b><a href="mantiksal/document.php?id=<?php echo $document['id']; ?>"><?php echo $document['do_name']; ?></a></b> Adında
                        <?php echo $document['creation_date']; ?> tarihinde yeni bir dosya oluşturuldu
                      </p>
                      <p class="text-muted"><small>
                          <?php
                          // Saat dilimini İstanbul saat dilimine ayarlayın
                          date_default_timezone_set('Europe/Istanbul');

                          // Tarihleri DateTime nesnelerine dönüştürün
                          $db_datetime = new DateTime($document['creation_date']);
                          $now_datetime = new DateTime();

                          // Tarihler arasındaki farkı hesaplayın
                          $interval = $now_datetime->diff($db_datetime);

                          // Farkı istediğiniz formatta görüntüleyin
                          if ($interval->d > 1) {
                            echo $interval->format('%a gün %h saat önce');
                          } elseif ($interval->h >= 1) {
                            echo $interval->format('%h saat önce');
                          } else {
                            echo $interval->format('%i dakika önce');
                          }
                          ?>
                        </small></p>
                    </div>
                  </div>
                  <div class="notification-list_feature-img">
                    <img src="img/document.png" alt="Feature image" />
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php else: ?>
            <p>Onay bekleyen belge bulunmamaktadır.</p>
          <?php endif; ?>





      </section>




    </div>
  </div>
  <script src="js/index.js"></script>
</body>

</html>