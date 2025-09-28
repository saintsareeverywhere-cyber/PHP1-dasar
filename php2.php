<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dasar Season 2</title>
</head>
<body>
    <?php

    // array associative
    $rak = [
        "pemprograman" =>
        [
            "php" => "belajar php dasar",
            "javascript" => "belajar javascript dasar",
            "c++" => "belajar c++ dasar"
    ], 
        "nama_peminjam" => [
            "ayu" => "php",
            `budi` => "javascript",
            "citra" => "c++"
            
        ]

    ];

    print_r($rak);
    echo "<br>";
    print_r($rak["pemprograman"]);
    echo "<br>";
    echo $rak["pemprograman"]["php"];
    echo "<br>";
    print_r($rak["nama_peminjam"]);
    echo "<br>";
    echo $rak["nama_peminjam"]["citra"];
    echo "<br>";

    // end array associative

    // for loop

    $data = [
        'golang',
        'ruby',
        'phyton',
        'javascript',
    ];

    for ($i=0; $i < count($data); $i++) {
        echo $data[$i]; 
        echo ', ';

    }
     echo "<br>";

    // end for loop

    // while loop

    $data = [
        [ 
            'nama' => 'ayu',
            'umur' => 20,
            'mk' => 'php',
            'kelas' => 'TI',
            
        ],
        [
            'nama' => 'budi',
            'umur' => 21,
            'mk' => 'javascript',
            'kelas' => 'SI',
        ],
        [
            'nama' => 'citra',
            'umur' => 22,
            'mk' => 'c++',
            'kelas' => 'TI',
        ],
    ];


    $i = 0;
    $kondisi = true;
    echo '<table border="1" style="border-collapse: collapse;" >' .
    '<tr>'.
    '<th>Nama</th>'.
    '<th>Umur</th>'.
    '<th>Mata Kuliah</th>'.
    '<th>Kelas</th>'.
    '</tr>';
    while ($kondisi) {
        echo '<tr>'.
        '<td>' . $data[$i]['nama'] . '</td>'.
        '<td>' . $data[$i]['umur'] . '</td>'.
        '<td>' . $data[$i]['mk'] . '</td>'.
        '<td>' . $data[$i]['kelas'] . '</td>'.
         '</tr>';
        echo '<br>';
        $i++;
        if ($i == count($data)) {
            $kondisi = false;
        }
    }

    echo '</table>';
    // end while loop

    // break and continue
    $i = 0;

    while (true) {
        $i++;

        if ($i % 2 == 1) {
            continue;
        }

        echo "ini nilai ke -{$i} <br>";
        if ($i == 10 || $i == 11) {
            break;
        }
    }

    echo "<br>";


    // end break and continue


    // foreach
    $datas = ['nila', 'rudi', 'budi' ];
    foreach ($datas as $key => $value) {
        $key++;
        echo "ini data ke - {$key} = {$value} <br>";
    }

    $keluarga = [
        [
            'nama' => 'Roni',
            'status' => 'KK',
        ],
        [
            'nama' => 'Wanti',
            'status' => 'I',
        ],
        [
            'nama' => 'Bobi',
            'status' => 'A',
        ],
        [
            'nama' => 'Susanti',
            'status' => 'A',
        ],
    ];

    foreach ($keluarga as $key=>$anggota){
        echo "Anggota Ke - {$key} <br>";
        foreach ($anggota as $key => $value){
            echo "{$key} : {$value} <br>";
        }
    }

    // end foreach

    // function
    function  sayHello(?string $nama, ?int $umur){
        if ($nama == null){
            return "Hallo, data belum lengkap";
        }
        
        return $nama . " " . $umur;
        
    }



    echo sayHello(nama: null, umur: 20);
    echo "<br>";
    // sayHello("Cici", "belajar");
    echo sayHello(nama: "Joni Juntoro", umur: 15);

    ?>
</body>
</html>