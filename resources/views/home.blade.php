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
    <link rel="stylesheet" href="styleCSS/home.css">
    
    <title>Cakra</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #202020;">
        <div class="container pt-3">
          <img class="navbar-brand" src="assetImage/logo.png" style="object-fit: cover; heigth: 50px; width:50px">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Perulangan list navbar -->
            <ul class="navbar-nav ms-auto">
                <?php
                    $navItem = array ('Home','Service','Project','Resume','Contact');   
                     
                ?>
                @foreach ($navItem as $item)
                    <li class="nav-item">
                        <a class="nav-link" style="margin-right:15px; color:white" aria-current="page" href="#{{ $item }}">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>

            <!-- Pemisah antara list navbar & list sosmed -->
            <div style="border-left: 2px solid white;
            height: 30px; margin:0% 1% 0% 0%"></div>

            <!-- Perulangan list sosmed -->
            <ul class="navbar-nav ">
                <?php
                    $navSosmed = array ('instagram','linkedin','github'); 

                ?>
                @foreach ($navSosmed as $item)
                    <li class="nav-item">
                        <a class="nav-link" style="padding: 0% 0% 0% 8px;" aria-current="page" href="{{ $sosmed }}"><img class="listSosmed" src="assetImage/{{ $item }}.png" alt="{{ $item }}"></a>
                    </li>
                @endforeach
            </ul>

          </div>
        </div>
      </nav>

      <div class="homeSection container" id="Home">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" >
            <div class="col" style="color:white">
                <h1 class="cakra">{{ $namaDepan }}</h1>
                <h1 class="wirya">{{ $namaBelakang }}<span style="color: #0094FF">.</span></h1>
                <div class="sosmed" style="margin-top: 8%">
                  <a href="{{ $instagram }}">Instagram</a>
                  <span>|</span>
                  <a href="{{ $linkedin }}">Linkedin</a>
                </div>
                <div class="sosmed">
                  <a href="{{ $github }}">Github</a>
                  <span>|</span>
                  <a href="{{ $glints }}">Glints</a>
                </div> 
                <div class="mariBerteman">
                  <a href="https://wa.me/628114668789">MARI BERTEMAN</a>
                </div>
            </div>
            <div class="col">
              <img src="assetImage/foto/{{ $foto }}" alt="">
            </div>
            <div class="col">
              <div style="margin-top: 50%; margin-left:35%;">
                <p class="introduction">INTRODUCTION</p>
                <p class="judulIntro">{{ $judulIntroduction }}</p>
                <p style="text-align: justify">{{ $introduction}}</p>
              </div>
            </div>
        </div>
      </div>
      
       
      
      @include( 'service')
      
      @include( 'project')

      
      {{-- HALAMAN PORTOFOLIO --}}
      <section id="Resume" style="padding-top: 3rem">
        <iframe class="Section"  src="Portofolio" onload="resizeIframe(this)" scrolling="no"></iframe>
      </section>

      {{-- HALAMAN CV --}}
      <section id="Contact" style="padding-top: 4rem">
        <iframe class="Section" src="CuriculumVitae" onload="resizeIframe(this)" scrolling="no"></iframe>
      </section>

      <footer class="text-center mt-3 mb-0 pt-3 pb-3" style="background-color: #242424;">
        <p style="font-size: 12px">Copyright &copy; 2024 Frthope. All Rights Reserved.<br>Created by Cakra Wirya</p>
    </footer>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function(){
        // Menambahkan class 'active' pada navbar yang diklik
        $('.nav-link').click(function(){
          // Menghapus kelas 'active' dari semua navbar
          $('.nav-link').removeClass('active');
          // Menambahkan kelas 'active' hanya pada navbar yang diklik
          $(this).addClass('active');
        });

        // Menandai navbar yang aktif secara default saat halaman dimuat
        $('.nav-link').each(function(){
          if ($(this).attr('href') === window.location.pathname) {
            $(this).addClass('active');
          }
        });
      });

      function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
    }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>