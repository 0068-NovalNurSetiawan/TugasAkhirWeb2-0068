<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemohon Dewasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 2500px;
            margin: auto;
        }
        .navbar-brand {
            display: flex;
            align-items: center; /* Menyelaraskan gambar dan teks secara vertikal */
            font-weight: bold; /* Membuat teks "Formulir Pemohon Dewasa" menjadi tebal */
        }
        .navbar-brand img {
            height: 40px; /* Tinggi gambar */
            margin-right: 10px; /* Jarak antara gambar dan teks */
        }
        .nav-link {
            font-weight: bold; /* Membuat teks Home dan Formulir menjadi tebal */
        }
    </style>
</head>
<body>
    <header class="mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Tambahkan gambar di sini -->
                <a class="navbar-brand" href="#">
                    <img src="/images/logo.png" alt="Icon Dewasa">
                    Formulir Pemohon Dewasa
                </a>
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
    </header>

    <main class="container form-container">
        <div class="container my-5">
            <!-- Pesan Peringatan -->
            <div class="alert alert-warning text-center" role="alert">
                <strong>Perhatian!</strong> Mohon mengisi data dengan menggunakan huruf balok atau huruf besar! Klik <strong>Caps Lock</strong> pada keyboard untuk mengaktifkan huruf besar.
            </div>
            <h1 class="text-center mb-4">Data Pemohon Dewasa</h1>
            <form action="<?= base_url('formulir/dewasa') ?>" method="POST">
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jenis_pemohon_paspor" class="form-label">Jenis Pemohon Paspor:</label>
                    <input type="text" id="jenis_pemohon_paspor" name="jenis_pemohon_paspor" class="form-control" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nik" class="form-label">NIK/No. KTP:</label>
                        <input type="text" id="nik" name="nik" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tempat_dikeluarkan_ktp" class="form-label">Tempat Dikeluarkan KTP:</label>
                        <input type="text" id="tempat_dikeluarkan_ktp" name="tempat_dikeluarkan_ktp" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <textarea id="alamat" name="alamat" class="form-control" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No. HP:</label>
                    <input type="tel" id="no_hp" name="no_hp" class="form-control" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nama_ibu" class="form-label">Nama Ibu:</label>
                        <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nama_ayah" class="form-label">Nama Ayah:</label>
                        <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tujuan_pengajuan" class="form-label">Tujuan Pengajuan Paspor:</label>
                    <input type="text" id="tujuan_pengajuan" name="tujuan_pengajuan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="status_sipil" class="form-label">Status Sipil:</label>
                    <select id="status_sipil" name="status_sipil" class="form-select" required>
                        <option value="Belum Menikah">BELUM MENIKAH</option>
                        <option value="Menikah">MENIKAH</option>
                        <option value="Cerai">CERAI</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan:</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
