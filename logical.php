<?php 
include "temaBas.html";
?>
    <!-- main content başlık ve ana içerik -->
        <!-- dosyaların bulunacağı bölüm -->
        <div class="btn">
            <button id="sortButton" onclick="sortAlphabetically()" class="sort-btn">Mantıksal Dökümanlar<i class="fa-sharp fa-solid fa-sort-down"></i></button>
        </div>
        <div class="info">
          <ul>

            <li><a href=""><i class="fa-solid fa-file-pdf"></i>BT Güvenlik Politikası -  IT Security Policy</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Olay Müdahale Planı Prosedürü - Incident Response Plan </a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anti Virüs Koruma Politikası – Antı-Virus and –Malware Policy</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anti Virus and anti Malware Policy- Virüsten  ve kötü amaçlı yazılımdan Koruma Politkası</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Mantıksal Güvenlik Kılavuzu – Logical Guideline</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Password Policy – Parola Politikası </a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>e-mail Policy – e-mail Politikası</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Çıkarılabilir Medya Politikası - Revovable Media Policy</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Data Sanitization and Technology Equipment Disposal Policy- Veri santasyon ve Teknoloji ekipman bertaraf prosedürü</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Key Storage Procedure (Anahtar Saklama Prosedürü)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Yazılım Kurulum ve Hardening Prosedürü - Software Setup and Hardening Procedure</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Yazılım Kurulum ve Hardening Prosedürü – Software Setup and Hardening Procedur</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anahtar Yönetim Ekibi - (Key Management Team)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>IT Eğitim Form (BT Eğitim Formu)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Kasa Kayıtları Kontrol Formu (Safe Invertory Control Forum)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>HSM Envanter Formu (HSM Inventory Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anahtar Listesi Envanter Formu (Key List Inventory Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anahtar Seromonisi Formu (Key Ceremony Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anahtar Yöneticisi Atama Formu (Key Manager Assigment Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anahtar Yöneticisi Yedeği Atama Formu (Key Manager’s Backup Assignment Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anahtar Yetkilisi Atama Formu (Key Custodian Assignment form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anahtar Yetkilisi Yedeği Atama Formu (Key Custodian’s Backup Assignment form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>HSM Aktivasyon Deaktivasyon  Formu</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Ağ Fiziksel Kabloları Kontrol Formu  (Network Cables Physical Check Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Cihaz Yapılandırma Kontrol Formu (Device Configuration Control Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Yeni Kullanıcı Kayıt Formu  (New User Registration Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Değişiklik Değerlendirme ve Takip Formu (New User Registration Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Güvenlik Duvarı Günlük Denetimi Formu (Firewall Log Control Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Wireless Sinyal Tarama Kontrol Formu (Wireless Signal Scanning Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Log Kayıt Sistemi Kontrol Formu  (Log Registration System Control Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>BT Gizli Anahtar Üretim Formu (It Secret Key Geneartion Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>3 Aylık Kontrol Formu (Control Form For 3 Months)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Haftalık Kontrol Formu (Weekly Control Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Aylık Kontrol Formu (Monthly Control Form)</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Yıllık Kontrol Formu - Yearly Control Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Donanım Transfer Formu - Hardware Transfer Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Firewall Konfigürasyon Formu - Firewall Configuration Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Taşınabilir Medya Envater Formu - Portable Media inventory form</a> </li>
            <li><a href="mantiksal/index.php"><i class="fa-solid fa-file-pdf"></i>Haftalık LOG Kontrolü Formu - Weekly LOG Check Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Anahtar Yöneticisi Kasa Envanter Formu - Key Manager Vault Inventory Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Günlük Kontrol Formu -  Daily Control Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Olay Müdahale Formu - Incident Response Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Olay Tespit Formu - Incident Dedection Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Manuel Yedek Alma Formu - Manual Backup Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Return Control Form - Geri Döndürme Kontrol Formu</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Customer Data Disclosure Form - Müşteri Veri Açıklama Formu</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>VPN Request Form - VPN Talep Formu</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Change Management Form - Değişişklikleri Yönetim Formu</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Inventory Form - Stok Formu</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>User Activation and Deactivation Form - Kullanıcı Etkinleştirme ve Devre Dışı Bırakma Formu</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Manually Data Deletion Form - El ile veri silme formu</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i> Bakcup Material Destruction Form- Yedek Materyal İmha Formu</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Sistem Odası Giriş – Çıkış Kayıt Defteri / Server Room Fields(HSA)-Exit Registry</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>Sistem Odası Envanter Listesi – Server Room Inventory List</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>BT Yöneticis Atama Formu – It Manager Assigment Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>BT Yöneticisi Yedeği Atama Formu-IT Manager Backup Assignment Form</a> </li>
            <li><a href=""><i class="fa-solid fa-file-pdf"></i>BIM.FR.48.01 HSM User Activation and Deactivation Form - HSM Kullanıcı Etkinleştirme ve Devre Dışı Bırakma Formu</a> </li>
            

        </ul>
      </div>
    
    
    <?php 
include "temaSon.html";
?>