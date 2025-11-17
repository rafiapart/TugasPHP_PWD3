<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian Matrix</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .container {
            padding: 0;
        }
        table {
            border-collapse: collapse;
            margin: 0;
        }
        td {
            width: 35px;
            height: 28px;
            text-align: left;
            padding-left: 5px;
            border: 2px solid #333;
            font-weight: bold;
            font-size: 12px;
        }
        .header {
            background-color: #00ff00;
            color: black;
        }
        .row-header {
            background-color: #00ff00;
            color: black;
        }
        .bilangan-label {
            background-color: white;
            color: black;
            font-weight: bold;
            text-align: left;
            padding-left: 5px;
        }
        .yellow { background-color: #ffff00; }
        .cyan { background-color: #00ffff; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tabel Perkalian Matrix</h2>
        <table>
            <tr>
                <td class="bilangan-label">bilangan</td>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<td class='header'>$i</td>";
                }
                ?>
            </tr>
            
            <?php
            for ($baris = 1; $baris <= 10; $baris++) {
                echo "<tr>";
                echo "<td class='row-header'>$baris</td>";
                for ($kolom = 1; $kolom <= 10; $kolom++) {
                    $hasil = $baris * $kolom;
                    if ($baris % 2 == 0) {
                        $warna = "cyan";
                    } else {
                        if ($kolom % 2 == 1) {
                            $warna = "yellow";
                        } else {
                            $warna = "cyan";
                        }
                    }
                    
                    echo "<td class='$warna'>$hasil</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>