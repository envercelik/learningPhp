<?php

//Php'de değişkenler dolar işareti ile başlar.
$degisken = "değer";





// &  : ile bir değişenin adresine ulaşılabilir ve referansa göre değer atanabilir.

$isim1 = "Enver";
$isim2 = $isim1;  //$isim1 değişkenin değeri $isim2 değişkenine atanır. (sadece değer atandı)

$isim3 = "Fırat";
$isim4 = &$isim3; //$isim3 değişkenin adresi $isim4 değişkenine atanır. (aynı adresi gösteriyorlar)

$isim1 = "Engin";
$isim3 = "Muhammet";

echo "isim1 = " .  $isim2  . " isim4 = " . $isim4;






//Php'de ön tanımlı değişkenler


/*

$GLOBALS  : Global değişken tanımlamak için kullanılır.
            Bu sayede local alanda tanımlanmış bir değişkene global alandan erişim imkanı tanınmış olur.

$_SERVER  : Server ile ilgili bilgileri tutar.

$_GET     : Url üzerinden gönderilen verileri tutar.

$_POST    : Kapalı yolla gelen istekler ve form ile gönderilen verileri tutar.

$_REQUEST : Hem get ile hem post ile gelen verileri tutar.

$_FILES   : Yüklenen dosyanın verilerini tutar.

$_COOKIE  : Tarayıcıya yüklenen çerez verilerini tutar.

$_SESSION : Herhangi bir kullanıcı için sunucuda açılan oturum verilerini tutar




*/




//GLOBALS ON TANIMLI DEĞİŞKENİN Kullanımı

function deneme() {


    $GLOBALS["isim"] = "enver";
    $soyisim = "Çelik";

}
deneme();

echo $isim;
//echo $soyisim;   Hata : local alanda tanımlı değişkene global alandan erişilemez.





$gun = "cumartesi";
$GLOBALS["ay"] = "Haziran";
$yil = "2020";

function deneme2() {

    echo $GLOBALS["ay"];
    echo $GLOBALS["yil"]; //kullanım 2

    //echo $ay;      Hata :  ay globals değişkeni ile tanımlanmasına rağmen bu şekilde erişilemiyor.
    //echo $gun;     Hata : Aynı mantık global alanda tanımlı değişkene local alandan erişilemez.

}






//SERVER ON TANIMLI DEĞİŞKENİ : Server ile ilgili tüm değerleri tutan dizidir.

print_r($_SERVER);


















