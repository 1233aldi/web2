<<<<<<< HEAD
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper {
            padding: 10px;
        }

        .form-input {
            display: block;
        }
    </style>
    <title>Form dengan OOP</title>
</head>

<body>
    <?php
    require_once "formmahasiswa.php";

    $form = new form();
    $form->setTextField('Nama', '');
    $form->setTextField('NIM', '');
    $form->setTextField('Prodi', '');
    $form->setTextField('Fakultas', '');

    $form->tampilkanForm();
    ?>
</body>

=======
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper {
            padding: 10px;
        }

        .form-input {
            display: block;
        }
    </style>
    <title>Form dengan OOP</title>
</head>

<body>
    <?php
    require_once "formmahasiswa.php";

    $form = new form() ;
    $form->setTextField('Nama', '');
    $form->setTextField('NIM', '');
    $form->setTextField('Prodi', '');
    $form->setTextField('Fakultas', '');

    $form->tampilkanForm();
    ?>
</body>

>>>>>>> e0d8c63 (Menambahkan Tugas)
</html>