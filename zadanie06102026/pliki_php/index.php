<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Moje pliki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>MOJE PLIKI</h1>
    </header>
    <center>
    <main>
        <h3>Aktualny katalog:</h3>
        <p><?php echo getcwd(); ?></p>

        <h3>ZAWARTOŚĆ KATALOGU</h3>
        <table>
            <tr>
                <th>Nazwa</th>
                <th>Typ</th>
                <th>Rozmiar</th>
            </tr>
            <?php
            $katalog = "dokumenty";

            if (file_exists($katalog) && is_dir($katalog)) {
                foreach (scandir($katalog) as $file) {

                    if ($file === "." || $file === "..") {
                        continue;
                    }

                    $sciezka = $katalog . "/" . $file;

                    if (is_file($sciezka)) {
                        $type = "PLIK";
                        $size = filesize($sciezka) . " b";
                    } elseif (is_dir($sciezka)) {
                        $type = "KATALOG";
                    } else {
                        $type = "";
                    }

                    echo "<tr>
                            <td>$file</td>
                            <td>$type</td>
                            <td>$size</td>
                        </tr>";
                }
            }
            ?>
        </table>
    </main>
    </center>
</body>
</html>