<?php
    // $ogrenciler=array("ali", "ayşe", "ahmet", "deniz", "mehmet")    ;

    // foreach($ogrenciler as $ogrenci){
    //     echo $ogrenci."<br>";
    // }

    // $urunler=array(
    //     array("iphone14", 30000),
    //     array("iphone15", 40000),
    //     array("iphone16", 50000),
    // );
    // foreach($urunler as $urun){
    //     echo $urun[0]." ".$urun[1]."<br>";
    // }


    $urunler=array(
        "100" => array(
            "urun_adi" => "iphone 14",
            "fiyat" =>  30000
        ),
        "101" => array(
            "urun_adi" => "iphone 15",
            "fiyat" =>  40000
        ),
        "102" => array(
            "urun_adi" => "iphone16",
            "fiyat" => 50000
        ),
    );
    foreach ($urunler as $key => $value) {
        echo $key." ".$value["urun_adi"]." ".$value["fiyat"]."<br>";
    }
?>