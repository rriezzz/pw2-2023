<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "Cum Laude";
        } else {
            echo "You did a great job!";
        }
    }
}
$mahasiswa = new Mahasiswa("Morriz ", "0110223300 ", "Jakarta ", "TI ", "3.69");
echo "Nama Lengkap : " . $mahasiswa->namaMahasiswa;
echo "<br>";
echo "NIM : " . $mahasiswa->nim;
echo "<br>";
echo "Domisili : " . $mahasiswa->domisili;
echo "<br>";
echo "Program Studi : " . $mahasiswa->prodi;
echo "<br>";
echo "IPK : " . $mahasiswa->ipk;
echo "<br>";
$mahasiswa->setPredikatIPK($mahasiswa->ipk);