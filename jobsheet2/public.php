<?php
//membuat class
class mahasiswa{ 
    public $nama;
    private $nim = "220102079";

//public method
public function tampilkan_nama(){
    //nilai kembalian
    return "Nama Saya Chinta <br>";
}

//membuat protected method\
function tampilkan_nim(){
    return "NIM saya " . $this->nim;
}
}

//instansiasi objek mahasiswa kedalam variabel mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan_nama
echo $mahasiswa -> tampilkan_nama();
echo $nim -> tampilkan_nim();
?>