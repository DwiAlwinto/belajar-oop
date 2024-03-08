<?php 
    require "Model/Robot.php";

    //function __construction langsung dijalankan.
    $robot1 = new Robot("Optimus Prime", "Blue-White-Red", "Large"); //kita harus ada argument didalam object ya(dan value2 ya)
    var_dump($robot1);
    echo "</br>";
    unset($robot1); //function destruct bisa berjalan ketika object sudah dihancurkan atau di unset();
    echo "</br>";
    echo "Script sudah selsai";
    echo "</br>";
