<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="styleCSS/portofolio.css">
    <title>Cakra</title>
</head>
<body>
    <div class="container-fluid pt-5 pb-5" style="background-color: #242424;">
    <div class="container text-center">
        {{-- Experience Section --}}
        <div class="row">
            <div class="p-0">
                <h2>RESUME</h2>
                <p class="mb-5">{{ $portofolio }}</p>
                <p class="judul">Experience Work</p>
            </div>
        </div>
        @foreach ($dataPortofolio as $item)
        @if ($item->namaPerusahaan !== null)
            <div class="row ms-1">
                <div class="col-6 kolom">
                    <h3>Nama Perusahaan</h3>
                    <p>{{ $item->namaPerusahaan }}</p>
                </div>
                <div class="col-6 kolom">
                    <h3>Jabatan</h3>
                    <p>{{ $item->jabatan }}</p>
                </div>
            </div>
            <div class="row ms-1">
                <div class="col-6 kolom">
                    <h3>Tanggal Bekerja</h3>
                    <p>{{ $item->tanggalBekerja }}</p>
                </div>
                <div class="col-6 kolom">
                    <h3>Status Pegawai</h3>
                    <p>{{ $item->statusPegawai }}</p>
                </div>
            </div>
            <div class="row ms-1">
                <div class="col">
                    <h3>Peran dan Tanggung Jawab</h3>
                    <p>{!! $item->peranTanggungJawab !!}</p>
                </div>
            </div>
            <div class="row mt-3 ms-3 mb-5">
                @php
                    $images = explode(', ', $item->fotoPerusahaan);
                    $image = $images[0];
                    array_shift($images);
                @endphp
                <div class="kolomImageUtama col-6 p-0">
                    <img class="foto" src="uploads/perusahaan/{{ $image }}">
                </div>
                @foreach($images as $key => $img)
                        @if($key % 2 === 0 )
                            <div class="col-3" style="padding-left: 5px; padding-right:0; ">
                        @endif
                            <div class="kolomImage" style="margin-bottom: 5px;">
                                <img class="foto" src="uploads/perusahaan/{{ $img }}">
                            </div>
                        @if($key % 2 === 1 )
                            </div>
                        @endif
                @endforeach
            </div>
            @endif
        @endforeach

        {{-- Organization Section --}}
        <div class="row">
            <div class="p-0">
                <p class="judul">Organization</p>
            </div>
        </div>
        @foreach ($dataPortofolio as $item)
        @if ($item->namaOrganisasi !== null)
            <div class="row ms-1">
                <div class="col-4 kolom">
                    <h3>Nama Organisasi</h3>
                    <p>{{ $item->namaOrganisasi }}</p>
                </div>
                <div class="col-4 kolom">
                    <h3>Level Organisasi</h3>
                    <p>{{ $item->levelOrganisasi }}</p>
                </div>
                <div class="col-4 kolom">
                    <h3>Jabatan</h3>
                    <p>{{ $item->posisi }}</p>
                </div>
            </div>
            <div class="row ms-1">
                <div class="col-4 kolom">
                    <h3>Tanggal Awal Menjabat</h3>
                    <p>{{ $item->tanggalAwalMenjabat }}</p>
                </div>
                <div class="col-8 kolom">
                    <h3>Tanggal Akhir Menjabat</h3>
                    <p>{{ $item->tanggalAkhirMenjabat }}</p>
                </div>
            </div>
            <div class="row ms-1">
                <div class="col">
                    <h3>Peran dan Tanggung Jawab</h3>
                    <p>{{ $item->peranTanggungJawabOrganisasi }}</p>
                </div>
            </div>

            
            <div class="row ms-3 mt-3">
                @php
                    $images = explode(', ', $item->fotoOrganisasi);
                @endphp
                @foreach($images as $index => $img)
                    @if ($index % 5 == 0 && $index != 0)
                        </div><div class="row ms-3 mt-1 mb-5">
                    @endif
                    <div class="col kolomImgOrgan zoom">
                        <img class="foto" src="uploads/organisasi/{{ $img }}">
                    </div>
                @endforeach
            </div>            
            @endif
        @endforeach

        {{-- Training Section --}}
        <div class="row">
            <div class="p-0">
                <p class="judul">Training</p>
            </div>
        </div>
        @foreach ($dataPortofolio as $item)
        @if ($item->namaPelatihan !== null)
            <div class="row ms-1">
                <div class="col-6 kolom">
                    <h3>Nama Pelatihan</h3>
                    <p>{{ $item->namaPelatihan }}</p>
                </div>
                <div class="col-6 kolom">
                    <h3>Penyelenggara</h3>
                    <p>{{ $item->penyelenggara }}</p>
                </div>
            </div>
            <div class="row ms-1 mb-4">
                <div class="col-6 col">
                    <h3>Tahun Sertifikasi</h3>
                    <p>{{ $item->tahunSertifikasi }}</p>
                </div>
                <div class="col-6 col">
                    <h3>Tahun Akhir</h3>
                    <p>{{ $item->tahunAkhir }}</p>
                </div>
            </div>
            @endif
        @endforeach

        {{-- Competition Section --}}
        <div class="row">
            <div class="p-0">
                <p class="judul">Competition</p>
             </div>
        </div>
        @foreach ($dataPortofolio as $item)
        @if ($item->namaPrestasi !== null)
            <div class="row ms-1">
                <div class="col-4 kolom">
                    <h3>Nama Kompetisi</h3>
                    <p>{{ $item->namaPrestasi }}</p>
                </div>
                <div class="col-4 kolom">
                    <h3>Level</h3>
                    <p>{{ $item->level }}</p>
                </div>
                <div class="col-4 kolom">
                    <h3>Tahun</h3>
                    <p>{{ $item->tahun }}</p>
                </div>
            </div>
            <div class="row ms-1 mb-4">
                <div class="col-4 col">
                    <h3>Pencapaian</h3>
                    <p>{{ $item->pencapaian }}</p>
                </div>
                <div class="col-8 col">
                    <h3>Kategori</h3>
                    <p>{{ $item->kategori }}</p>
                </div>
            </div>
            @endif
        @endforeach
    </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>