<html lang="en">
	<head>
		<!-- Required meta tags --> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Başarılı!</title>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css
" rel="stylesheet">
	</head>
	<body>
<?php
require '../deneme2/index.php';   
require 'baglan.php';
require_once 'vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

// Belgeyi açın
$templateProcessor = new TemplateProcessor('form.docx');

// Form verilerini alın
$situaiton1 = $_POST['situaiton1'];
$explanation1 = $_POST['explanation1'];
$controlling1 = $_POST['controlling1'];

$situaiton2 = $_POST['situaiton2'];
$explanation2 = $_POST['explanation2'];
$controlling2 = $_POST['controlling2'];

$situaiton3 = $_POST['situaiton3'];
$explanation3 = $_POST['explanation3'];
$controlling3 = $_POST['controlling3'];

$situaiton4 = $_POST['situaiton4'];
$explanation4 = $_POST['explanation4'];
$controlling4 = $_POST['controlling4'];

$situaiton5 = $_POST['situaiton5'];
$explanation5 = $_POST['explanation5'];
$controlling5 = $_POST['controlling5'];

$situaiton6 = $_POST['situaiton6'];
$explanation6 = $_POST['explanation6'];
$controlling6 = $_POST['controlling6'];

$situaiton7 = $_POST['situaiton7'];
$explanation7 = $_POST['explanation7'];
$controlling7 = $_POST['controlling7'];

$situaiton8 = $_POST['situaiton8'];
$explanation8 = $_POST['explanation8'];
$controlling8 = $_POST['controlling8'];





// Yer tutucuları değiştirin
$templateProcessor->setValue('situaiton1', $situaiton1);
$templateProcessor->setValue('explanation1', $explanation1);
$templateProcessor->setValue('controlling1', $controlling1);

$templateProcessor->setValue('situaiton2', $situaiton2);
$templateProcessor->setValue('explanation2', $explanation2);
$templateProcessor->setValue('controlling2', $controlling2);

$templateProcessor->setValue('situaiton3', $situaiton3);
$templateProcessor->setValue('explanation3', $explanation3);
$templateProcessor->setValue('controlling3', $controlling3);

$templateProcessor->setValue('situaiton4', $situaiton4);
$templateProcessor->setValue('explanation4', $explanation4);
$templateProcessor->setValue('controlling4', $controlling4);

$templateProcessor->setValue('situaiton5', $situaiton5);
$templateProcessor->setValue('explanation5', $explanation5);
$templateProcessor->setValue('controlling5', $controlling5);

$templateProcessor->setValue('situaiton6', $situaiton6);
$templateProcessor->setValue('explanation6', $explanation6);
$templateProcessor->setValue('controlling6', $controlling6);

$templateProcessor->setValue('situaiton7', $situaiton7);
$templateProcessor->setValue('explanation7', $explanation7);
$templateProcessor->setValue('controlling7', $controlling7);

$templateProcessor->setValue('situaiton8', $situaiton8);
$templateProcessor->setValue('explanation8', $explanation8);
$templateProcessor->setValue('controlling8', $controlling8);







// Dosya adını belirleyin
$filename = 'output.docx';
$count = 1;

// Veritabanında aynı dosya adından bulunup bulunmadığını kontrol edin
while (true) {
    $sorgu = $db->prepare('SELECT COUNT(*) FROM documents WHERE do_name = ?');
    $sorgu->execute([$filename]);
    $result = $sorgu->fetchColumn();

    // Eğer aynı dosya adından bulunmuyorsa, döngüden çıkın
    if ($result == 0) {
        break;
    }

    // Aynı dosya adından bulunuyorsa, dosya adına sayı ekleyin ve sayacı artırın
    $count++;
    $filename = 'output' . $count . '.docx';
}

// Veritabanına kaydedin
date_default_timezone_set('Europe/Istanbul');
$date = date('Y-m-d H:i:s');

$sorgu = $db->prepare('INSERT INTO documents (do_name, do_status, creation_date) VALUES (?, "pending", ? )');
$sorgu->execute([$filename,$date]);

// Belgeyi kaydedin

echo $filename;
$filepath = '../dosyalar/'. $filename;
$templateProcessor->saveAs($filepath);


$filePdfpath='../deneme2/dosya/';
$fileWordpath='../dosyalar/';

wordToPdf($filename,$fileWordpath,$filePdfpath);
?>

<script>
Swal.fire({
  title: 'İşlem Başarılı',
  text: "Formunuz oluşturuldu. Yetkili kişilerin onayı bekleniyor...",
  icon: 'success',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '<a style="text-decoration: none; color:white" href="https://darppci.canpeksen.com.tr/TopluForm/mantiksal/output.docx">DOSYAYI İNDİR</a>',
  cancelButtonText: '<a style="text-decoration: none; color:white" href="https://darppci.canpeksen.com.tr/TopluForm/">Ana Menüye Dön</a>'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: 'Dosyanız İndirildi!',
      text: 'Ana menüye dönmek için Ok basın',
      icon: 'success',
      confirmButtonText: '<a style="text-decoration: none; color:white" href="https://darppci.canpeksen.com.tr/TopluForm/">Ok</a>'
    })
  }
})
</script>

</body>
</html>