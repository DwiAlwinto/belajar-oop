<?php 
    require_once "Unggas.php";
    require_once 'Terbang.php';
  

    class Burung extends Unggas{
        function nama(){
            echo "Aku Burung Jantan Gagak";
        }
        use Terbang; //use ini untuk menggunakn trait terbang
    }
    