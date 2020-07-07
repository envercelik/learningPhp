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















?>