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
print_r($sonuc);
preg_match_all($desen2  ,$metin,$sonuc);
print_r($sonuc);





/*BELİRLEYİCİLER*/













/*ÖZELLİKLER VE KURALLAR*/

/*AYARLAR */
/*
i : büyük/küçük harf duyarlılığı kaldırır.
u : normalde sadece latin karakterler desteklenir. u ile unicode (evrensel) tanımı eklenir. Bu sayede türkçe karakter
    desteği kazanmış olur.
x : boşluklar etkisiz hale getirilir.
s : birden fazla satır varsa tüm satırlar kontrol edilecek mi

*/

/*KONUM BELİRLEYİCİLER*/
/*
^  : sonda arar.
$  : başta arar.
\b : başta ve sonda arar.
\B : arada arar.
?= : belirtilen ifadenin önündekilerde arama yapar.
?! : belirtilen ifade ile devam etmyen alanda arama yapar.

*/


/*NİCELİK BELİRLEYİCİLER*/
/*
{x} : değer en az x defa tekrarkanıyorsa
{x,} : değer x veya daha fazla tekrarlanıyorsa
{x,y} : değer en az x veya y kere tekrarlanıyorsa
+ : değer 1 veya daha fazla tekrar ediyorsa
* : hiç veya daha fazla
? : ya hiç yada 1 defa



/*ÖZEL BELİRLEYİCİLER*/
/*
()      : grup tanımlar.
(x|y)   : x yada y yi bulur.
(?:)    : alt grup oluşturmak için kullanılır.
\       :
[abc]   : a b ve c karakterlerini yakalar.
[a-z]   : a dan z ye karakterleri yakalar
[^abc]  : a b ve c karakterleri hariç yakalar.
[^a-z]  : a da z ye karakterler hariç yakalar
.       :
\w      : harf-rakam-alt çizgi
\W      : harf-rakam-alt çizgi hariç
\d      : rakam
\D      : rakamlar hariç
\s      : sadece booşluklar
\S      : boşluk dışında kalanlar.


*/

?>