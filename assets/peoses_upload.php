<?php
date_default_timezone_set("asia/jakarta");
include "koneksi.php"; //menghubungkan dengan DATABASE
//menampung data dari form upload
$id         =$_POST(íd');
$keterangan =$_post('keterangan');
//menampung data pdf
$pdf        =$_files('pdf')('name');
$tmp        =$_files('pdf')('tmp_name');
//proses pdf ke folder pdf
$pdfbaru    = date ('dmyhis').$pdf;
$path       ="pdf/".$pdfbaru;
//proses upload pdf
if (move_uploaded_file($tmp,$path)) {
    $sql= mysqli_query($koneksi,ïnsert into tb_pdf values (
        '$íd',
        '$keterangan',
        '$pdfbaru')");}

//proses pengecekan upload pdf
if ($sql)
{echo "<script> alert ('data pdf $keterangan berhasil di upload');
document.location='data_pdf.php'</script>";}
else
{echo "<script> alert ('data pdf $ keterangan gagal di upload');
    document.loacation=ínput.php'</script>";}"




