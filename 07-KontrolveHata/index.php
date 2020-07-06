<?php


/*KONTROL YAPILARI*/

//stardart if else
$kosul = true;
if($kosul) {

} else {

}



//tek satırlık parantezsiz kullanım
if($kosul)
    echo "test1";
else
    echo "test2";




//alternatif if-else (birden fazla ifade - parantezsiz)

if($kosul):
    echo "test1";
    echo "test1";
else:
    echo "test2";
    echo "test2";
endif;





//ternary operatörü ile if-else
$deger = ($kosul==0) ? "true" : "false";



//standart - switch-case
switch ($kosul) {

    case 1:
        echo "case 1";
        break;

    case 2:
        echo "case 2";
        break;

    default:
        echo "geçersiz değer";
        break;
}


//parantezsiz-switch case
switch ($kosul):

    case 1:
        echo "case 1";
        break;

    case 2:
        echo "case 2";
        break;

    default:
        echo "geçersiz değer";
        break;

endswitch;









/* HATA DENETİMİ */


//yapı :

try {

    //hata üretebilecek kodlar

} catch (Exception $e) {

    //Hata yakalanırsa çalışacak kodlar

} finally {

    //hata olsada olmasada çalışacak kodlar

}
//not finally bloğu eklenmese de olur.




//kullanım :

try {
    $deger1 = 100;
    $deger2 = 0;

    if($deger2 == 0)
        throw new Exception("Bir sayı 0'a böülenemez");
    echo "Sonuç : " . ($deger1/$deger2);

}catch (Exception $e) {
    echo $e->getMessage();
}




/*HATA RAPORLAMA İŞLEMLERİ*/

//Tüm hatalar log klasörü içerisinde error dosyasında tutulur.

//Eğer istenirse php.ini dosyasından hata raporlama kapatılabilir veya seviyesi ayarlanabilir
//Seviyeler : E_ALL | E_ERROR | E_WARNING | E_PARSE | E_NOTİCE
//not :  | ile birden fazla seçilebilir.

//Bazı sunucular php.ini dosyasına erişin izni vermez bu nedenle
//Alternatif olarak error_reporting(0) ile hata raporlama kapatılabilir veya seviyesi ayarlanabilir.
//örnek : error_reporting(E_WARNING)  --> sadece warningler raporlanır.


error_reporting(0); //tüm hatalar kapalı : fatal error bile raporlanmaz.
deneme(); //olmayan fonksiyon çağırma - fatal error
trim();   //parametresi eksik fonksiyon - warning
//$ deneme = "deneme"; //parse error
echo $degisken; //olmayan değişkeni bastırma - notice

//not : fatal-error  ve parse-error kodların okunmasını durdurur.

error_reporting(E_ALL ^ E_NOTICE); //notice hariç tüm hataları raporla


//hata denetim operatörü : @  --> fatal-error ve parse-error hariç hatanın ekrana basılmasını ve raporlanmasını engeller

echo @$test;  //test diye bir değişken yok ama notice gösterilmez.





?>