<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="styleCSS/curiculumVitae.css">
   <title>Cakra</title>
</head>
<body>
    <div class="container-fluid">
    <div class="container text-center pb-5">
        <div class="row">
            <div class="col-3">
                <div class="row justify-content-center align-items-center">
                        <img src="assetImage/foto/FotoProfil.png" class="rounded-circle p-0" style="width: 200px; height: 200px; object-fit: cover;">
                        <p class="judul text-center mt-4">Muhammad Nandar<br>Cakra Wirya, S.Kom</p> 
                </div>
                <div class="row mt-5">
                    <span class="text-start d-flex mb-2">
                        <i class="bi bi-house-heart fs-3 mx-3 "></i>
                        <p class="mt-2 mb-0">Watampone</p> 
                    </span>
                    <span class="text-start d-flex mb-2">
                        <i class="bi bi-calendar2-day fs-3 mx-3 "></i>
                        <p class="mt-2 mb-0">20 April 2001</p> 
                    </span>
                    <span class="text-start d-flex mb-2">
                        <i class="bi bi-envelope fs-3 mx-3 "></i>
                        <p class="mt-2 mb-0">cakradsg@gmail.com</p> 
                    </span>
                    <span class="text-start d-flex">
                        <i class="bi bi-telephone-inbound fs-3 mx-3 "></i>
                        <p class="mt-2 mb-0">+62 8515 7813 877</p> 
                    </span>
                </div>

            </div>
            <div class="col-9 ">
                {{-- Address Section --}}
                <div class="row">
                    <div class="p-0">
                        <p class="judul">Address</p>
                    </div>
                </div>
                    <div class="row ms-1">
                        <div class="col-4 col">
                            <h3>Jl. Inspeksi Pam</h3>
                        </div>
                    </div>
                    <div class="row ms-1">
                        <div class="col-4 kolom">
                            <h3>Provinsi</h3>
                            <p>Sulawesi Selatan</p>
                        </div>
                        <div class="col-4 kolom">
                            <h3>Kota/Kabupaten</h3>
                            <p>Kota Makassar</p>
                        </div>
                        <div class="col-4 kolom">
                            <h3>Kecamatan</h3>
                            <p>Manggala</p>
                        </div>
                    </div>
                    <div class="row ms-1 mb-4">
                        <div class="col-4 col">
                            <h3>Kode Pos</h3>
                            <p>90234</p>
                        </div>
                    </div>

                    {{-- Education Section --}}
                    <div class="row">
                        <div class="p-0">
                            <p class="judul">Education</p>
                        </div>
                    </div>
                    
                        <div class="row ms-1">
                            <div class="col-12 kolomPen">
                                <h3>SMA/SMK</h3>
                                <h3>SMK NEGERI 1 BONE. Kota: BONE</h3>
                                <div class="row ms-1">
                                    <div class="col-5 kolom">
                                        <h3>Jenis Sekolah/Perguruan Tinggi</h3>
                                        <p>Negeri</p>
                                    </div>
                                    <div class="col-4 kolom">
                                        <h3>Nama Jurusan</h3>
                                        <p>Teknik Komputer & Jaringan</p>
                                    </div>
                                    <div class="col-3 kolom">
                                        <h3>NIM/NIS</h3>
                                        <p>13413</p>
                                    </div>
                                </div>
                                <div class="row ms-1">
                                    <div class="col-5 col">
                                        <h3>IPK/Nilai Rata-rata Ujian Sekolah</h3>
                                        <p>88 dari 100</p>
                                    </div>
                                    <div class="col-4 col">
                                        <h3>Status</h3>
                                        <p>Lulus</p>
                                    </div>
                                    <div class="col-3 col">
                                        <h3>Tanggal Ijazah</h3>
                                        <p>13 Mei 2019</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 kolomPen">
                                <h3 class="mt-3">S1-Perguruan Tinggi</h3>
                                <h3>Universitas Dipa Makassar</h3>
                                <div class="row ms-1">
                                    <div class="col-5 kolom">
                                        <h3>Jenis Sekolah/Perguruan Tinggi</h3>
                                        <p>Swasta</p>
                                    </div>
                                    <div class="col-4 kolom">
                                        <h3>Nama Jurusan</h3>
                                        <p>Teknik Informatika</p>
                                    </div>
                                    <div class="col-3 kolom">
                                        <h3>NIM/NIS</h3>
                                        <p>192308</p>
                                    </div>
                                </div>
                                <div class="row ms-1">
                                    <div class="col-5 col">
                                        <h3>IPK/Nilai Rata-rata Ujian Sekolah</h3>
                                        <p>3,75 dari 4,00</p>
                                    </div>
                                    <div class="col-4 col">
                                        <h3>Status</h3>
                                        <p>Lulus</p>
                                    </div>
                                    <div class="col-3 col">
                                        <h3>Tanggal Ijazah</h3>
                                        <p>18 Maret 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>