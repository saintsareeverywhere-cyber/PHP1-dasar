<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP dasar 1 </title>
</head>
<body>
    <h1>Belajar php dasar 1</h1>
    <?php
    // ini satu section php
    /**
     * Ini baris komentar 1
     * ini baris komentar 2
     * ini baris komentar panjang
     */
    echo "<h2>Hello Semuanya 😁</h2> <br>";
    echo "<p>Lorem ipsum dolor sit amet, 
    consectetur adipiscing elit. Curabitur eget ligula id nulla luctus volutpat. 
    Suspendisse potenti. Fusce sed sapien non libero commodo viverra a a sem. 
    Quisque consequat, felis sed ultricies luctus, magna est efficitur enim, 
    at posuere sapien mauris vel risus. Donec nec justo sit amet ligula cursus vulputate in non nisl. 
    Etiam vel finibus erat. Vivamus blandit eros ut urna pulvinar tincidunt. Sed vel mauris in erat interdum hendrerit sit amet ut ligula. 
    Cras tincidunt tellus eu sapien fermentum, nec iaculis lacus feugiat. Pellentesque venenatis, sapien a rhoncus iaculis, nisi lacus dictum nunc, 
    id rhoncus arcu justo nec turpis. Ut auctor orci a purus tempor, vitae congue nisi venenatis.</p>";
    echo "<p>Integer luctus, nulla vel dapibus egestas, augue orci posuere justo, at bibendum nisl nunc ac odio. Donec a neque nec odio suscipit luctus. 
    Proin lacinia, tortor vel tincidunt vulputate, massa orci posuere magna, nec gravida nisl ligula in nulla. 
    Nam suscipit lectus nec risus sagittis, vel posuere sem suscipit. Ut vehicula eros ac tellus tristique,
    non scelerisque lorem convallis. Sed cursus nibh quis risus volutpat, a bibendum nibh luctus. Morbi suscipit velit id dolor volutpat, 
    id finibus odio ultricies.</p>";

    // Section aritmatika
    echo 10 + 10;
    echo "<br>";
    echo 20 - 10;
    echo "<br>";
    echo 3 * 10;
    echo "<br>";
    echo 10 / 2;
    echo "<br>";
    echo 12 % 5;
    echo "<br>";
    // End section aritmatika

    // String, float, dan interger
    echo "ini merupakan string";
    echo var_dump("ini merupakan string");
    echo "<br>";
    echo 10.5;
    echo var_dump("10.5");
    echo "<br>";
    echo 10;
    echo var_dump(10);
    echo "<br>";
    // End string, float, dan interger

    // Variable
    $angka = 10;
    $kata = "ini merupakan kata";
    $decimal = 9.5;
    echo $angka;
    echo "<br>";
    echo $kata;
    echo "<br>";
    echo $decimal;
    echo "<br>";  
    // end variable

    // peranan variable
    $yearOfBirth = 2010;
    $yearNow = date(format: "Y");
    $hasilUmur = $yearNow - $yearOfBirth;
    echo "<p>Tahun kelahiran Budi adalah {$yearOfBirth}</p>";
    echo "<p>Tahun sekarang Budi adalah {$yearNow}</p>";
    echo "<p>Umur Budi adalah {$hasilUmur} tahun</p>";
    
    // end peranan variable

    // overwrite variable (penimpaan data)
    $yearNow = date(format: "Y");
    echo "<p>{$yearNow}</p>";
    $yearNow = 2010; // menimpa data
    echo "<p>{$yearNow}</p>";
    // end overwrite variable (penimpaan data)

    // add variable (menambah data)
    $angka1 = 10;
    $angka1 = $angka1 + 20;
    echo "<p>{$angka1}</p>";
    // end add variable (menambah data)

    // operasi singkat penambahan self variable
    $angka1 = 10;
    $angka1 += 20; // penjumlahan
    echo "<p>{$angka1}</p>";
    $angka1 -= 5; // pengurangan
    echo "<p>{$angka1}</p>";
    $angka1 *= 4; // perkalian
    echo "<p>{$angka1}</p>";
    $angka1 /= 2; // pembagian
    echo "<p>{$angka1}</p>";
    $angka1 %= 3; // modulus
    echo "<p>{$angka1}</p>";

    // constant (variabel tetap)
    define("NAMA", "Budi");
    echo NAMA;
    // end constant (variabel tetap)

    // incerement dan decrement
    $angka = 10;
    echo "<p>".$angka++."</p>"; // 10
    echo "<p>{$angka}</p>"; // 11
    $angka = 16;
    echo "<p>".$angka--."</p>";
    echo "<p>{$angka}</p>"; // 15

    $angka = 18;
    echo "<p>".++$angka."</p>"; // 19
    $angka = 30;
    echo "<p>".--$angka."</p>"; // 29
    // end incerement dan decrement

    // concatenation (penggabungan string)
    $namaDepan = "Joni";
    $namaBelakang = "Juntoro";

    echo "<h3>". $namaDepan . " " . $namaBelakang . "</h3>";
    // end concatenation (penggabungan string)

    // statement if
    $angka = 10;
    if($angka == 30){
        echo "<p>{$angka} sama dengan 30</p>";
    } else if ($angka > 30) {
        echo "<p>{$angka} lebih besar dari 30</p>";
    }  
    else {
        echo "<p>{$angka} lebih kecil dari 30</p>";
    }
    // end statement if

    // logika perbandingan
    echo "<h2>" . var_dump(10 == 10) . "</h2>";
    echo "<h2>" . var_dump(10 == 20) . "</h2>";
    echo "<h2>" . var_dump(10 != 20) . "</h2>";
    echo "<h2>" . var_dump(10 != 10) . "</h2>";
    echo "<h2>" . var_dump(10 <= 10) . "</h2>";
    echo "<h2>" . var_dump(10 <= 5) . "</h2>";
    echo "<h2>" . var_dump(10 <= 20) . "</h2>";
    echo "<h2>" . var_dump(10 >= 20) . "</h2>";
    echo "<h2>" . var_dump(10 >= 10) . "</h2>";
    echo "<h2>" . var_dump(10 > 5) . "</h2>";
    echo "<h2>" . var_dump(10 > 20) . "</h2>";
    echo "<h2>" . var_dump(10 < 5) . "</h2>";
    echo "<h2>" . var_dump(10 < 20) . "</h2>";
    // end logika perbandingan

    // penggambungan kondisi && dan ||
    $angka = 2;
    if ($angka % 5 == 0 && $angka % 3 == 0) {
        echo "<h1>FizzBuzz</h1>";
    } else if ($angka % 5 == 0 || $angka % 2 == 0) {
        echo "<h1>Fizz</h1>";
    } else if ($angka % 3 == 0) {
        echo "<h1>Buzz</h1>";
    } else {
        echo "<h1>($angka)</h1>";
    }

    // end penggambungan kondisi && dan ||

    // statement kebalikan
    $angka1 = 10;
    $angka2 = 20;

    if (!($angka1 != $angka2)) {
        echo "<p>{$angka1} dan {$angka2}</p>";
    } else {
        echo "nilai default";
    }

    // end statement kebalikan

    // switch case
    $kata = "Tidak ada";
    switch ($kata) {
        case "ON":
            echo "<h1>ON</h1>";
            break;
        case "OFF":
            echo "<h1>OFF</h1>";
            break;
        default:
            echo "<h1>Default</h1>";
            break;
    }
    // end switch case
    
    // array
    $rakBuku = ['golang pemrograman', 
    'javascript pemrograman', 'PHP pemrograman'];

    $keranjangBuah = array('apel', 'mangga', 'pisang', $rakBuku);
    $arrayGab = $keranjangBuah + $rakBuku;

    print_r($keranjangBuah);
    print_r($arrayGab);

    echo "<h3>".$rakBuku[0]."</h3>";
    echo "<h3>".$rakBuku[1]."</h3>";
    echo "<h3>".$rakBuku[2]."</h3>";

    print_r($rakBuku);

    $rakBuku[1] = "Ruby pemrograman"; // mengubah data array

    echo "<h3>".$rakBuku[0]."</h3>";
    echo "<h3>".$rakBuku[1]."</h3>";
    echo "<h3>".$rakBuku[2]."</h3>";

    // array_splice($rakBuku, 1, 1); // menghapus data array
    // unset($rakBuku[1]); // menghapus data array
    array_splice($rakBuku, 1, 2); // menghapus data array

    print_r($rakBuku);
    echo "<br>";


    // end array
    
    ?>
</body>
</html>