<?php 
 
require_once 'vendor/autoload.php'; // Composer autoloader'ı dahil edin
use PhpOffice\PhpWord\IOFactory;
 use PhpOffice\PhpWord\Settings;


function wordToPdf($filename1,$fileWordpath,$filePdfpath){

// DomPDF kütüphanesini yapılandırın
 Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
 Settings::setPdfRendererPath('C:\xampp\htdocs\deneme\vendor\dompdf');

//dosya yolunu değişkene aktarıyoruz
$filepath = $fileWordpath.$filename1;
$phpWord = IOFactory::load($filepath); // .docx dosyasını yükleyin

// .docx dosyasını .html formatına dönüştürün
// $htmlWriter = IOFactory::createWriter($phpWord, 'HTML');
// $htmlWriter->save('ornek.html');


// .docx dosyasını .pdf formatına dönüştürün
$pdfWriter = IOFactory::createWriter($phpWord, 'HTML');


// Dosya adının sonuna .pdf uzantısını ekleyin
$filename = str_replace('.docx', '.html', $filename1);

$filepath2 = $filePdfpath.$filename;
$pdfWriter->save($filepath2);

}





?>




