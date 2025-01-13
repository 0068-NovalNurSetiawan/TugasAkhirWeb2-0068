<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Jenis Pemohon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .option-card {
            transition: transform 0.1s;
            position: relative;
            border: none;
            margin-bottom: 30px;
            height: 350px;
            width: 350px;
        }
        .option-card:hover {
            transform: scale(1.05);
        }
        .option-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
        .option-card .gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            background: linear-gradient(to top, rgba(0, 0, 255, 0.7), rgba(0, 0, 255, 0));
            z-index: 1;
        }
        .option-card.anak .gradient {
            background: linear-gradient(to top, rgba(255, 255, 0, 0.7), rgba(255, 255, 0, 0));
        }
        .card-body {
            position: absolute;
            bottom: 20px;
            left: 40px;
            color: white;
            font-size: 22px;
            font-weight: 900;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            z-index: 2;
        }
        .card-subtitle {
            position: absolute;
            bottom: 70px;
            left: 10px;
            color: white;
            font-size: 18px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            z-index: 2;
        }
        .clickable-image {
            text-decoration: none;
        }
        .page-title {
            text-align: left;
            margin-left: 190px;
            padding: 20px;
        }
        .row-center {
            justify-content: center;
        }
        .navbar-brand {
            font-weight: bold; /* Membuat teks "FORMULIR" bold */
            display: flex;
            align-items: center; /* Menyelaraskan gambar dan teks */
        }
        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }
        .nav-link {
            font-weight: bold; /* Membuat teks "Home" dan "Formulir" bold */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/images/logo.png" alt="Formulir Icon">
                    FORMULIR
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="/" style="font-weight: bold;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/formulir" style="font-weight: bold;">Formulir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main class="container my-5">
        <h1 class="page-title">Silahkan Pilih</h1>
        <div class="row row-center">
            <div class="col-md-4">
                <a href="/formulir/dewasa" class="clickable-image">
                    <div class="card option-card">
                        <div class="gradient"></div>
                        <img src="/images/dewasa.jpg" alt="Dewasa">
                        <div class="card-subtitle">Permohonan Paspor</div>
                        <div class="card-body">Dewasa</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/formulir/anak" class="clickable-image">
                    <div class="card option-card anak">
                        <div class="gradient"></div>
                        <img src="/images/anak.jpg" alt="Anak">
                        <div class="card-subtitle">Permohonan Paspor</div>
                        <div class="card-body">Anak</div>
                    </div>
                </a>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
