<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function Jalankan(){
        //Mengakses Model
        $data = new DaftarBuku();

        //Memberi Data Model Ke View dan Menampilkan View
        include "View/BukuView.php";
    }

}
?>