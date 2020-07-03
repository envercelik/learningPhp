<?php

/*

Operator : Bir veya daha fazla değeri alan ve işlemden geçirip sonucu döndüren karakterlerdir.
           Aldıkları operand saısısına göre tekli ,ikili veya üçlü operatör olarak gruplanırlar.




Bit işlem operatörleri :

$   : ve                    -->  iki operand alır ve karşılıklı bitlerini sırayla karşılaştırır. (her ikisi 1 ken 1 diğer durumlar 0)
|   : veya                  -->
^   : ayrıcalıklı veya      --> (farklı ise 1 aynı ise 0)
~   : değil
<<  : sola kaydır           --> belirtilen değer kadar sağdan sıfır eklenir soldan değer atılır. Kullanım : $a<<2
>>  : sağa kaydır



Mantıksal operatörler :

and :
or  :
xor : ayrıcalıklı veya
!   :
&&  : ve
||  : veya

Not : and ile &&   ve  or ile ||    aralarında fark yoktur. (alternatif)



Atama operatörleri :

=   : atama
.=  : birleştirerek atama
+=  : toplayarak atama
-=  :
*=  :
/=  :
%=  :

&=  : bitsel ve den geçirip atama
|=  :
^=  :
<<= :
>>= :



Karşılaştırma operatörleri :

==  : eşit ise
!=  : eşit değil ise
<>  : eşit değil ise
=== : denk ise              --> "8" == 8 : true        "8" === 8 : false
!== : denk değil ise
<   :
<=  :
>   :
>=  :


Aritmetik işlem operatörler :

+   :
-   :
/   :
*   :
%   :



Arttrıma ve Eksiltme eperatörleri :

++ :
-- :

Not : Değişkenin başına eklenirse önce bir artar veya azalır daha sonra ifade çalıştırılır.
      Değişkenin sonuna eklenirse önce ifade çalıştırılır daha sonra bir artar veya azalır.



Dizi operatörleri :

+   : birleştir --> İki diziyi anahtar değer çifleri ile birleştir. Aynı anahtar varsa ikinci dizinin değeri alınır.
==  : eşit ise  --> İki dizinin tüm anahtarları ce değer çiftleri eşit ise tru değil ise false döner.
=!  : eşit değil ise : aynısının tersi
<>  : eşit deği ise  --> alternatif
=== : denk ise :   anahtarlar aynı değerler aynı  eşittirden faklı olarak sırası da aynı olursa true döner.
!== : denk değil ise: aynısının tersi



Özel operatörler :

.   : birleştirme --> iki değişkeni birleştirir.
,   : ekleme operatörleri -->   birbiri ardına eklenecek değerleri ve işlemleri bildirmek için kullanılır.
`   : değerin komut olarak algılanıp çalıştırılması için kullanılır. kullanım :  `ping -n 3 google.com`;
@   : hata veren ifadenin önüne eklenirse hata görmezden gelinir.
?:  : koşul operatörü Kullanım : $b = ($a=="enver") ? "evet" : "hayır";  //b ye eğer a değişkeni enver ise evet değilse hayır atanır.
??  : null operatörü  Kullanım : $a = $_POST["isim"] ?? "isim yok"; //$_POST["isim"] null değil ise kendisi döner null ise "isim yok döner"
<=> : iki değer eşit ise 0     birinci değer büyükse 1      birinci değer küçükse 0   döner

this: nesneyi işaret eder.
instanceof : bir nesnenin bir sınıfın örneği olup olmadığını kontrol eder. Kullanım : $kisi instanceof $uyeler



Not : operatörler arasında işlem öncelikleri vardır.

*/

echo "8"==8;
echo "8" === 8;
