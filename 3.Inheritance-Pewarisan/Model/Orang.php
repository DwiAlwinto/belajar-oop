<?php 
    class Orang{
        public $nama, $umur;

        public function __construct($nama, $umur)
        {
            $this -> nama = $nama;
            $this -> umur = $umur;
        }

        //!ini sebelum dikasih keyword final (bisa di override di childrenya)
        // public function sayHello(){
        //     echo "Hello nama saya {$this->nama} dan umur saya {$this->umur} tahun";
        // }

          //!ini dikasih keyword final
             final public function sayHello(){
             echo "Hello nama saya {$this->nama} dan umur saya {$this->umur} tahun";
            }
    }