<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Dewasa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .rectangle-box {
            border: 2px solid black;
            padding: 20px;
            margin: 10px auto;
            box-sizing: border-box;
            position: relative;
        }
        .rectangle-box img {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 110px;
            height: auto;
        }
        .output-container {
            border: 2px solid black;
            padding: 20px;
            margin: 10px auto;
        }
        .input-row {
            margin-bottom: 3px;
        }
        .label {
            font-weight: bold;
        }
        .character-box {
            display: inline-block;
            width: 15px; /* Lebar kotak karakter */
            height: 15px; /* Tinggi kotak karakter */
            border: 1px solid black;
            text-align: center;
            line-height: 20px;
            margin: 0; /* Menghilangkan jarak antar karakter */
            font-size: 12px; /* Ukuran font lebih kecil */
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
        .date-boxes, .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .form-column {
            display: flex;
            flex-direction: column;
            margin-right: 30px;
        }
        .form-row > div {
            margin-right: 20px;
        }
        /* Two-column layout untuk Tanggal Lahir, Tempat Lahir, Nama Ibu, Nama Ayah */
        .two-column {
        display: flex;
        justify-content: flex-start;  /* Aligns items to the left */
        width: 100%;
        margin-top: 3px;
    }
    .two-column .form-column {
        width: 48%; /* Adjusted to leave some space between columns */
        margin-right: 20px; /* Add spacing between columns */
    }
        .form-column .label {
            font-weight: bold;
            margin-bottom: 1px;
        }
    </style>
</head>
<body onload="window.print();">
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
            <div class="form-row">
                <div class="form-column">
                    <strong>TANGGAL (Contoh: 26 Januari 2010)</strong>
                    <div class="date-boxes">
                        <div class="date-box">2</div>
                        <div class="date-box">6</div>
                        <div class="date-box">0</div>
                        <div class="date-box">1</div>
                        <div class="date-box">1</div>
                        <div class="date-box">0</div>
                    </div>
                </div>
                <div class="pilihan-column">
                  
                        <strong>PILIHAN 1 * (Status Sipil)</strong>
                        <div class="date-boxes">
                            <div class="kotaan">Status Sipil *</div>
                            <div class="date-box">3</div>
                        </div>
                    </div>
                    <div class="pilihan-column">
                        <strong>PILIHAN 2 (Jenis Kelamin)</strong>
                        <div class="kotaan">Laki-Laki/Perempuan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="output-container">
        <?php 
            $fields = [
                'Nama Anak' => $nama_anak,
                'Jenis Kelamin Anak' => $jenis_kelamin_anak,
                'Jenis Pemohonan Paspor' => $jenis_permohonan_paspor,
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

        <!-- Tanggal Lahir dan Tempat Lahir -->
        <div class="two-column">
            <?php 
                $data_dewasa = [
                    'Tempat Lahir Anak' => $tempat_lahir_anak,
                    'Tanggal Lahir Anak' => $tanggal_lahir_anak,
                ];

                foreach ($data_dewasa as $label => $value):
            ?>
                <div class="form-column">
                    <div class="label"><?= esc($label) ?>:</div>
                    <div class="input-row">
                        <?php foreach (str_split($value) as $char): ?>
                            <div class="character-box">
                                <?= $char === '' || ctype_space($char) ? '&nbsp;' : esc($char) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- NIK dan Tempat Dikeluarkan KTP -->
        <div class="two-column">
            <?php 
                $data_dewasa = [
                    'NIK/KIA' => $nik_kia,
                    'Tempat Diberikan' => $tanggal_diberikan,
                    'Berlaku Sampai' => $berlaku_sampai,
                ];

                foreach ($data_dewasa as $label => $value):
            ?>
                <div class="form-column">
                    <div class="label"><?= esc($label) ?>:</div>
                    <div class="input-row">
                        <?php foreach (str_split($value) as $char): ?>
                            <div class="character-box">
                                <?= $char === '' || ctype_space($char) ? '&nbsp;' : esc($char) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Alamat dan No. HP -->
        <?php 
            $fields = [
                'Alamat Anak' => $alamat_anak,
                'No. HP Orang Tua :' => $no_hp_ortu,
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

        <div class="two-column">
            <?php 
                $data_dewasa = [
                    'Nama Ibu' => $nama_ibu,
                    'Tempat Tanggal Lahir Ibu' => $tempat_tanggal_lahir_ibu,
                    
                ];

                foreach ($data_dewasa as $label => $value):
            ?>
                <div class="form-column">
                    <div class="label"><?= esc($label) ?>:</div>
                    <div class="input-row">
                        <?php foreach (str_split($value) as $char): ?>
                            <div class="character-box">
                                <?= $char === '' || ctype_space($char) ? '&nbsp;' : esc($char) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="two-column">
            <?php 
                $data_dewasa = [
                    'No. KTP Ibu' => $no_ktp_ibu,
                    'Tempat Diberikan KTP Ibu' => $tanggal_diberikan_ktp_ibu,
                    'Berlaku Sampai:' => $berlaku_sampai_ktp_ibu,
                    
                ];

                foreach ($data_dewasa as $label => $value):
            ?>
                <div class="form-column">
                    <div class="label"><?= esc($label) ?>:</div>
                    <div class="input-row">
                        <?php foreach (str_split($value) as $char): ?>
                            <div class="character-box">
                                <?= $char === '' || ctype_space($char) ? '&nbsp;' : esc($char) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="two-column">
            <?php 
                $data_dewasa = [
                    'Nama Ayah' => $nama_ayah,
                    'Tempat/Tanggal Lahir Ayah' => $tempat_tanggal_lahir_ayah,
                    
                ];

                foreach ($data_dewasa as $label => $value):
            ?>
                <div class="form-column">
                    <div class="label"><?= esc($label) ?>:</div>
                    <div class="input-row">
                        <?php foreach (str_split($value) as $char): ?>
                            <div class="character-box">
                                <?= $char === '' || ctype_space($char) ? '&nbsp;' : esc($char) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="two-column">
            <?php 
                $data_dewasa = [
                    'No. KTP Ayah' => $no_ktp_ayah,
                    'Tanggal Diberikan KTP Ayah' => $tanggal_diberikan_ktp_ayah,
                    'Berlaku Sampai:' => $berlaku_sampai_ktp_ayah,

                    
                ];

                foreach ($data_dewasa as $label => $value):
            ?>
                <div class="form-column">
                    <div class="label"><?= esc($label) ?>:</div>
                    <div class="input-row">
                        <?php foreach (str_split($value) as $char): ?>
                            <div class="character-box">
                                <?= $char === '' || ctype_space($char) ? '&nbsp;' : esc($char) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="two-column">
            <?php 
                $data_dewasa = [
                    'No. Paspor Ayah' => $no_paspor_ayah,
                    'Tanggal Diberikan Paspor Ayah' => $tanggal_diberikan_paspor_ayah,
                    'Berlaku Sampai:' => $berlaku_sampai_paspor_ayah,

                    
                ];

                foreach ($data_dewasa as $label => $value):
            ?>
                <div class="form-column">
                    <div class="label"><?= esc($label) ?>:</div>
                    <div class="input-row">
                        <?php foreach (str_split($value) as $char): ?>
                            <div class="character-box">
                                <?= $char === '' || ctype_space($char) ? '&nbsp;' : esc($char) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


        <?php 
            $fields = [

                'Pengajuan Pasporan' => $pengajuan_paspor,
                
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

        <div class="two-column">
            <?php 
                $data_dewasa = [
                    'Negara Tujuan' => $negara_tujuan,
                'Pekerjaan' => $pekerjaan,

                    
                ];

                foreach ($data_dewasa as $label => $value):
            ?>
                <div class="form-column">
                    <div class="label"><?= esc($label) ?>:</div>
                    <div class="input-row">
                        <?php foreach (str_split($value) as $char): ?>
                            <div class="character-box">
                                <?= $char === '' || ctype_space($char) ? '&nbsp;' : esc($char) ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>
</html>
