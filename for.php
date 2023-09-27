<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>
    <?php 
        echo "Mencari jumlah huruf vokal dalam kata";
        echo "<br>"; //ganti baris
        $jumlah = 0;
        $kata = "belajar PHP"; //suatu kata
        $huruf = "a";
        for ($i = 0; $i < strlen($kata); $i++) {
            if (substr($kata, $i, 1) == $huruf) {
                $jumlah++;
            }
        }
        echo "Jumlah huruf " . $huruf . " dalam kata " . $kata . " : " . $jumlah;
    ?>
</body>
</html>
