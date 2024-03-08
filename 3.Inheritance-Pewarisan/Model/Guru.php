<?php 
    require "Orang.php";
    
    class Guru extends Orang{

        //!class childeren dapat mempunyai property mereka sendiri

        public function AktifitasGuru(){
            echo "Saya mengajar TIK";
        }

        public function sayHello() //ini akan error kan sudah dikasih keyword final di parent ya
        {
            echo "Ini sudah di overide, adalah function dari class Children bukan class parent ya";
        }
    }