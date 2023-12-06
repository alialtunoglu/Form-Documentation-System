<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Side Navigation Bar</title>
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
<style>
 table {
  
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
    
}

th, td {
    color: black;
    text-align: left;
    padding: 16px;
  
}
td{
  font-size: 18px;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

th:nth-child(1){
  width:50%;
}
th:nth-child(2){
  
  width:20%;
}th:nth-child(3){
  width:30%;
}
table tr input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    
}
table tr select {

    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
}

table tr input[type=text]:focus {
    border: 3px solid #555;
}

 input[type=submit] {

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

 input[type=submit]:hover {
    background-color: #45a049;
}
.baslik{
  margin: 20px auto;
}

</style>
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
     

    <form action="form.php" method="post">
      <center><h2 class="baslik">Weekly LOG Check Form <br>
            Haftalık LOG Kontrolü Formu
</h2></center>
        <table>
                    <th>Kontrol</th>
                    <th>Durum</th>
                    <th>Açıklama</th>
            <tr>
                <td> Logging System Asset Control <br>
                   Loglama Sistemi Demirbaş Kontrolü</td>
                <td>
                  <select name="situaiton1" id="situaiton1">
                      <option value="evet">Evet</option>
                      <option value="hayir">Hayır</option>
                  </select>
              </td>
                <td><input type="text" id="explanation1" name="explanation1"></td>
               
            </tr>

            <tr>
                <td> System time control on the Logging System <br>
                    Loglama Sistemi üzerinde sistem saati kontrolü
                    </td>
                    <td><select name="situaiton2" id="situaiton2">
                      <option value="evet">Evet</option>
                      <option value="hayir">Hayır</option>
                  </select></td>
                    <td><input type="text" id="explanation2" name="explanation2"></td>
                  
            </tr>
            <tr>
                <td>Scheduled mission control via the Logging System interface <br>
                    Loglama Sistemi arayüzü üzerinden zamanlanmış görev kontrolü
                    </td>
                    <td><select name="situaiton3" id="situaiton3">
                      <option value="evet">Evet</option>
                      <option value="hayir">Hayır</option>
                  </select></td>
                    <td><input type="text" id="explanation3" name="explanation3"></td>
                   
            </tr>
            <tr>
                <td>Control of hardware on the Logging System (disk occupancy rate, logging status)<br>
                    Loglama Sistemi üzerindeki donanımların kontrolü (disk doluluk oranı, log alma durumları)
                    </td>
                    <td><select name="situaiton4" id="situaiton4">
                      <option value="evet">Evet</option>
                      <option value="hayir">Hayır</option>
                  </select></td>
                    <td><input type="text" id="explanation4" name="explanation4"></td>
                   
            </tr>
            <tr>
                <td>Logging System own log movements
                    Loglama Sistemi kendi log hareketleri
                    </td>
                    <td><select name="situaiton5" id="situaiton5">
                      <option value="evet">Evet</option>
                      <option value="hayir">Hayır</option>
                  </select></td>
                    <td><input type="text" id="explanation5" name="explanation5"></td>
                   
            </tr>
            <tr>
                <td>Getting the logs of the devices defined on the Logging System regularly<br>
                    Loglama Sistemi üzerinde tanımlı cihazların loglarının düzenli alınması
                    </td>
                    <td><select name="situaiton6" id="situaiton6">
                      <option value="evet">Evet</option>
                      <option value="hayir">Hayır</option>
                  </select></td>
                    <td><input type="text" id="explanation6" name="explanation6"></td>
                   
            </tr>
            <tr>
                <td>Critical log checks and actions taken<br>
                    Kritik log kontrolleri ve alınan aksiyonlar</td>
                    <td><select name="situaiton7" id="situaiton7">
                      <option value="evet">Evet</option>
                      <option value="hayir">Hayır</option>
                  </select></td>
                    <td><input type="text" id="explanation7" name="explanation7"></td>
                    
            </tr>
            <tr>
                <td>Have IDS Alert reports been reviewed?<br>
                    IDS Alert raporları incelendi mi?
                    </td>
                    <td><select name="situaiton8" id="situaiton8">
                      <option value="evet">Evet</option>
                      <option value="hayir">Hayır</option>
                  </select></td>
                    <td><input type="text" id="explanation8" name="explanation8"></td>
                    
            </tr>
            <tr>
            <td>Kontrol Eden: 
            </td>
            <td>
              <input type="text" name="controlling1" id="controlling">
            </td>
            </tr>
        </table>
        
       <center><input type="submit" value="Gönder"></center>
      </form>
      </div>
</div>
<script src="../js/index.js"></script>
</body>
</html>