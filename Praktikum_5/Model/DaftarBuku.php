<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar Pemrograman Web', 'Jihan Nabillah', 'Informatika', '2020'),
            new Buku('Matematika Diskrit', 'Aski Maya Partiwi', 'Andi Publisher', '2021'),
            new Buku('Kalkulus', 'Khaila Aura Nurulhadi', 'Erlangga', '2022'),
            new Buku('Metodologi Penelitian', 'Diva Angeliana', 'Pustaka UIN', '2023'),
            new Buku('Pemrograman Phyton', 'Amalia Aisaturadia', 'Angkasa Media', '2024'),
        );

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }

}
?>