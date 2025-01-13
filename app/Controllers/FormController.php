<?php
namespace App\Controllers;
use App\Models\AnakModel;
use App\Models\DewasaModel;

class FormController extends BaseController
{
    public function praperdim()
    {
        return view('formulir_menu');
    }

    public function dewasa()
    {
        return view('form_dewasa');
    }

    public function anak()
    {
        return view('form_anak');
    }

    public function saveDewasa()
    {
        $model = new DewasaModel();

        $data = [
            'type' => 'dewasa',
            'nama_lengkap' => strtoupper($this->request->getPost('nama_lengkap')),
            'jenis_kelamin' => strtoupper($this->request->getPost('jenis_kelamin')),
            'jenis_pemohon_paspor' => strtoupper($this->request->getPost('jenis_pemohon_paspor')),
            'tempat_lahir' => strtoupper($this->request->getPost('tempat_lahir')),
            'tanggal_lahir' => strtoupper($this->request->getPost('tanggal_lahir')),
            'nik' => strtoupper($this->request->getPost('nik')),
            'tempat_dikeluarkan_ktp' => strtoupper($this->request->getPost('tempat_dikeluarkan_ktp')),
            'alamat' => strtoupper($this->request->getPost('alamat')),
            'no_hp' => strtoupper($this->request->getPost('no_hp')),
            'nama_ibu' => strtoupper($this->request->getPost('nama_ibu')),
            'nama_ayah' => strtoupper($this->request->getPost('nama_ayah')),
            'tujuan_pengajuan' => strtoupper($this->request->getPost('tujuan_pengajuan')),
            'status_sipil' => strtoupper($this->request->getPost('status_sipil')),
            'pekerjaan' => strtoupper($this->request->getPost('pekerjaan')),
        ];

        $id = $model->insert($data);

        return redirect()->to(base_url('/formulir/print_dewasa/' . $id));
    }

    public function printDewasaAuto($id = null)
    {
        $model = new DewasaModel();
        $data = $model->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data tidak ditemukan");
        }

        return view('print_dewasa_auto', $data);
    }

    public function saveAnak()
    {
        $model = new AnakModel();

        $data = [
            'type' => 'anak',
            'nama_anak' => strtoupper($this->request->getPost('nama_anak')),
            'jenis_kelamin_anak' => strtoupper($this->request->getPost('jenis_kelamin_anak')),
            'jenis_permohonan_paspor' => strtoupper($this->request->getPost('jenis_permohonan_paspor')),
            'tempat_lahir_anak' => strtoupper($this->request->getPost('tempat_lahir_anak')),
            'tanggal_lahir_anak' => strtoupper($this->request->getPost('tanggal_lahir_anak')),
            'nik_kia' => strtoupper($this->request->getPost('nik_kia')),
            'tanggal_diberikan' => strtoupper($this->request->getPost('tanggal_diberikan')),
            'berlaku_sampai' => strtoupper($this->request->getPost('berlaku_sampai')),
            'alamat_anak' => strtoupper($this->request->getPost('alamat_anak')),
            'no_hp_ortu' => strtoupper($this->request->getPost('no_hp_ortu')),
            'nama_ibu' => strtoupper($this->request->getPost('nama_ibu')),
            'tempat_tanggal_lahir_ibu' => strtoupper($this->request->getPost('tempat_tanggal_lahir_ibu')),
            'no_ktp_ibu' => strtoupper($this->request->getPost('no_ktp_ibu')),
            'tanggal_diberikan_ktp_ibu' => strtoupper($this->request->getPost('tanggal_diberikan_ktp_ibu')),
            'berlaku_sampai_ktp_ibu' => strtoupper($this->request->getPost('berlaku_sampai_ktp_ibu')),
            'nama_ayah' => strtoupper($this->request->getPost('nama_ayah')),
            'tempat_tanggal_lahir_ayah' => strtoupper($this->request->getPost('tempat_tanggal_lahir_ayah')),
            'no_ktp_ayah' => strtoupper($this->request->getPost('no_ktp_ayah')),
            'tanggal_diberikan_ktp_ayah' => strtoupper($this->request->getPost('tanggal_diberikan_ktp_ayah')),
            'berlaku_sampai_ktp_ayah' => strtoupper($this->request->getPost('berlaku_sampai_ktp_ayah')),
            'no_paspor_ayah' => strtoupper($this->request->getPost('no_paspor_ayah')),
            'tanggal_diberikan_paspor_ayah' => strtoupper($this->request->getPost('tanggal_diberikan_paspor_ayah')),
            'berlaku_sampai_paspor_ayah' => strtoupper($this->request->getPost('berlaku_sampai_paspor_ayah')),
            'pengajuan_paspor' => strtoupper($this->request->getPost('pengajuan_paspor')),
            'negara_tujuan' => strtoupper($this->request->getPost('negara_tujuan')),
            'pekerjaan' => strtoupper($this->request->getPost('pekerjaan')),
        ];

        $model->insert($data);

        return view('print_anak', $data);
    }
    
    // public function printAnakAuto($id = null)
    // {
    //     $model = new AnakModel();
    //     $data = $model->find($id);

    //     if (!$data) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException("Data tidak ditemukan");
    //     }

    //     return view('print_anak_auto', $data);
    // } 
}
