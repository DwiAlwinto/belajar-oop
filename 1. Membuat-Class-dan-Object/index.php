<?php 
    require "Model/Robot.php";

    // ini cara 1 untuk bener mengisi properti 
    // $robot1 = new Robot();
    //     $robot1-> name = "Optimus Prime";
    //     $robot1-> color = "blue-white-red";
    //     $robot1-> size = "large";

    // $robot2 = new Robot();
    //     $robot2-> name = "Bombellbe";
    //     $robot2-> color = "yellow";
    //     $robot2-> size = "small";

    // var_dump($robot1);
    // echo "</br>";
    // var_dump($robot2);
    // ini cara 1 untuk bener mengisi properti 


    // ini cara 2 untuk bener mengisi properti menggunakan function.
    $robot1 = new Robot(); //Robot ini dari class pusat ya.
        $robot1 -> set_name("Optimus Prime"); 
        $robot1 -> set_color("blue-white-red");
        $robot1 -> set_size("Large");

    $robot2 = new Robot();
        $robot2 -> set_name("Bomblebee");
        $robot2 -> set_color("Yellow-Black");
        $robot2 -> set_size("Small");
   

    var_dump($robot1);
    echo "</br>";
    var_dump($robot2);