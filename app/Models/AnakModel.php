<?php
// AnakModel.php
namespace App\Models;

use CodeIgniter\Model;

class AnakModel extends Model
{
    protected $table = 'anak';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_anak', 
        'jenis_kelamin_anak', 
        'jenis_permohonan_paspor', 
        'tempat_lahir_anak', 
        'tanggal_lahir_anak',
        'nik_kia', 
        'tanggal_diberikan', 
        'berlaku_sampai', 
        'alamat_anak',
        'no_hp_ortu', 
        'nama_ibu', 
        'tempat_tanggal_lahir_ibu', 
        'no_ktp_ibu', 
        'tanggal_diberikan_ktp_ibu', 
        'berlaku_sampai_ktp_ibu',
        'nama_ayah', 
        'tempat_tanggal_lahir_ayah', 
        'no_ktp_ayah', 
        'tanggal_diberikan_ktp_ayah', 
        'berlaku_sampai_ktp_ayah', 
        'no_paspor_ayah', 
        'tanggal_diberikan_paspor_ayah', 
        'berlaku_sampai_paspor_ayah',
        'pengajuan_paspor', 
        'negara_tujuan', 
        'pekerjaan'
    ];
}
