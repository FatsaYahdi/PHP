<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Testing</title>
</head>
<body>
    <table border = 1>
        <th>No</th>
        <th>Nama Siswa</th>
    <?php 
    $a = ["Adam","Alif","Ardiansyah","Giska","Gita","Ibrahim","Latif"];
    $no = 1;
    foreach ($a as $b) {
        echo "<tr><td>$no</td><td>$b</td></tr>";
        $no++;
    }
    ?>
    </table>
</body>
</html>