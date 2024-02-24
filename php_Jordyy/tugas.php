<!DOCTYPE html>
<html lang="en">
<head>
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    echo "saya sedang belajar PHP<br>";
    echo "<p>Belajar PHP hingga jadi master</p>";
    ?>
    <?php
    echo "<html>";
    echo "<head>";
    echo "<tittle>Judul Web</tittle>";
    echo "</head>";
    echo "<body>";
    echo "<h1>Selamat datang</h1>";
    echo "</body>";
    echo "</html>";
    ?>
    <?php
    echo "ini statement 1<br>";
    echo "ini statement 2<br>";
    ?>
    <?php
    $nama = "petanikode";
    $NAMA = "Rizqi";
    ?>
    <?php
    $umur = 19;
    echo "Umur saya adalah $umur<br>";
    ?>
    <?php
    const INI_KONSTANTA = 123;
    $ini_variabel = 23;
    $iniJugaVariabel = 49;
    ?>
    <?php
    // ini adalah komentar
    echo "Hello World<br>";

    /*
    ini adalah komentar
    yang lebih dari satu
    baris
    */
    ?>
    <?php
    if ($umur > 18){
        echo "Kamu sudah dewasa<br>";
        echo "Selamat datang<br>";
        echo "Kamu boleh minum kopi<br>";
    }
    ?>
</body>
</html>