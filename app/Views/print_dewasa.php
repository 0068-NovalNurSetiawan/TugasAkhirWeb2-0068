<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }
        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .rectangle-box, .output-container {
            border: 2px solid black;
            padding: 20px;
            margin: 10px auto;
            width: 100%;
            box-sizing: border-box;
        }
        .date-boxes {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .rectangle-box img {
            position: absolute;
            top: 100px;
            right: 80px;
            width: 110px;
            height: auto;
        }
        .date-box {
            width: 20px;
            height: 20px;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: bold;
        }
        .kotaan {
            width: 150px;
            height: 20px;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: bold;
        }
        .form-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .form-column {
            display: flex;
            flex-direction: column;
            width: 30%;
            margin-bottom: 10px;
        }
        .character-box {
            display: inline-block;
            width: 25px;
            height: 25px;
            border: 1px solid black;
            text-align: center;
            line-height: 25px;
 
            font-size: 14px;
            font-weight: bold;
        }
        .input-row {
            margin-bottom: 3px;
        }
        .label {
            font-weight: bold;
            margin-bottom: px;
        }
    </style>
</head>
<body>
    <div id="printArea">
        <div class="header">
            PERWAKILAN REPUBLIK INDONESIA <br>
            FORMULIR SURAT PERJALANAN REPUBLIK INDONESIA <br>
            UNTUK DEWASA DI LUAR NEGERI
        </div>
        
        <div class="rectangle-box">
            <img src="/images/garuda.png" alt="Garuda">
            <p>1. Isi formulir dengan HURUF CETAK dan TINTA HITAM</p>
            <p>2. Tanda * bersifat khusus:</p>
            <ul>
                <li>(*) Diisi sesuai dengan nomor pilihan</li>
                <li>(**) Lengkapi dengan nama istri/alias bila ada</li>
                <li>(***) Bagi nama wajib diisi, alamat kantor isi dengan nama perguruan tinggi/sekolah.</li>
            </ul>
            <p>3. Cara Pengisian:</p>
            <div class="form-container">
                <div class="form-column">
                    <div><strong>TANGGAL (Contoh: 26 Januari 2010)</strong></div>
                    <div class="date-boxes">
                        <div class="date-box">2</div>
                        <div class="date-box">6</div>
                        <div class="date-box">0</div>
                        <div class="date-box">1</div>
                        <div class="date-box">1</div>
                        <div class="date-box">0</div>
                    </div>
                </div>
                <div class="form-column">
                    <div><strong>PILIHAN 1 * (Contoh : Status Sipil)</strong></div>
                    <div class="date-boxes">
                        <div class="kotaan">Status Sipil *</div>
                        <div class="date-box">3</div>
                    </div>
                </div>
                <div class="form-column">
                    <div><strong>PILIHAN 2 (Pilih Jenis Kelamin)</strong></div>
                    <div class="kotaan">Laki-Laki/Perempuan</div>
                </div>
            </div>
        </div>

        <div class="output-container">
            <?php 
                $fields = [
                    'Nama Lengkap' => $nama_lengkap,
                    'Jenis Kelamin' => $jenis_kelamin,
                    'Jenis Pemohon Paspor' => $jenis_pemohon_paspor,
                    'Tempat Lahir' => $tempat_lahir,
                    'Tanggal Lahir' => $tanggal_lahir,
                    'NIK' => $nik,
                    'Tempat Dikeluarkan KTP' => $tempat_dikeluarkan_ktp,
                    'Alamat' => $alamat,
                    'No. HP' => $no_hp,
                    'Nama Ibu' => $nama_ibu,
                    'Nama Ayah' => $nama_ayah,
                    'Tujuan Pengajuan' => $tujuan_pengajuan,
                    'Status Sipil' => $status_sipil,
                    'Pekerjaan' => $pekerjaan,
                ];

                foreach ($fields as $label => $value):
            ?>
                <div class="input-row">
                    <div class="label"><?= esc($label) ?>:</div>
                    <?php foreach (str_split($value) as $char): ?>
                        <div class="character-box">
                            <?= $char === '' || ctype_space($char) ? '&nbsp;' : esc($char) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <button onclick="window.print()">Cetak</button>
        <a href="<?= base_url('/formulir/dewasa'); ?>">Kembali ke Form</a>
    </div>
</body>
</html> -->
