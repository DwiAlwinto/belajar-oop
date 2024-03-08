<?php 
    class Robot { //ini nama ya class

        //cara buat properi di class tapi ini cara ya salah :
        // public $name = "Optimus Prime";
        // public $color = "blue-white-red";
        // public $size = 'large';

        public $name;
        public $color;
        public $size;

        // ini cara ke 2 mengisi properti menggunakan function
        function set_name($name){ //($name) ini parameternya
            $this -> name = $name; //!$this ini mengarah ke properti public $name
        }

        function set_color($color){
            $this -> color = $color;
        }

        function set_size($size){
            $this -> size = $size;
        }

    }