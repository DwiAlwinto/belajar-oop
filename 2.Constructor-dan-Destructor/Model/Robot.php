<?php 
    class Robot { //ini nama ya class
        public $name;
        public $color;
        public $size;

        function __construct($name, $color, $size)
        {
           $this -> name = $name;
           $this -> color = $color;
           $this -> size = $size;
        }

        function __destruct() //!destruct tidak boleh ada parameter (Fungsi destruct ini dijalankan ketika semua function __construct dan fungsi lain sudah selsai)
        {
            echo "Ini adalah isi dari function destruct";
        }

    }