<!DOCTYPE html>
<html>

<head>
    <title>Tugas 2d</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        .putih {
            background-color: #fff;
        }

        .hitam {
            background-color: #272727;
        }
    </style>
</head>

<body>
    <table>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<td class='hitam'></td>";
                } else {
                    echo "<td class='putih'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>