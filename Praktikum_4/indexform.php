<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display: block;

        }
    </style>
    <title>Form Dengan OOP</title>
</head>
<body>
    <?php
        require_once "FormMahasiswa.php";

        $form = new Form();
        $form->setTextField('Nama', '');
        $form->setTextField('NIM', '');
        $form->setTextField('Prodi', '');
        $form->setTextField('Fakultas', '');
        $form->tampilkanForm();
    ?>
</body>
</html>