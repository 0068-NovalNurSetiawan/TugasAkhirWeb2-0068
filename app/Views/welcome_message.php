<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di SICEPOT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }
        .carousel-inner {
            height: 100vh; /* Full height */
            width: 100vw; /* Full width */
        }
            .carousel-item {
                height: 100vh; /* Full height */
                width: 100vw; /* Full width */
                background-size: cover; /* Ensures image fills the container */
                background-position: center; /* Centers the image */
                background-repeat: no-repeat; /* Prevents repeating */
                position: relative; /* To position the overlay */
                filter: brightness(1.2); /* Makes the image brighter */
            }
        /* Dark overlay */
        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Lighter semi-transparent black */
            z-index: 1; /* Ensures it's behind the caption */
        }
        .carousel-caption {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            z-index: 2; /* Ensure caption is above the overlay */
        }
        .carousel-caption h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .carousel-caption p {
            font-size: 1.2rem;
        }
        .navbar {
            background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent */
            position: absolute; /* Overlay position */
            width: 100%;
            z-index: 3; /* Ensure navbar is above carousel */
        }
        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }
        .navbar-nav .nav-link {
            color: white !important; /* Change text color to white */
            font-weight: bold;
        }
        .navbar-toggler-icon {
            filter: invert(100%); /* Makes the toggle icon white */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/formulir">Formulir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="backgroundCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('/images/bgfix.jpg');">
                    <div class="carousel-caption">
                        <h1>WELCOME TO WEBSITE <br> SICEPOT</h1>
                        <p>Kantor Kelas II Non TPI Kediri<br>Jl. Jawa No135, Bedrek Selatan, Grogol, Kec. Grogol,<br>Kabupaten Kediri, Jawa Timur 64151</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/images/gambarfix2.jpeg');">
                    <div class="carousel-caption">
                        <h1>WELCOME TO WEBSITE <br> SICEPOT</h1>
                        <p>Kantor Kelas II Non TPI Kediri<br>Jl. Jawa No135, Bedrek Selatan, Grogol, Kec. Grogol,<br>Kabupaten Kediri, Jawa Timur 64151</p>
                    </div>
                </div>
                
            </div>
            <!-- Navigation Arrows -->
            <button class="carousel-control-prev" type="button" data-bs-target="#backgroundCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#backgroundCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
