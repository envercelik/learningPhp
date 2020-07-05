<?php

namespace TEST;

//sabitler daha sonradan değiştirilemez veya tanımsız yapılamazlar.
//Sabitlere her yerden erişilebilir. (kapsama alanına tabi değildir.)
//Sabitlere değişken değerler,sabitler,diziler...atanabilir.
//Sabitlerin tüm harfleri buyuk yazılır (topluluk kuralı)


define("ISIM" , "enver");  //tanımlama
echo ISIM;



//Php'de ön tanımlı sabitler

/*

__LINE__    : satır numarasını döner.

__DIR__     : dosyanın bulunduğu dizini döner.

__FILE__    : dizin + dosya adını döner.

__FUNCTION__: fonksiyonun adını döner.

__CLASS__   : sınıfın adını döner.

__METHOD__  : methodun içinde bulunduğu sınıfın adını döner.

__TRAIT__   : sınıfa miras alınan özellik adını döner.

__NAMESPACE__ : namespace adı döner.



*/


echo __LINE__;
echo __DIR__;
echo __FILE__;
echo __NAMESPACE__;



function test() {

    echo __FUNCTION__;
}
test();




class Test2 {

    public function __construct()
    {
        echo __CLASS__;
    }



    function test3() {

        echo __METHOD__;
    }


}
$test2 = new Test2();
$test2->test3();




//__TRAIT__ kullanımı
trait ozellik{

    function test4() {
        echo __TRAIT__;
    }
}


class Test {
    use ozellik;
}

$test = new Test();
$test->test4();




?>