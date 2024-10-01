<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    //Override (agar bisa menindih file baru) (kenapa dari orang bisa diwariskan ke orang inggris, karena sudah diextends dan orang inggrispun menjadi cucunya orang, sementara orang biasa adalah anaknya orang)
    public function ucapSalam()
    {
        echo "Hello My Name Is " . $this->nama . "<br>";
    }
}
?>