<?php


/*VERİ TÜRLERİ */
/*
-php de veri türü ,  atanan değere göre  otomatik olarak belirlenir.Özel olarak atanmaz.

Veri Turleri :

Ana veri türleri        -> boolean , integer , double/float , string
Bileşik veri türleri    -> array , object
Özel veri türleri       -> resource , null ,callable

*/



$isim = "enver";  //isim bir stringtir.
$sayi = 15;       //sayi bir int değerdir.





/*VERİ TÜRÜ DÖNÜŞÜMLERİ */

//gettype();  : veri tipini döner.
//settype();  : veri tipini değiştirir.

$sayi = "8";
echo gettype($sayi);
settype($sayi , "integer");
echo gettype($sayi);



//typecasting

$sayi = "5";
$sayi = (integer)($sayi);
echo gettype($sayi);


$sayi = 5.15;
$sayi = (integer)($sayi);
echo gettype($sayi);


$sayi = 7.22;
$sayi = (string)($sayi);
echo gettype($sayi);


$sayi = (boolean)($sayi);
echo gettype($sayi);






/*DEĞER VERİ TİPİ DÖNÜŞTÜRME*/

//boolval();   herhangi bir değişkenin içeriğini boolean veri tipinde döndürür.(veri tipini değiştirmez)
//intval();
//floatval();
//doubleval();


$sayi = "8.55";
echo gettype($sayi);

$sayiBool = boolval($sayi);
echo gettype($sayi);
echo gettype($sayiBool);


/*BAZI FONKSİYONLAR*/

//var_dump();    :  bir değişkenin veri türünü , içeriği ile birliklte basar.
//serialize();   :  bir değişkenin değerini saklanabilir veri türüne dönüştürüp döndürür.
//unserialize(); : serialize() işlemini tersine döndürür.

//not :  saklanabilir veri türü verilerin bir dosyada ya da veritabanında tutulması için daha uygundur.
//       (diziler için kullanışlı)



//Not : declare(strict_types = 1);  ifadesini sayfanın başına eklersek yazacağımız fonksiyonlara veri türü
//        dayatması yapabiliriz. (only php 7)

/*
//sayi int olmak zorundadır aksi durumda hata verir.

function (int $sayi ) {

}
*/










