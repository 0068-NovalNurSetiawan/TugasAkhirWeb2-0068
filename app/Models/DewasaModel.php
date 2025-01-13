<?php
// DewasaModel.php
namespace App\Models;

use CodeIgniter\Model;

class DewasaModel extends Model
{
    protected $table = 'dewasa';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_lengkap', 'jenis_kelamin', 'jenis_pemohon_paspor', 'tempat_lahir', 'tanggal_lahir',
        'nik', 'tempat_dikeluarkan_ktp', 'alamat', 'no_hp', 'nama_ibu', 'nama_ayah',
        'tujuan_pengajuan', 'status_sipil', 'pekerjaan'
    ];

}
