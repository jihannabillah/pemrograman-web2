<html lang="en">
<head>
    <style>
        .fs-45{
            font-size: 20px;
        }
    </style>  
    <title>Praktikum 3</title>
</head>
<body>
    <div class="fs-20">
        <?php
            include "Visibility.php";

            $visibility = new Visibility();
            $visibility->tampilkanData();

            echo "<br>";

            echo "Akses di luar Kelas <br>";
            echo "Public: " . $visibility->public . '<br>';
            //echo "Private: " . $visibility->private . '<br>';
            //echo "Protected: " . $visibility->protected . '<br>';
            echo "<br> <br>";
            echo "<h2> Konsep Pewarisan </h2>";

            include "Mahasiswa.php";

            $mahasiswa = new Mahasiswa("Jihan Nabillah");
            $mahasiswa->ucapSalam();

            $mahasiswaInggris = new MahasiswaAsing("Louis Partridge");
            $mahasiswaInggris->UcapSalam();
        ?>
    </div>
</body>
</html>