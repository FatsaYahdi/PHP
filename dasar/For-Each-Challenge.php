<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Challenge</title>
</head>
<body>
    <table border=1>
        <th>Nama Siswa</th>
        <?php
        $names = ["Adam","Alif","Ardiansyah","Giska","Gita","Ibrahim","Latif"];
        foreach ($names as $name) {
            echo "<tr><td>$name</td></tr>";
        }
        ?>
    </table>
</body>
</html>