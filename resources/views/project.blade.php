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
     <link rel="stylesheet" href="styleCSS/project.css">
    <title>Cakra</title>
</head>
<body>
    <section id="Project" style="padding-top: 5rem">
    <div class="container text-center pt-5">
        <h2 id="Project">PROJECT</h2>
        <p>{{ $project }}</p>
        
        
        <div class="row d-flex justify-content-center">
            <div class="col-auto">
                <button class="category" onclick="filterSelection('ALL')">ALL</button>
            </div>
            @php
                $simpanKategori = [];
            @endphp
            @foreach ($kategori as $item)
                @if (!in_array($item->kategori, $simpanKategori))
                    <div class="col-auto">
                        <button class="category" onclick="filterSelection('{{ $item->kategori }}')">{{ $item->kategori }}</button>
                    </div>
                    @php
                        $simpanKategori[] = $item->kategori;
                    @endphp
                @endif
            @endforeach
        </div>
        
        <!-- Bagian konten yang akan disaring -->
        <div class="row d-flex justify-content-center align-items-center mt-4" id="projectContainer">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                @foreach ($kategori as $item)
                    <div class="col p-0" data-kategori="{{ $item->kategori }}">
                        @php
                            $images = explode(', ', $item->image);
                            $image = $images[0];
                            array_shift($images);
                        @endphp
                            
                                <div class="cardProject m-1 p-1" style="background-color: #323232" onclick="detailGambar({{ $item->id }})">
                                    <img src="{{ asset('uploads/project/' . $image) }}" class="foto" >
                                </div>
                    </div>
                @endforeach

            </div>
        </div>
              
        <div class="row popup">
            <div class="row p-1 borderPopup">
                <div class="col-6 ps-0 pe-1" style="height:556px;">
                    <img src="{{ asset('uploads/project/' . $image) }}" class="foto" id="expandedImg">
                </div>
                <div class="col-2 p-0 ps-1" style="height:556px; overflow-y: auto; overflow-x:hidden;">
                    <div class="row mb-2" style="height:180px">
                        <img src="{{ asset('uploads/project/' . $image) }}" class="foto" id="imagePopup1" onclick="selectedImage(this);">
                    </div>
                    <div class="row mb-2" style="height:180px">
                        <img src="{{ asset('uploads/project/' . $image) }}" class="foto" id="imagePopup2" onclick="selectedImage(this);">
                    </div>
                    <div class="row mb-2" style="height:180px">
                        <img src="{{ asset('uploads/project/' . $image) }}" class="foto" id="imagePopup3" onclick="selectedImage(this);">
                    </div>
                    <div class="row" style=" height:180px">
                        <img src="{{ asset('uploads/project/' . $image) }}" class="foto" id="imagePopup4" onclick="selectedImage(this);">
                    </div>
                </div>
                <!-- Tombol Close -->
                <button type="button" class="btn-close"  id="closePopup"></button>
                <div class="col-4 p" style="height:556px; overflow: auto;">
                    <h4 style="text-align: left;" id="namaProject"></h4>
                    <p style="text-align: left;" id="kontenProject"></p>
                </div>
            </div>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <script>
            function filterSelection(kategori) {
                var items = document.querySelectorAll('[data-kategori]');
                items.forEach(function(item) {
                    if (kategori === 'ALL' || item.getAttribute('data-kategori') === kategori) {
                        item.style.display = 'block'; // Tampilkan elemen jika kategori cocok atau jika kategori adalah 'ALL'
                    } else {
                        item.style.display = 'none'; // Sembunyikan elemen jika kategori tidak cocok
                    }
                });
        
                // Ambil semua tombol kategori
                var buttons = document.querySelectorAll('.category');

                // Tambahkan event listener untuk setiap tombol
                buttons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        // Hapus kelas .active dari semua tombol
                        buttons.forEach(function(btn) {
                            btn.classList.remove('active');
                        });

                        // Tambahkan kelas .active ke tombol yang diklik
                        this.classList.add('active');
                    });
                });
            }


            function detailGambar(id) {
                $.ajax({
                    url: 'projects/' + id,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(data) {
                        const image = data.data.image.split(", ");
                        const nama = data.data.nama;
                        const konten = data.data.konten;
                        image.forEach((v, i) => {
                            $('#imagePopup' + (i + 1)).attr('src', 'http://localhost:8000/uploads/project/' + v);
                        });
                        // Mengatur teks dalam elemen dengan id namaProject
                        $('#namaProject').text(nama);
                        $('#kontenProject').html(konten);
                        // Setelah semua gambar dimuat, ubah properti display dari popup menjadi flex
                        $('.popup').css('display', 'flex');
                    }
                });
            }

            function selectedImage(imgs) {
                var expandImg = document.getElementById("expandedImg");
                expandImg.src = imgs.src;
            }


            // Menambahkan event listener untuk tombol close
            $('#closePopup').click(function() {
                // Mengubah properti display dari popup menjadi none ketika tombol close ditekan
                $('.popup').css('display', 'none');
            });
       </script>
    </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


