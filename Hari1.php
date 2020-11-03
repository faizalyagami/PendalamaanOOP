<?php

    class Elang {
        public $nama,
               $darah,
               $jumlahkaki,
               $keahlian;

        public function __construct($nama, $darah, $jumlahkaki, $keahlian) {
            $this->nama = $nama;
            $this->darah = $darah;
            $this->jumlahkaki = $jumlahkaki;
            $this->keahlian = $keahlian;
        }
               
        public function atraksi() {
            return "$this->nama, $this->keahlian";
        }
    }

    class getInfoHewan {
        public function info(Elang $elang) {
            $str = "{$elang->nama} | {$elang->atraksi()}";
            return $str;
        }
    }

    $elang1 = new Elang("Elang", 50, 2, "terbang tinggi");
    $elang2 = new Elang("Eagle", 50, 2, "terbang tinggi");
    echo "nama hewan : " .$elang1->atraksi();
    echo "<br>";
    echo "nama hewan : " .$elang2->atraksi();
    echo "<br>";
    $infoElang = new getInfoHewan();
    echo $infoElang->info($elang1);

?>