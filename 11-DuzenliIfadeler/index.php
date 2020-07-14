<?php

/* GİRİŞ */
/*
Düzenli ifadeler (Regular expressions) :

-Bir string kümesini ifade eden desendir. Kullanım amacı ise bir metin de , bir desenin kurallarına uyan, yani desenin
oluşturduğu kümede olan alt metinleri yakalamak ve ihtiyaca uygun kullanmaktır.

-Örneğin olası tüm mail adreslerini ifade eden bir desen ile bir metindeki tüm mail adresleri yakalanabilir.
 Bu desen yazılırken aşağıdaki yöntem izlenebilir.

örnek mail : enver@gmail.com

- @ ve . kesinlikle olmalıdır. Bu belirtilir. (bir mailin değişmeyen yapısı)
- @ den once olamayacak karakterler - olabilecek karakterler ve olabilecek min-max karakter sayısı belirtilir
- @ ile . arasında (domain) aynı yöntem izlenir.
- . dan sonra (uzantı) aynı yöntem izlenir.



Bazı Fonksiyonlar :

preg_matc()       : bir stringde belirtilen string ile eşleşen ilk değeri dizi olarak döner.
preg_match_all()  : tüm eşleşenleri döner.
preg_filter()     : eşleşen değerleri değişitiri dizi olarak döner.
preg_replace()    : aynısı
preg_split()      : her eşleştiği yerden boler. Eşleşen değer silinir. Sonucu dizi olarak döner.
preg_grep()       : bir dizide desen içeriği olan dizi elmanlarını alır. Yeni dizi olarak döner.
preg_quote()      : özel karakterlerin önüne \ ekler.


not : // ile bir desenin başlangıç ve bitişi belirtilir. (istenen karakter çifti kullanılabilir)

*/



$metin = "Napıyorsun lan fay da sız it";
$desen = "/it/";   //desenin olşturduğu küme : {it}
preg_match($desen , $metin , $sonuc);
if($sonuc)
//    echo "Dede dede bu bana fay da sız $sonuc[0] diyor.";
echo "<br><br>";



$metin = "bir berber bir berber e gel beraber bir berber dükkanı açalım demiş";
$desen = "/berber/";
$sonuc = preg_filter($desen , 'tüpçü' , $metin);
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
//print_r($sonuc);




//   .  : yeni satır hariç herşeyi yakalar.
//   \w  : harf-rakam-altçizgi
//   \W  : harf-rakam-altçizgi hariç
//   \d  : sadece rakamlar
//   \D  : rakamlar hariç
//   \s  : boslukları yakalar
//   \S  : bosluklar hariç







/* ÖRNEK DESENLER */

//html taglarını temizleme
$metin = "<span style='color: aqua'>Enver Çelik</span>";
$desen = "/<\/?[^>]+>/";
$sonuc = preg_replace($desen ,""  , $metin);
//echo $sonuc;



//telefon numarası yakalama
$metin = "Merhaba benim adım Enver Çelik bana 0551 000 00 00 numaralı telefondan ulaşabilirsiniz veya ulaşamayabilirsinizde 05517890000";
$desen = "/\s?0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2}\s?/";
preg_match_all($desen , $metin , $sonuc);
//print_r($sonuc);



//doğum tarihi numarası yakalama
$metin = "Merhaba benim adım Enver Çelik ben 02.06.2020 doğumluyum";
$desen = "/ \d{1,2}\.\d{1,2}\.\d{4} /";
preg_match_all($desen , $metin , $sonuc);
//print_r($sonuc);



//plaka numarası yakalama
$metin = "Merhaba benim adım Enver Çelik 34 XXX 34 benim aracımın plakasıdır. Arkadaşının aracının plakası 01 AA 1887 ";
$desen = "/ \d{1,2}\s?[A-Z]{1,3}\s?\d{2,4} /";
preg_match_all($desen , $metin , $sonuc);
//print_r($sonuc);



//url yakalama (hertürlü url i yakalar)
$metin = "Merhaba benim sitem http://www.envercelik.com dur. ";
$desen = "/ (http(s)?:\/\/.)?(www\.)?[a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]{2,256}\.[a-z]{2,6}\b([a-zA-Z0-9\.\:\+\-\_\#\=\%\~\@]*)+ /";
preg_match_all($desen , $metin , $sonuc);
//print_r($sonuc);



//mail yakalama
$Deger		=	"Merhaba Benim Adım Enver Çelik devcelikenver@gmail.com Adresi Benim Mail Adresimdir.";
//$Desen		=	"/ (\w+)@([a-z]+)\.([a-z]{2,})(.[a-z]{2}|) /"; // GRUP OLDUĞU İÇİN HER BİR ARAMAYI TEK TEK BULUR.
$Desen		=	"/ \w+@[a-z]+\.[a-z]{2,}(.[a-z]{2}|) /";
preg_match($Desen, $Deger, $Sonuc);
//print_r($sonuc);



//gelişmiş mail yakalama deseni (mail kaçamaz - mail olmayan giremez)
$Deger		=	"Merhaba Benim Adım Enver Çelik devcelikenver@gmail.com Adresi Benim Mail Adresimdir.";
$Desen		=	"/\s+(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))\s+/";
preg_match($Desen, $Deger, $Sonuc);
print_r($sonuc);

?>


