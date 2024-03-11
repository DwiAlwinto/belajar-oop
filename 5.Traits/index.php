<?php 
    require "hewan/Ayam.php";
    require "hewan/Burung.php";
    require "hewan/Capung.php";


    //buat objet ya 
    $ayam = new Ayam();
    $burung = new Burung();
    $capung = new Capung();

    echo $ayam->bertelur();
    echo "</br>";
   
    echo "</br>";
    $burung->nama();
    echo "</br>";
    $burung->bertelur();
    echo "</br>";
    $burung->terbang();
    
     echo "</br>";
     echo "</br>";
     $capung->CapungRawa();
     echo "</br>";
     $capung->terbang();
    