<?php

// CLASS INDUK
class SivitasAkademik {

    // property protected
    protected $nama;

    // constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // getter
    public function getNama() {
        return $this->nama;
    }
}

// CLASS DOSEN (extends)
class Dosen extends SivitasAkademik {

    private $nidn;

    public function __construct($nama, $nidn) {
        parent::__construct($nama); // ambil constructor parent
        $this->nidn = $nidn;
    }

    public function getDosen() {
        return "Dosen: " . $this->getNama() .
               " | NIDN: " . $this->nidn;
    }
}

// CLASS MAHASISWA (extends)
class Mahasiswa extends SivitasAkademik {

    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function getMahasiswa() {
        return "Mahasiswa: " . $this->getNama() .
               " | NIM: " . $this->nim;
    }
}

// INSTANSIASI OBJECT

$dosen1 = new Dosen("Ajib Abdul Kholiq, S.Kom", "12345678");
$mahasiswa1 = new Mahasiswa("Rizki Ramdani", "2306700008");

// cetak menggunakan echo
echo $dosen1->getDosen();
echo "<br>";
echo $mahasiswa1->getMahasiswa();

?>