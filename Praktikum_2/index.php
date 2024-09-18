<?php
include "Orang.php";
include "BankCustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>
    <div class="div">
        <?php
            $nasabah = new BankCustomer();
            $nasabah->setCustomerName('Jihan Nabillah');
            $nasabah->setAddress('England');
            $nasabah->setEmail('jhnabillah@gmail.com');
            $nasabah->setCard('Prioritas');
            $nasabah->setAcc('Jane');

            $nasabah->insertCard();
            $nasabah->enterPIN(12345);
        ?>
    </div>
</body>
</html>

<!-- localhost/index.php?nama=Jihan -->
<!-- http://uinjambi.ac.id/berita?page=1&search=kuliah&orderBy=id --> <!--Sturktur URL Lengkap-->
<!-- http = protokol, uinjambi = domain, dns = domain name system, contoh = dns google, kita sendiri dns local. berita = folder yang ada di praktikum 2. ? & = query (kita bisa memberikan suatu data atau halaman 1) -->
<!-- lawan oop = prosedural (step by step) -->
