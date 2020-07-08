<?php
/*
//yapı :

function fonksiyonAdı(varsa paramterler){

    return "test"; //gerkliyse geri dönüş değeri
}
fonksiyonAdı(varsa parametreler);    //fonksiyon çağırma

*/





/*FONKSİYON GÖVDESİNDE GLOBAL DEĞİŞKEN KULLANIMI : */


$isim = "Enver Çelik";
$isim2 = "Fırat Çelik";

function test() {

//    echo $isim;   hata : local alandan global alanda tanımlanan değişkene doğrudan erişilemez.
    echo $GLOBALS['isim2'];  //globals süper değişkeni global alanda tanımlanan değişkenleri tuttuğundan eriştik

    global $isim2; //2.yol  : global alanda tanımlanan değişkeni local alana çektik
    echo $isim2;

}
test();





/*ANONİM FONKSİYON*/

//ismi olmayan genellikle tek kullanımlık fonksiyondur.

//örnek ;

$dizi = [ function($item){echo $item;}  ,  function($item){echo $item;} ];

echo $dizi[0]("item1");
echo $dizi[1]("item2");

//anonim fonksiyonu sayfa yüklendiğinde otomatik olarak çağırabiliriz (php 7)
/*
(function() {
    echo "sayfa yüklendi";
})();
*/







/*PARAMETRELERE VARSAYILAN DEĞER ATAMA*/

//Eğer bir paramtereye varsayılan değer atanırsa ve fonksiyona bu parametre gönderilmesse fonksiyon bu varsayılan
//değere göre çalışır.Aksi durumda eksik paramtre nedeniyle hata verirdi.

//Eğer varsayılan parametre atanan değere kendi paramtremizi gönderirsek  fonksiyon gönderdiğimiz değere göre çalışır.


function test2($isim , $soyisim = "Çelik") {

    echo $isim . ' ' . $soyisim;
}

test2("Enver");
test2("Furkan" , "Dündar");







/*SINIRSIZ PARAMETRE*/

//func_num_args();  --> fonksiyona gönderilen parametre sayısını döner.
//func_get_args();  --> gönderilen paramtreleri diziye dönüştürür.
//func_get_arg();   --> belirtilen anahtarın değerini döndürür.



function bilgileriGoster() {

    $parametreSayisi = func_num_args();
    echo $parametreSayisi;

    $parametreler = func_get_args();
    print_r($parametreler);

    echo func_get_arg(0);
    echo func_get_arg(1);
    echo func_get_arg(2);
    echo func_get_arg(3);

}


bilgileriGoster("Enver Çelik" , "İstanbul" , "Bilgisayar Mühendisi" , "devcelikenver@gmail.com" );





/*REFERANSA BAĞLI DEĞER ATAMA*/

$isim = "Enver Çelik";

function isimDegis(&$isim) {

    $isim = "Fırat Çelik";

}

isimDegis($isim);
echo $isim;

// not : eğer paramtrenin adresini göndermesydik isim değişmezdi. (local alan olduğundan)







/*RECURSICE FONKSİYON*/

function say($sayi) {

    if($sayi<25) {
        echo $sayi;
        say($sayi+1);
    }
}
say(1);





/*STATIC DEGISKEN KULLANIMI*/

function skor() {

    static $skor = 0;
    $skor++;

}

skor();
skor(); //skor her çağrıldığında $skor 1 artar . Recursive olmasa 0 olarak kalırdı.







/*YIELD KULLANIMI*/

//return gibi değer döner ama fonksiyon durmaz.

function sayVeDondur($baslangic , $bitis) {

    while ($baslangic <= $bitis) {
        yield $baslangic;
        $baslangic++;

    }
}

$sonuc = sayVeDondur(1,10); //yield generate dizisi döner.

foreach ($sonuc as $deger) {
    echo $deger . " ";
}

//not : değerleri bir diziye depolayıp return ile dönseydik bellek kullanımı yaklaşık 40 kat artardı.












?>