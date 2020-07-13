<?php

/*GİRİŞ*/
/*
Düzenli ifadeler (Regular expressions) : Bir string kümesini ifade eden desendir. Kullanım amacı ise elimizdeki
                                         stringin bu desene uygunluğunu sınamaktır. Bu sayade bir ifade ile
                                         bir stringin bir kümeye ait olup olmadığı kontrol edilir.



Örneğin : formdan gelen email verisi gerçekten email mi ? Bir düzenli ifade ile bunun kontrolü yapılabilir.
          Yorumlarda gelen küfürler filtrelenebilir.



Bazı Fonksiyonlar :

                    preg_matc()       : bir stringde belirtilen string ile eşleşen ilk değeri dizi olarak döner.
                    preg_match_all()  : tüm eşleşenleri döner.
                    preg_filter()     : eşleşen değerleri değişitiri dizi olarak döner.
                    preg_replace()    : aynısı
                    preg_split()      : her eşleştiği yerden boler. Eşleşen değer silinir. Sonucu dizi olarak döner.
                    preg_grep()       : bir dizide desen içeriği olan dizi elmanlarını alır. Yeni dizi olarak döner.
                    preg_quote()      : özel karakterlerin önüne \ ekler.

*/



$metin = "Napıyorsun lan fay da sız it";

$desen = "/it/";   //desenin olşturduğu küme : {it}
                   //not : // desenin başlangıç ve bitişini bellirtiyor. (istenen karakter çifti kullanılabilir.)


preg_match($desen , $metin , $sonuc);
if($sonuc)
//    echo "Dede dede bu bana fay da sız $sonuc[0] diyor.";
echo "<br><br>";


$metin = "bir berber bir berber e gel beraber bir berber dükkanı açalım demiş";
$sonuc = preg_filter('/berber/' , 'tüpçü' , $metin);
//echo $sonuc;



$desen = "/\w/";   //desenin oluşturduğu küme {tüm harfler , rakamlar , altçizgi}
preg_match_all($desen , $metin , $sonuc); //metnin bu kümede olan değerleri
//print_r($sonuc);





/*AYARLAR*/


// i :  büyük/küçük harf duyarlılığını kaldırır. (m ve M artık aynı harftir.)
$metin = "Merhaba benim adım EnVer";
$desen = '/Enver/i';
preg_match($desen,$metin,$sonuc);
//print_r($sonuc);



//u :  unicode desteği sağlar. (türkçe karakter sorununu da çözer)
$metin = "Enver çelik";
$desen1 = "//";
$desen2 = "//u";
$sonuc = preg_split($desen1 ,$metin);
//print_r($sonuc);
$sonuc = preg_split($desen2,$metin);
//print_r($sonuc);



//x : desendeki boslukllari kaldirir.
$metin = "Merhaba ben enver";
$desen = "/e n v e r/x";
preg_match($desen,$metin,$sonuc);
//print_r($sonuc);




//s : içerikte birden fazla satır varsa tek satır olarak kontrol et. (S : satır baslarını dahil etme \n <br> gibi)

$metin = "Merhaba 
          benim
          adım
          enver ";

$desen1 = "/.*/"; //ne gelirse gelsin
$desen2 = "/.*/s";
preg_match_all($desen1  ,$metin,$sonuc);
//print_r($sonuc);
preg_match_all($desen2  ,$metin,$sonuc);
//print_r($sonuc);







/*BELİRLEYİCİLER*/

//  ^ : aranan metnin başındaysa yakalar.

$metin1 = "php betik bir dildir.";
$metin2 = "web siteleri  php ile dinaik hale gelir. ";
$desen = "/^php/";
preg_match($desen , $metin1 , $sonuc);
//print_r($sonuc);



//  $ : aranan metnin sonundaysa yakalar.

$metin1 = "php betik bir dildir.";
$metin2 = "web sitelerini dinamik hale gitren dil php";
$desen = "/php$/";
preg_match($desen , $metin2 , $sonuc);
//print_r($sonuc);



//  \b : metindeki kelimeleri tek tek ara. aranan desen kelimelerin başında veya sonudaysa yakala.
//  \B : ortada ise yakalar.

$metin1 = "Benim adım enver ve ben bir mobil app geliştiricisiyim.";
$metin2 = "Benim adım enverxx ve ben bir mobil app geliştiricisiyim.";
$desen1 = "/\bver/"; //basında arar
$desen2 = "/ver\b/"; //sonunda arar.
$sonuc = preg_match($desen2 , $metin1);
//print_r($sonuc);




//  ?=  :  devamında belirtilen ifade gelirse yakalar
//  ?!  : devamında belirtilen ifade gelmeyenleri yakalar.

$metin = "php yaygın kullanılan bir programlama dilidir. php'yi kolayca öğrenebilirsiniz.";
$desen = "/php(?='yi)/";  //sadece 'yi ile devam eden php kelimlerini yakalar.
preg_match($desen , $metin , $sonuc);
//print_r($sonuc);



//{x} :  // x kadar tekrar ediyorsa yakalar.
$metin = "- Ben enver -- kodlamayı severim --- bisiklet sürmeyi severim";
$desen = "/-{3}/"; //3 kere tekrar eden tire leri yakala
preg_match($desen , $metin , $sonuc);
//print_r($sonuc);

//not : {x,}  --> x kere veya daha fazla tekrar ediyorsa
//      {x,y] --> en az x en fazla y kere tekrar ediyorsa
//      +     --> bunların yerine + kullnılırsa 1 veya daha fazla tekrar ediyorsa yakalar.
//      *     --> 0 veya daha fazla varsa yakalar.
//      ?     --> 0 yada 1 defa tekrarlanıyorsa yakalar.




//  ()      : grup tanımlar.
//  (x|y)   : x veya y olanları yakala

$metin = "furkan ovaz ve serkan  dündar arkadaştır. ";
$desen = "/(fur|ser)kan/"; //furkan-serkan-fur-ser
preg_match_all($desen,$metin,$sonuc);
//print_r($sonuc);



//?:    : alt grup oluşturur. Gruptan fakı grup içindeki değerler depolanmaz.
$desen = "/fur(?:kan)/";
preg_match_all($desen,$metin,$sonuc);
//print_r($sonuc);


//    \  : desende kendisinden sonra gelen karakterin fonksiyonel özelliğini yok eder.

$metin = "2+2 = 4";
$desen = "/\+/"; //+ nin belirleyici özelliği kaldırıldı.
preg_match($desen,$metin,$sonuc);
//print_r($sonuc);





/*
[x]    : belirtilen karakterleri tek tek yakalar. [mel] tüm m e l karakterlerini yakaklar.
[^x]   : belirtilen karakterler hariç yakalar.  [^mel] tüm m e l karakterleri hariç yakalar.

[x-y]  : karakter aralığı belirtir.[a-z] a dan z ye yakalar
[^x-y] : belirtilen karakter aralığı hariç yakalar. [^a-z]  a dan z ye hariç yakalar.

*/
$metin = "Merhaba benim adım enver";
$desen = "/[mel]/";
preg_match_all($desen , $metin , $sonuc);
//print_r($sonuc);

$desen = "/[a-z]/";
preg_match_all($desen , $metin , $sonuc);
print_r($sonuc);




//   .  : yeni satır hariç herşeyi yakalar.
//   \w  : harf-rakam-altçizgi
//   \W  : harf-rakam-altçizgi hariç
//   \d  : sadece rakamlar
//   \D  : rakamlar hariç
//   \s  : boslukları yakalar
//   \S  : bosluklar hariç







/*YAYGIN KULLANILAN ÖRNEK DESENLER*/









?>