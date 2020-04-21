<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Html;

class ExcelHelper {
  // ExcelKeHtml($lokasi_file_excel string) string
  // Untuk konversi dan menampilkan isinya dalam bentuk html
  // Return :
  // String berupa html
  public function ExcelKeHtml($lokasi_file_excel){
    $file_excel = $lokasi_file_excel;
    $file_html = "result.html";
    
    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); // baca file excel
    $spreadsheet = $reader->load($file_excel); // baca file excel
    
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Html($spreadsheet); // tulis ke html
    $writer->save($file_html); // tulis ke html
    
    // baca isi file html dan tampilkan isinya
    $html = file_get_contents($file_html);
    unlink($file_html); // hapus file htmlnya
    return $html; // hasil file html yang sudah dioper ke return function untuk diechokan
  }
}

?>
