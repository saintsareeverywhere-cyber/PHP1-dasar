<?php
$datas = [
    ["nama" => "Andi Pratama", "umur" => 22, "status" => "Mahasiswa"],
    ["nama" => "Budi Santoso", "umur" => 28, "status" => "Karyawan"],
    ["nama" => "Citra Ayu", "umur" => 19, "status" => "Pelajar"],
    ["nama" => "Dewi Lestari", "umur" => 31, "status" => "Wiraswasta"],
    ["nama" => "Eko Nugroho", "umur" => 26, "status" => "Karyawan"],
    ["nama" => "Fajar Setiawan", "umur" => 24, "status" => "Freelancer"],
    ["nama" => "Gita Sari", "umur" => 29, "status" => "Guru"],
    ["nama" => "Hari Susanto", "umur" => 34, "status" => "Dosen"],
    ["nama" => "Indah Permata", "umur" => 21, "status" => "Mahasiswa"],
    ["nama" => "Joko Widodo", "umur" => 40, "status" => "Pegawai Negeri"],
    ["nama" => "Kartika Putri", "umur" => 27, "status" => "Karyawan"],
    ["nama" => "Lutfi Ramadhan", "umur" => 23, "status" => "Mahasiswa"],
    ["nama" => "Maya Puspita", "umur" => 32, "status" => "Ibu Rumah Tangga"],
    ["nama" => "Nanda Saputra", "umur" => 25, "status" => "Karyawan"],
    ["nama" => "Oktavia Melati", "umur" => 30, "status" => "Dokter"]
];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"> 
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> 
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
             <svg class="bi me-2" width="40" height="32" aria-hidden="true"><use xlink:href="#bootstrap"></use></svg> 
             <span class="fs-4">Simple header</span> </a> <ul class="nav nav-pills"> 
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li> 
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li> 
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li> 
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li> 
                <li class="nav-item"><a href="#" class="nav-link">About</a></li> 
            </ul> 
        </header> 
    </div>
    <div class="container px-4 py-5" id="featured-3"> 
      <h2 class="pb-2 border-bottom text-center">Daftar Anggota</h2>
       <div class="row g-5 py-5 row-cols-1 row-cols-lg-3"> 
        <?php foreach ($datas as $data) {?>
        <div class="feature col shadow p-3 bg-body rounded"> 
          <h3 class="fs-2 text-body-emphasis"><?=$data ["nama"]?></h3> 
          <p><?=$data["nama"]. " berusia ". $data['umur'] . " tahun, dan status kepegaiawannya ". $data ['status'] ?></p>
        </div> 
        <?php } ?>
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  </body>
</html>











