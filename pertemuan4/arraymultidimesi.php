<?php

$arrayMultidimensi =[ ["nama" => "Salma Aisyah", 
"kelas" => "X RPL 2",
"alamat "=> "jln. abdul muis",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer "],


 ["nama" => "Raura kesayangan", 
"kelas" => "X RPL 2",
"alamat "=> "jln. kapan-kapan aja ya",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer"],


["nama" => "Seli", 
"kelas" => "X RPL 2",
"alamat "=> "jln. kapan-kapan aja ya",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer"],


["nama" => "ALi", 
"kelas" => "X RPL 2",
"alamat "=> "jln. kapan-kapan aja ya",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer"],


["nama" => "Raib", 
"kelas" => "X RPL 2",
"alamat "=> "jln. kapan-kapan aja ya",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer"],


["nama" => "Haechan", 
"kelas" => "X RPL 2",
"alamat "=> "jln. kapan-kapan aja ya",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer"],


["nama" => "Okta ", 
"kelas" => "X RPL 2",
"alamat "=> "jln. kapan-kapan aja ya",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer"],
 

["nama" => "Virda", 
"kelas" => "X RPL 2",
"alamat "=> "jln. kapan-kapan aja ya",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer"],


["nama" => "Fathiyyah", 
"kelas" => "X RPL 2",
"alamat "=> "jln. kapan-kapan aja ya",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer"],


["nama" => "Haura", 
"kelas" => "X RPL 2",
"alamat "=> "jln. kapan-kapan aja ya",
"nisn "=> " 02535616",
"no "=> " 089273866",
"hobi"=> "baca buku",
"cita"=> "frontend developer"],

];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <table border= "1" cellpadding= "8" cellspacing= "0">
            <tr>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Nisn</th>
                <th>No. WhatsApp</th>
                <th>Hobi</th>
                <th>Cita-Cita</th>
            </tr>
           
            <?php foreach ($arrayMultidimensi as $am):?>
            <tr>
                <td><?= $am ["nama"];?></td>
                <td><?= $am ["kelas"];?></td>
                <td><?= $am ["alamat "];?></td>
                <td><?= $am ["nisn "];?></td>
                <td><?= $am ["no "];?></td>
                <td><?= $am ["hobi"];?></td>
                <td><?= $am ["cita"];?></td>
            </tr>
            <?php endforeach;?>
           
        </table>
    
</body>
</html>