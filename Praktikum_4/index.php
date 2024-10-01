<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body>
    <h1>Konsep Pewarisan (Inheritance)</h1>
    <div class="">
        <?php
            require_once "OrangBiasa.php";
            require_once "OrangInggris.php";
            require_once "Mahasiswa.php";

            $jihan = new OrangBiasa();
            $jihan->setNama('Jihan Nabillah');
            $jihan->ucapSalam();

            echo "<br>";

            $draco = new OrangInggris();
            $draco->setNama('Draco Malfoy');
            $draco->ucapSalam();

            echo "<br>";

            $mahasiswa = new Mahasiswa();
            $mahasiswa->setNama('Jihan Nabillah');
            $mahasiswa->setNim('701230022');

            $nilaiMahasiswa = new Nilai();
            $nilaiMahasiswa->setTugas(90);
            $nilaiMahasiswa->setUts(95);
            $nilaiMahasiswa->setUas(100);

            $mahasiswa->setNilai($nilaiMahasiswa);

            $mahasiswa->ucapSalam();
            $mahasiswa->tampilkanData();
        ?>
    </div>
</body>
</html>