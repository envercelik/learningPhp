<?php

/*

-php'de ekrana çıktılama yapmak için kullanılan komutlar ve fonksiyonlar .

echo     :
echo()   :
print    :
print()  :

//hepsi aynı işi yapar. Aralarında bir fark yoktur.

*/




echo "enver çelik";
echo 'enver çelik';
echo 8;
echo 8.5;
echo "8.50";
echo 'Enver\'in arabası';
echo "Enver'in arabaı";  //alternatif çözüm
echo "Enver\"in arabası";
echo 'Enver"in arabasi'; //alternatif çözüm

//not : bir string içerisinde \ karakteri kendindenen sonra gelen ilk karakterin fonksyonel özelliğini yok sayar.

//not : tek tırnaklar içerisinde değişkenin değeri değil kendisi basılır.
//      çift tırnaklar içerisinde ise değeri basılır.

$isim = "enver";

echo 'Benim adım $isim';
echo "Benim adım $isim";

echo "Benim adım {$isim}";  //okunurluğu arttırır . Ekrana basılmaz.



//stringler virgül ile ayrılabilir
echo "benim" ,"adım " ,"enver"; //her vigul : ; echo anlamıondadır.


//echo fonksiyonu  , print komut ve fonksiyonu : (herşey aynı)
echo("enver");
print "enver";  //print komutu
print("enver"); //print fonksiyonu








//echo komutunun kısayolu = echo anlamında gelir. (kısa tag)
?>
<?="Benim adım enver"  ?>




