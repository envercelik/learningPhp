<?php

/*
Php'de tüm tarih ve zaman işlemleri 1 ocak 1970'den beri işleyen toplam saniye değerine göre belirlenir.
Bu saniyenin anlık değerine zaman damgası denir.
*/




/*
time();             : zaman damgasını döner.
*/
//echo time();




/*
microtime();        : zaman damgasını saliseler ile döner. (boşluktan önceki kısım salisedir.)
*/
//echo microtime();




/*
mktime();           : belirtilen tarihin zaman damgasını döner.
*/
//echo mktime(10,10,10,12,23,1996);




/*
date();             : parametreye göre biçimli anlık tarih bilgisi döner.
*/
//echo "Yıl           :" . date("Y");
//echo "Tarih         :" . date("d m Y");
//echo "Tarih-zaman   :" . date("d m Y H i s");
//echo "Açık tarih    :" . date("d F Y l");
//echo "Zaman damgası :" . date("U");




/*
date_default_timezone_get();        : Geçerli zaman dilimini döner.
*/
//echo "Zaman Dilimi : " . date_default_timezone_get();




/*
timezone_identifiers_list();        : Tüm zaman dilimlerinin listesini döner.
*/
//print_r( timezone_identifiers_list() );




/*
date_default_timezone_set();        : Geçerli zaman dilimini verilen zaman dilimine göre set eder.
*/
date_default_timezone_set("Europe/Istanbul");




/*
getdate();       : Anlık zaman bilgilerini dizi olarak döner. (son değer zaman damgasıdır.)
*/
//print_r( getdate() );




/*
localtime();        : Anlık yerel zaman bilgilerini dizi olarak döner.
*/
$Zaman = localtime();
//print_r($Zaman);
//echo "Yıl : " . $Zaman[5] . " (Yılın başlangıcı 1900 olarak kabul edilir ve değer 1900 yılından sonra kaç yıl geçtiğidir.) <br />";
//echo "Ay : " . $Zaman[4] . " (Bu değer 0'dan başlar. Ocak : 0, Şubat : 1, ... şeklinde Aralık : 11'e kadar devam eder.)<br />";
//echo "Gün : " . $Zaman[3] . "<br />";
//echo "Saat : " . $Zaman[2] . "<br />";
//echo "Dakika : " . $Zaman[1] . "<br />";
//echo "Saniye : " . $Zaman[0] . "<br />";
//echo "Bugün yılın " . $Zaman[7] . ". günüdür.<br />";
//echo "Bugün haftanın " . $Zaman[6] . ". günüdür.<br />";
//echo "Yaz saati uygulaması " . $Zaman[8] . " (1 veya 0)<br />";




/*
localtime($zamanDamgası , true);        : aynısı sadece dizinin anahtar değerleri de vardır.
*/
//print_r(localtime(time() , true));




/*
gettimeofday()                 : ortaya karışık bir şeyler dönüyor :)
*/
//print_r( gettimeofday() );









