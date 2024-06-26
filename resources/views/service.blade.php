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
     <link rel="stylesheet" href="styleCSS/service.css">
    <title>Service</title>
</head>
<body>
    <section id="Service" style="padding-top: 9rem">
    <div class="container-fluid pt-5" style="background-color: #242424;">
        <div class="container text-center" >

                <h2 >SERVICE</h2>
                <p>{{ $service }}</p>
                
                <div class="row d-flex justify-content-center">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 ">
                        
                        @foreach ($services as $item)
                            <div class="col p-0">
                                <div class="cardService m-3 m-lg-5">
                                    <img class="icon" src="assetImage/icon/{{ $item->skill }}.png">
                                    <p class="mt-5">{{ $item->skill }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            
        </div>
    </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>