<?php 
ob_start();
session_start();
require 'baglan.php';
?>

<?php 
include "temaBas.html";
?>

<div class="info">
  <div> <a href="#" class="dropdown-toggle"><i class="fa-solid fa-user"></i></a> Kullanıcı  Adı: <?php echo $_SESSION['username'] ?> </div>
  <div>Bölüm:</div>
</div>
<?php 
include "temaSon.html";
?>