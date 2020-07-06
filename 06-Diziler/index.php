<?php

$dizi1 = [];        //tanımlama 1
$dizi2 = array();   //tanımlama 2



/*DİZİ TANIMLAMA VE DEĞER ATAMASI*/

//dizi oluştururken değer atama
$isimler =  ["isim1" => "Enver Çelik" ,  "isim2" => "Fırat Çelik" ,  "isim3" => "Engin Çelik"];

$isimler2 = array("isim1" => "Enver Çelik" , "isim2" => "Fırat Çelik" , "isim3" => "Engin Çelik");

//not : key verilmeyen dizi elemanlarına php otomatik olarak 0 dan başlayarak key atar.
//      (sırayla : ilk anahtarsız değere 0 sonrakine 1 ... şeklinde devam eder.)



//sonradan değer atama
$sehirler = [];
$sehirler2 = array();

$sehirler[] = "İstanbul";
$sehirler[] = "Ankara";
$sehirler["şehir3"] = "Bursa";  //anahtar ile değer atama
$sehirler[0] = "Eskişehir"; //güncelleme


$sehirler2[] = "Bursa";
$sehirler2[] = "Eskişehir"; //eklenen elaman daima dizinin sonuna eklenir.


//alternatif tanım ve atama
$aylar[] = "Ocak";
$aylar[] = "Şubat";








/*DİZİLERİN BASTIRILMASI*/
print_r($isimler); //tüm dizi basılır
echo $isimler['isim3']; //isetenen değer basılır.







/*DİZİLERİN BİRLEŞTİRİLMESİ*/

$renkler1 = ["renk1" => "sarı" , "renk2" => "kırmızı"];
$renkeler2 = ["renk3" => "siyah" , "renk4" => "beyaz"];
$renkeler = $renkler1 + $renkeler2;
//not: eğer aynı anahtara sahip iki değer varsa ikinci dizinin değeri alınır.

//Not dizi değişkenleri referanstır.
$renkler1 = $renkeler2; //artık renkler1  dizisi renkler2 dizisini gösteriyor(değerler kopyalanmadı)








/*ÇOK BOYUTLU DİZİLER*/

$kategoriler = [

    'Kategori1' => [

        'item1',
        'item2',


        'Kategori1_kategori1' => [

            'item1',
            'item2',
            'item3'
        ]


    ],



    'Kategori2' => [

        'item1',
        'item2',
        'item3',
        'item4'

    ]

];


echo $kategoriler['Kategori1'][0];  //item1
echo $kategoriler['Kategori1']['Kategori1_kategori1'][1];  //item2
