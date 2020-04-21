<?php
require 'vendor/autoload.php';
require_once "excel-helper.php";

$excel = new ExcelHelper();
echo $excel->ExcelKeHtml("tanah.xlsx");

?>
