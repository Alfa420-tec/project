<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Tugas 2c</title>
    <style type="text/css">
        td {

            height: 27px;
            width: 27px;
            text-align: center;
            border: 1px solid #000;
            background-color: salmon;
        }
    </style>
</head>

<body>

    <table cellspacing="0" cellpadding="10">
        <?php
        $baris = 1;

        for ($angka = 10; $angka >= $baris; $angka--) {
            echo "<tr>";
            for ($kolom = 1; $kolom <= $angka; $kolom++) {
                echo "<td>$kolom</td> ";
            }
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>