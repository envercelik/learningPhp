<?php

/*
trim()      : sağdan-soldan boslukları \n dahil siler.(sondan-bastan belirtilen karakteri de siler.)
rtrim()     : sadece sağdan bosluklari siler.
ltrim()     : sadece soldan boslukları siler.
not         : html tüm boslukları her zaman tek bosluk olarak algılar ama kaynak koduna baktığımızda ne kadar bosluk
              varsa o kadar bosluk olacaktır. Bu bosluklar veritabanına da aynı şekil kayıt edilir.
*/
$metin = "            Bu akşam ölürüm beni kimse tutamaz. Sen bile tutamassın yıldızlar tutamaz                ";
//echo $metin;
//echo trim($metin);
$metin = "xxxEnver Çelikxxx";
//echo $metin;
//echo trim($metin, "x");




/*
strlen()            : karakter sayısını döner. (karakter seti belirtilmesse türkçe karakterleri 2 sayar.)
mb_strlen()         : belirtilen karakter kodlamasına ait karakter sayısnı döner.
substr_count()      : içerikte belirtilen içeriği arar sayısını döner.
mb_substr_count()   : aynı işi belirtilen karakter setine göre yapar.
str_word_count()    : kelime sayısını döner.
not                 : UTF-8 genel bir karakter setidir. Bir çok ülkenin karakterlerini tanır.
*/
//echo strlen("Enver Çelik"); //11 karakter var 12 çıktısı veriyor. Ç iki sayıldı.
//echo mb_strlen("Enver Çelik" , "UTF-8"); //çıktı : 11

$metin = "Enver arçelik";
//echo substr_count($metin,"e");
//echo substr_count($metin,"e" ,5,6); //5.karakterden başla 6 git

//echo str_word_count($metin); //kelime : 2   çıktı :3  sebeb türkçe karakter.  Kelimeler : Enver ar elik
//echo str_word_count($metin , 0 , "üÜöÖİşŞçÇğĞ"); //0 kelimeler diziye depolansın demektir..





/*
strpos()        : Belirtilen karakterin ilk eşleşme konumunu döner. (string position) - ilk karakterin konumu : 0 dır
mb_strpos()     : mb_ ön eki daima karakter seti tanımlanan versiyondur.

stripos()       : Büyük-küçük harf duyarlılığı yoktur.
mb_stripos()    :

strrpos()       : sondan aramaya başlar.
mb_strrpos()    :

strripos()      : sondan aramaya başlar . Büyük küçük harf duyarlılığı yoktur.
mb_strripos()   :

not             : mb li olmayanlarda türkçe karakterler 2 sayılır.
*/

$metin = "Gecenin nemi mi düşmüş gözlerine - Ne olur ıslak ıslak bakma öyle
          Saçını dök sineme derdini söyle  - Yeter ki ıslak ıslak bakma öyle";

//echo strpos($metin , "e");
//echo strpos($metin , "nemi"); //nemi bulduğunda n nin konumu döner.
//echo strpos($metin ,"ş");
//echo mb_strpos($metin , "ş" , 0 , "UTF-8"); //0: 0 dan basla











