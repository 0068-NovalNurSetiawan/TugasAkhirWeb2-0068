<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemohon Anak</title>
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
            <a class="navbar-brand" href="#">
                    <img src="/images/logo.png" alt="Icon Dewasa">
                    Formulir Pemohon Anak
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
        <h1 class="text-center mb-4">Data Pemohon Anak </h1>
        <form action="<?= base_url('formulir/anak') ?>" method="POST">
            <div class="mb-3">
                <label for="nama_anak" class="form-label">Nama Anak:</label>
                <input type="text" id="nama_anak" name="nama_anak" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin_anak" class="form-label">Jenis Kelamin Anak:</label>
                <select id="jenis_kelamin_anak" name="jenis_kelamin_anak" class="form-select" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jenis_permohonan_paspor" class="form-label">Jenis Permohonan Paspor:</label>
                <input type="text" id="jenis_permohonan_paspor" name="jenis_permohonan_paspor" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="tempat_lahir_anak" class="form-label">Tempat Lahir Anak:</label>
                    <input type="text" id="tempat_lahir_anak" name="tempat_lahir_anak" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggal_lahir_anak" class="form-label">Tanggal Lahir Anak:</label>
                    <input type="date" id="tanggal_lahir_anak" name="tanggal_lahir_anak" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="nik_kia" class="form-label">NIK/KIA:</label>
                    <input type="text" id="nik_kia" name="nik_kia" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="tanggal_diberikan" class="form-label">Tanggal Diberikan:</label>
                    <input type="date" id="tanggal_diberikan" name="tanggal_diberikan" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="berlaku_sampai" class="form-label">Berlaku Sampai:</label>
                    <input type="date" id="berlaku_sampai" name="berlaku_sampai" class="form-control" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat_anak" class="form-label">Alamat Anak:</label>
                <textarea id="alamat_anak" name="alamat_anak" class="form-control" rows="3" required></textarea>
            </div>
            <!-- <div class="mb-3">
                <label for="alamat_sama_dengan_ortu" class="form-label">Alamat Sama dengan Orang Tua:</label>
                <select id="alamat_sama_dengan_ortu" name="alamat_sama_dengan_ortu" class="form-select" required>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
            </div> -->
            <div class="mb-3">
                <label for="no_hp_ortu" class="form-label">No. HP Orang Tua:</label>
                <input type="tel" id="no_hp_ortu" name="no_hp_ortu" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nama_ibu" class="form-label">Nama Ibu:</label>
                    <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tempat_tanggal_lahir_ibu" class="form-label">Tempat/Tanggal Lahir Ibu:</label>
                    <input type="text" id="tempat_tanggal_lahir_ibu" name="tempat_tanggal_lahir_ibu" class="form-control" required>
                </div>
            </div>
            <div class="row">
    <div class="col-md-6 mb-3">
        <label for="no_ktp_ibu" class="form-label">No. KTP Ibu:</label>
        <input type="text" id="no_ktp_ibu" name="no_ktp_ibu" class="form-control" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="tanggal_diberikan_ktp_ibu" class="form-label">Tanggal Diberikan KTP Ibu:</label>
        <input type="date" id="tanggal_diberikan_ktp_ibu" name="tanggal_diberikan_ktp_ibu" class="form-control" required>
    </div>
    <div class="col-md-3 mb-3">
        <label for="berlaku_sampai_ktp_ibu" class="form-label">Berlaku Sampai:</label>
        <input type="date" id="berlaku_sampai_ktp_ibu" name="berlaku_sampai_ktp_ibu" class="form-control" required>
    </div>
</div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nama_ayah" class="form-label">Nama Ayah:</label>
                    <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tempat_tanggal_lahir_ayah" class="form-label">Tempat/Tanggal Lahir Ayah:</label>
                    <input type="text" id="tempat_tanggal_lahir_ayah" name="tempat_tanggal_lahir_ayah" class="form-control" required>
                </div>
                
            </div>
            
            <div class="row">
    <div class="col-md-4 mb-3">
        <label for="no_ktp_ayah" class="form-label">No. KTP Ayah:</label>
        <input type="text" id="no_ktp_ayah" name="no_ktp_ayah" class="form-control" required>
    </div>
    <div class="col-md-4 mb-3">
        <label for="tanggal_diberikan_ktp_ayah" class="form-label">Tanggal Diberikan KTP Ayah:</label>
        <input type="date" id="tanggal_diberikan_ktp_ayah" name="tanggal_diberikan_ktp_ayah" class="form-control" required>
    </div>
    <div class="col-md-4 mb-3">
        <label for="berlaku_sampai_ktp_ayah" class="form-label">Berlaku Sampai:</label>
        <input type="date" id="berlaku_sampai_ktp_ayah" name="berlaku_sampai_ktp_ayah" class="form-control" required>
    </div>
</div>


<div class="row">
    <div class="col-md-4 mb-3">
        <label for="no_paspor_ayah" class="form-label">No. Paspor Ayah:</label>
        <input type="text" id="no_paspor_ayah" name="no_paspor_ayah" class="form-control" required>
    </div>
    <div class="col-md-4 mb-3">
        <label for="tanggal_diberikan_paspor_ayah" class="form-label">Tanggal Diberikan Paspor Ayah:</label>
        <input type="date" id="tanggal_diberikan_paspor_ayah" name="tanggal_diberikan_paspor_ayah" class="form-control" required>
    </div>
    <div class="col-md-4 mb-3">
        <label for="berlaku_sampai_paspor_ayah" class="form-label">Berlaku Sampai:</label>
        <input type="date" id="berlaku_sampai_paspor_ayah" name="berlaku_sampai_paspor_ayah" class="form-control" required>
    </div>
</div>






            <div class="mb-3">
                <label for="pengajuan_paspor" class="form-label">Pengajuan Paspor:</label>
                <input type="text" id="pengajuan_paspor" name="pengajuan_paspor" class="form-control" required>
            </div>
            <div class="row">
    <div class="col-md-6 mb-3">
        <label for="negara_tujuan" class="form-label">Negara Tujuan:</label>
        <input type="text" id="negara_tujuan" name="negara_tujuan" class="form-control" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="pekerjaan" class="form-label">Pekerjaan:</label>
        <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" required>
    </div>
</div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

