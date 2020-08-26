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
//include "Belgeler/belge1.txt";






/*
basename();     : Dosya adını döner.
dirname();      : Kaynağın dizin yolunu döner.
realpath();     : Kaynağın mutlak yolunu döner.
pathinfo();     : Hem dizin yolunu hem dosya adını dizi olarak döner.
*/

$yol    =   "Belgeler/belge1.txt";
//echo basename($yol);
//echo dirname($yol);
//echo realpath($yol);
//print_r(pathinfo($yol));






/*
filetype();     : Dosya mı ? Dizin mi ? (dir:dizin file:dosya)
fileowner();    : Dosya sahibini bilgisini döner.
filegroup();    : Dosya sahibinin grubu  bilgisini döner.
fileinode();    : Dosya düğüm numarasını döner.
fileperms();    : Dosya erişim izni bilgisini döner.
filesize();     : Dosya boyut bilgisini döner.
filectime();    : Dosya oluşturulma tarihini döner.
filemtime();    : Dosya değiştirilme tarihini döner.
fileatime();    : Dosya son erişim tarihini döner.
*/

//echo filetype($yol);
//echo fileowner($yol);
//echo fileinode($yol);
//echo fileperms($yol);
//echo filesize($yol) . " byte";
//echo "Oluşturma : " . date("d.m.Y H:i:s" , filectime($yol));
//echo "Değiştirilme : " . date("d.m.Y H:i:s" , filemtime($yol));
//echo "Son Erişim : " . date("d.m.Y H:i:s" , fileatime($yol));





/*
stat()              : belirtilen dosyanın bilgilerini döner.
fstat()             : stat() ile aynı ama dosyanın öncesinde fopen() ile açılması gerekir.
clearstatecache()   : stat() veya fstat() ile ön belleğe alınmış bilgileri temizler.
*/
//print_r(stat($yol));







/*
touch() : yeni dosya oluşturur. Sonucu boolean olarak döner. (belirtilen dizinde aynı isimde dosya varsa yeni dosya oluşmaz.)
unlik() : dosya siler
copy()  : dosya kopyalar
rename(): dosya adını değiştirir veya dosyayı taşır.
*/

//touch("Belgeler/belge2.txt");
//unlink("dizin/dosya.txt");
//copy($yol ,"/dizin");







/* izin işleri :

u : dosya sahibi
g : dosya sahibi ile aynı grupta olanlar
o : diğer kullanıcılar

r : okuma           değer : 4
w : yazma           değer : 2
x : çalıştırma      değer : 1

4+2+1 = 7 : okur-yazar-çalıştırır
4+2 = 6   : okur-yazar-çalıştıramaz

örnek : 0777   1. yedi : dosya sahinin izinlerini
               2. yedi : dosya sahibi ile aynı grupta olanların izinlerini
               3. yedi : diğer kullanıcıların izinlerini belirtir.

chmod() : izinleri ayarlayan fonksiyon.

*/

$izinler = fileperms($yol);
//echo $izinler; //çıktı chmod cinsinden ifade edilmeli

//dosya izinlerini chmod tipine dönüştürme
$izinler = sprintf("%o" , $izinler); //8 lik sayı sitemine dönüştürür.
$izinler = substr($izinler , -4);   // son 4 hanesini alır.
//echo $izinler;


//dosyanın izinlerini değiştirelim
chmod($yol , 0777);


//dosyanın izinlerini kontrol edelim
$izinler = fileperms($yol);
$izinler = sprintf("%o" , $izinler);
$izinler = substr($izinler , -4);
//echo $izinler;

// Not : chmod() local sunucuda çalışmayabilir.(işletim sistemi dosya izni değiştirmeye izin vermeyebilir.)






/*
mkdir() : dizin oluşturur.
rmdir() : dizin siler.
*/






/*
scandir() : belirtilen dizinde bulunan tüm alt dizin ve  dosya isimlerini döner.
glob()    : aynı işi belirtilen kalıba göre yapar. parametrelere göre listeleme şekillendirilir.
*/

//print_r(scandir("./"))   //  ./  bulunulan dizin anlamına gelir.

//print_r(glob("*"));  //tüm dosya ve dizinler (bulunulan dizinde)
//print_r(glob("Resimler/*"))  //Resimler dizininde ki tüm dosyalar ve  dizinler.
//print_r(glob("/*"))  //kök klasörde bulunan tüm dizin ve dosyaları listeler.
//print_r(glob("./Resimler/*.jpg"));  //resimler altında sadece .jpg uzntılı olanları dön.
//print_r(glob("*.jpg"));  //bulunulan dizindeki tüm jpg uzantılı dosya uzantılarını dön.
//print_r(glob("./Resimler/*.{jpg,txt}"));  //birden fazla dosya uzantısı belirtme
//print_r(glob("./Resimler/A*"));  //A harfi ile başlayanları dön.





/*
getcwd() :  bulunulan dizin yolunu döner.
chdir()  : çalışma dizinini değiştirir.
*/
//echo getcwd();
//chdir("Resimler");
//echo getcwd();




/*
opendir()   : Dizini açar verileri belleğe depolar.
readdir()   : opendir() ile belleğe depolanan verileri okur.
closedir()  : opendir() ile açılıp belleğe alınan dizini kapatarak belleği boşaltır.
*/

//$dizin = "./";
//$dizinAc =  opendir($dizin);
//while(($oku = readdir($dizinAc)) != false) {
//    echo $oku . "<br>";
//}
//closedir($dizinAc);





/*Dosya Açma okuma yazma kapama işlemleri

Modlar :
r   : okuma
r+  : okuma-yazma
w   : yazma (dosyanın içeriğini boşaltır. Dosya yoksa oluşturur.)
w+  : okuma-yazma
a   : yazma (dosyanın içeriğini boşaltmaz.)
a+  : okuma-yazma
x   : yazma (Dosya yoksa oluşturmaz hata döner.)
x+  : okuma-yazma

fopen()     : Dosya veya url i belirtilen modda açar.
feof()      : dosya sonuna gelinip gelinmediğini kontrol eder.
fgets()     : satır satır okuma
fgetc()     : karakter karakter okuma
fread()     : belirtilen karakter kadar okuma yapar.
fpassthru() : Tüm içeriği tek seferde alır. Tek satır olarak alır. \n (alt satır) bosluk olarak alır.
              Sonuna karakter sayısını ekler.

fwrite()    : dosyaya yazar.
fputs()     : dosyaya yazar. Aynısı
ftruncate() : dosya içeriğini belirtilen karakterden sonra siler


Not: okuma yapıldıkça cursor ilerler.

ftell()     : cursor konumunu döner.
fseek()     : cursor konumu değiştirir.
rewind()    : cursor başlangıç konumana döner.

fclose()    :   fopen() ile açılan dosya veya url i kapatır.
*/


$dosya  =   fopen($yol ,"a+" );
//echo fgetss($dosya);

//fputs($dosya , "Dünyaya geldiğim anda Yürüdüm aynı zamanda");
//echo fgetss($dosya);
//rewind($dosya);
//echo fgetss($dosya);
//echo fgetss($dosya);
//rewind($dosya);
//echo fgetc($dosya);
//echo fread($dosya , 10); //tükçe karakterler ve tırnak 2 karakter sayılır.
//fwrite($dosya , "\nİki kapılı bir handa \n Gediyorum gündüz gece");
//ftruncate($dosya , 10);

//tüm içeriği satır satır yazma
/*
rewind($dosya);
while (!feof($dosya)) {

    $satir = fgets($dosya);
    echo $satir . "<br>";
}
*/

fclose($dosya);





/*
file()      : dosyayı satır satır okur ve dizi olarak geri döner. (her dizi elemanı bir satır.)
readfile()  : dosyayı tek seferde okur.Karakter sayısını sonuna ekleyip string olarak döner.

Not : fgets ten farklı olarak dosyalara download özelliği eklenebilmesidir.Ayrıca dosyanın fopen ile açılmasına gerek yoktur.
*/

//$dosya = file($yol);
//print_r($dosya);

/*
$dosya  = file("https://github.com");
foreach ($dosya as $satir) {

   echo htmlspecialchars($satir) . "<br/>";
}
*/

/*
$dosya = readfile($yol);
echo $dosya;
*/


/*
//indirilebilir dosya

header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=".basename($yol));
header("Content-Transfer-Encoding: binary");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: public");
header("Content-Length: ".filesize($yol));
ob_clean();
flush();
readfile($yol);
*/

/*
//Bir internet sayfasını bir html dosyaya yazma
$URLAdresi		=	"https://www.sahibinden.com";

$URLOku			=	file($URLAdresi);

$Icerik			=	"";

foreach($URLOku as $Deger){
    $Icerik		.=	$Deger;
}

$Dosya			=	"Ornek.html";
$DosyaAc		=	fopen($Dosya, "w");

$Sonuc			=	fwrite($DosyaAc, $Icerik);

if($Sonuc>0){
    echo $URLAdresi . " adresi içeriği " . $Dosya . " dosyasına başarıyla yazıldı.";
}else{
    echo $URLAdresi . " adresi içeriği yazma işlemi sırasında hata oluştu.";
}

fclose($DosyaAc);
*/






/*
file_get_contents()     : dosya okuma (herşey otomatik - açma-kapama-hafızadan silme)
file_put_contents();    : dosya yazma
FILE_APPEND             : içerik silinmeden devamına yazılması için paramtre

*/

//echo file_get_contents($yol);
//file_put_contents($yol , "\nİki kapılı bir handa\nGediyorum gündüz gece",  FILE_APPEND);
//echo file_get_contents($yol);





/*
fgetcsv()   : csv uzantılı dosyası okur. (exel dosyası)
fputcsv()   : csv uzantılı dosyaya yazar.
*/
/*
$dosya  = fopen("Kitap1.csv" , "a+");
fputcsv($dosya ,["Muhammet","Çelik","05515554411","yok"] , ";");

while ($icerik =fgetcsv($dosya)) {
    echo $icerik[0] . "<br>";
}
*/







?>




