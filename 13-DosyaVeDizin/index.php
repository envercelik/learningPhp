<?php

/*
include()       : yolu belirtilen dosyanın içeriğini sayfaya dahil eder.
include_once()  : dosya içeriği daha önce sayfaya dahil edilmişse tekar dahil etmez.
require()       : yolu belirtilen dosyanın içeriğini sayfaya dahil eder.
require_once()  : dosya içeriği daha önce sayfaya dahil edilmişse tekar dahil etmez.

include - require farkı : include ile veri çekerken hata olursa sayfa okunmaya devam eder.
                          require ile veri çekerken hata olursa sayfa okunmaya devam etmez.

Not : parantez kullanımı zorunlu değildir.
*/
//include "dizin/dosya.txt";




/*
basename();     : Dosya adını döner.
dirname();      : Kaynağın dizin yolunu döner.
pathinfo();     : Hem dizin yolunu hem dosya adını dizi olarak döner.
realpath();     : Kaynağın mutlak yolunu döner.
*/

//echo basename("dizin/dosya.txt");
//echo dirname("dizin/dosya.txt");
//print_r(pathinfo("dizin/dosya.txt"));
//echo realpath("dizin/dosya.txt");





/*
filetype();     : Dosya mı ? Dizin mi ? (dir:dizin file:dosya)
fileowner();    : Dosya sahibini bilgisini döner.
filegroup();    : Dosya sahibinin grubu  bilgisini döner.
fileinode();    : Dosya düğüm numarasını döner.
fileperms();    : Dosya erişim izni bilgisini döner.
filesize();     : Dosya boyut bilgisini döner.
filectime();    : Dosya oluşturulma tarihini döner.
filemtine();    : Dosya değiştirilme tarihini döner.
fileatime();    : Dosya son erişim tarihini döner.
*/
//echo filetype("dizin");
//echo fileowner("dizin/dosya.txt");
//echo fileinode("dizin/dosya.txt");
//echo fileperms("dizin/dosya.txt");
//echo filesize("dizin/dosya.txt") . " byte";
//echo "Oluşturma : " . date("d.m.Y H:i:s" , filectime("dizin/dosya.txt"));
//echo "Oluşturma : " . date("d.m.Y H:i:s" , filemtime("dizin/dosya.txt"));
//echo "Oluşturma : " . date("d.m.Y H:i:s" , fileatime("dizin/dosya.txt"));







?>




