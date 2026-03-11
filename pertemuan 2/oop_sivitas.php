<?php

//class induk
class SivitasAkademik {
    protected $nama;

    //Constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    //Getter
    public function getNama() {
        return $this->nama;
    }
}

//Class anak 1
class Dosen extends SivitasAkademik {
    private $nidn;
     
     public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
     }

     public function getNidn() {
        return $this->nidn;
     }
}

//Class anak 2
class Mahasiswa extends SivitasAkademik {
    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }
}

//Instansiasi Object
$dosen1 = new Dosen("Ajib Abdul Kholiq, S.Kom.", "12345678");
$mahasiswa1 = new Mahasiswa("Neta Octavia", "2306700056");

//Menampilkan data
echo "Data Dosen:<br>";
echo "Nama: " . $dosen1->getNama() . "<br>";
echo "NIDN: " . $dosen1->getNidn() . "<br><br>";

echo "Data Mahasiswa:<br>";
echo "Nama: " .  $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim();

?>