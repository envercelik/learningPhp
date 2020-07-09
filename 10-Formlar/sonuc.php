<?php

/*

get  metodu ile gönderile veriler url üzerinden gelir.
post metodu ile gönderilen veriler gizli olarak gelir.

get  ile gönderilen form verileri :  $_GET global değişkeni ile
post ile gönderilen form verileri :  $_POST global değişkeni ile alınır.
$_REQUEST  global değişkeni ise hem post hem get ile gönderilen form verilerini alabilir.

-Not : Bir inputtan dizi verisi almak için formda name dizi olarak tanımlanmalıdır
       örnek : name="isimler[]"

not : eğer formdan gelen file verisi varsa $_FİLE global değişkeni ile alınır.
      get ile file verisi gönderilemez post ile gönderilmelidir.
      Ayrıca form baslangıc tagına  enctype="multipart/form-data"  özelliği verilmelidir.

not : formdan gelen file verisi ile dosyayı bir dizine kaydetmek için move_uploaded_file();
      parameterler : $dosyanıntempadı , $dosyanınkaydedileceğiyolveadı


print_r($_GET);
echo $_GET['adsoyad'];

print_r($_POST);
echo $_GET['adsoyad'];

print_r($_REQUEST);
echo $_REQUEST['adsoyad'];







*/

print_r($_REQUEST);

print_r($_REQUEST['hobiler']);  //hobiler array olarak gönderildi
echo $_REQUEST['adsoyad'];
echo $_REQUEST['hobiler'][0];



print_r($_FILES);

$tmp_name = $_FILES['resim']['tmp_name'];
$yolvead = "Files/" . $_FILES['resim']['name'];

if(move_uploaded_file($tmp_name , $yolvead))
    echo "Dosya yükleme başarılı";





?>