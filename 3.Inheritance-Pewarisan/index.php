<?php 
    require "Model/guru.php";

    $guru1 = new Guru("Pak Budi", 39);
    //var_dump($guru1);

    //cara akses prperty 
    //echo $guru1->nama; //nama ini propery dari parent ya(yaitu orang ya).

    //kita panggil function yang diparent ya
        //$guru1->sayHello();
        //echo "</br>";
    
    //kita coba akses property/mwthod dari class children ya yaitu dari guru
        //$guru1->AktifitasGuru();
    
    //coba function override dari class children.
        //$guru1 -> sayHello();

    //ini setalah dikasih kelas keywor final.
        $guru1->sayHello();
        // hasilnya akan error(Fatal error: Cannot override final method Orang::sayHello() in C:\xampp\htdocs\PHP-NATIVE\PHP-OOP\3.Inheritance-Pewarisan\Model\Guru.php on line 12)