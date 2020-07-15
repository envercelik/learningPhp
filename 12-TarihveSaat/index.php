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



/*
date_create();      : Bir tarih dizisi nesnesi döner. Not nesne dizisinin elemanlarına anahtar ile ulaşılamaz.
                      foreach döngüsü ile ulaşılabilir. (ilginç bir yapısı var yani)
                      Not : parametre vermessen anlık zamanı alır.
*/
$Tarih = date_create(1996-12-23);
//print_r($Tarih);




/*
date_date_set();        : tarih nesnesini yeni bir tarih ile set eder.
*/
date_date_set($Tarih , 2018,8,5);




/*
date_time_set($Tarih,10,10,10);     : tarih nesnesinin saatini set eder.
*/
date_time_set($Tarih,10,10,10);




/*
date_timestamp_get();       : bir tarih nesnesinin tarih-saat ini zaman damgası olarak döner.
*/
//echo date_timestamp_get($Tarih);




/*
date_timestamp_set();       : bir tarih nesnesinin tarihini zaman damgasına göre set eder.
*/
date_timestamp_set($Tarih , 1533453010);




/*
date_create_from_format();      : belirtilen biçime göre tarih nesnesi döner.
*/
$tarih = date_create_from_format("d-m-Y" , "08-12-1980"); //biçim değiştirilebilir.




/*
date_format();      : daha önceden oluştrulmuş tarih nesnesinin formatını değiştirir.
*/
date_format($tarih , "d.m.Y H:i:s");




/*
date_modify();                                  : tarihin üzerine tarih ekler (bildiğimiz toplama)
date_add();                                     : aynısı (alttaki uzun isimli fonksiyonu kullanır.)
date_interval_create_from_date_string();        :
*/
/*
$date = date_create("12-23-1996");
date_modify($date, "+1 year");
date_modify($date, "+2 month");
date_modify($date, "+3 day");
date_modify($date, "+12 hour");
date_modify($date, "+45 minutes");
date_modify($date, "+5 second");

date_add($tarih , date_interval_create_from_date_string("+3 hour"));
*/



/*
date_diff();        : iki tarih arasındaki farkı alır yeni bir tarih nesnesi döner.
format();           : date_diff() methodunun olusturdupu tarihi berlirten formata göre formatlar.
*/
$tarih1 = date_create("1996-12-22");
$tarih2 = date_create("2020-7-15");
$tarih = date_diff($tarih1,$tarih2);
$tarih = $tarih->format("%y yıl %m  ay %d  gun   "); //iki tarih arasındaki fark
echo $tarih;
