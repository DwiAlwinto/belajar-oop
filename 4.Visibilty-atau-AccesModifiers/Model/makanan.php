<?php 
    class Makanan{
        public $nama = "Anggur"; //ini bersifat public.
        private $jenisMakanan = "Pencuci Mulut"; //ini private
        protected $hargaMakanan = 50000;

         public function getJenisMakanan(){ //harus dibuat method dan di return agar bisa diakses dari luar kelas
            return $this->jenisMakanan;
         }
    }

    //ini bersifat public.
        // $makanan1 = new Makanan();
        // echo $makanan1->nama;

        // echo "</br>";
        //!untuk private
    //echo $makanan1->jenisMakanan; //ini tidak bisa diakses(harus dikasih bantuan method)
        //echo $makanan1->getJenisMakanan(); //ini untuk akses type private
    

            //!untuk protected
        // echo "</br>";
        // echo $makanan1->hargaMakanan; //ini akan error
        class Buah extends Makanan{ //ini agar
            public function getHarga(){
                return $this->hargaMakanan;
            }
        }
        $buah1 = new Buah();
        echo $buah1->nama;
        echo "</br>";
        echo $buah1->getHarga();


