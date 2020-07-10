<?php

/*

Düzenli ifadeler (Regular expressions) : Bir string kümesini ifade eden desendir. Kullanım amacı ise elimizdeki
                                         stringin bu desene uygunluğunu sınamaktır. Bu sayade bir ifade ile
                                         bir stringin bir kümeye ait olup olmadığı kontrol edilir.


Örneğin : formdan gelen email verisi gerçekten email mi ? Bir düzenli ifade ile bunun kontrolü yapılabilir.
          Botlar bir siteden çektiği veriyi düzenli ifadeler ile filtreler.
          Yorumlarda gelen küfürler filtrelenebilir.


Not : preg_matc()       : bir stringde belirtilen string ile eşleşen ilk değeridizi olarak döner.
      preg_match_all()  : tüm eşleşenleri dönerç

*/



$metin = "Napıyorsun lan fay da sız it";

$desen = "/it/";   //desenin olşturduğu küme : {it}
                   //not : // desenin başlangıç ve bitişini bellirtiyor. (istenen karakter çifti kullanılabilir.)


preg_match($desen , $metin , $sonuc);
//print_r($sonuc);

if($sonuc[0] == "it")
    echo "Dede dede bu bana fay da sız $sonuc[0] diyor.";
echo "<br><br>";






$desen = "/\w/";   //desenin oluşturduğu küme {tüm harfler , rakamlar , altçizgi}
preg_match_all($desen , $metin , $sonuc); //metnin bu kümede olan değerleri
print_r($sonuc);














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