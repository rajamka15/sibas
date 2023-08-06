<?php

namespace App\Controllers;

class DataPendudukController extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $penduduk = $db->table('penduduk');

        // Ambil semua data yang ada pada table penduduk

        $query=$penduduk->select('*')
        ->join('kartu_keluarga', 'kartu_keluarga.id_kk = penduduk.id_kk', "left")
        ->orderBy('kartu_keluarga.id_kk', "asc")
        ->get();
        $result=$query->getResultArray();

        // Kirim data ke view
        $data = [
            "penduduk_list" => $result
        ];
        return view('master_data/data_penduduk/index', $data);
    }
    public function tambah(){
        // untuk mengambil data id
        $kk = new \App\Models\KartuKeluargaModel();

        $getData = $kk->findAll();

        $data = [
            "kk" => $getData
        ];
        return view("master_data/data_penduduk/add",$data);
    }
        

    public function submit_tambah(){
        //variable di Controller merupakan id dari kolom pada database didata yang ada pada controller, sedangkan yg dikurung getGet nama dari tipe data view pada database
        $id_kk = $this->request->getPost('kk');
        $is_kepala_keluarga = $this->request->getPost('is_kepala_keluarga');
        $nik = $this->request->getPost('nik');
        $nama = $this->request->getPost('nama');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $agama = $this->request->getPost('agama');
        $pendidikan = $this->request->getPost('pendidikan');
        $pekerjaan = $this->request->getPost('pekerjaan');
        $penghasilan = $this->request->getPost('penghasilan');
        $pengeluaran = $this->request->getPost('pengeluaran');
        $sumber_air = $this->request->getPost('sumber_air');
        $status_kawin = $this->request->getPost('status_kawin');
        $status_rumah = $this->request->getPost('status_rumah');
        $daya_listrik = $this->request->getPost('daya_listrik');
        $transportasi = $this->request->getPost('transportasi');

        $data = [
            "id_kk" => $id_kk,
            "is_kepala_keluarga" => $is_kepala_keluarga,
            "nik" => $nik,
            "nama" => $nama,
            "jenis_kelamin" => $jenis_kelamin,
            "tempat_lahir" => $tempat_lahir,
            "tanggal_lahir" => $tanggal_lahir,
            "agama" => $agama,
            "pendidikan" => $pendidikan,
            "pekerjaan" => $pekerjaan,
            "penghasilan" => $penghasilan,
            "pengeluaran" => $pengeluaran,
            "sumber_air" => $sumber_air,
            "status_kawin" => $status_kawin,
            "status_rumah" => $status_rumah,
            "daya_listrik" => $daya_listrik,
            "transportasi" => $transportasi
        ];

        // ** Buat Object dari Class Model

        $penduduk = new \App\Models\PendudukModel();

        $displayMessage = [
            "message" => "",
            "url" => base_url()."penduduk",
            "type" => ""
        ];

        // Cek KK
        $checkKepalaKeluarga = $penduduk
        ->where('id_kk', $id_kk)
        ->where('is_kepala_keluarga', "1")
        ->first();

        $checkID = $penduduk->where('nik', $nik)->first();

        if ($checkKepalaKeluarga){
            $displayMessage["message"] = "Sudah Ada Kepala Keluarga untuk NIK ".$nik."";
            $displayMessage["type"] = "error";
        }
        if ($checkID){
            $displayMessage["message"] = "Tidak dapat menambah No KK ".$nik. " Karena sudah ada";
            $displayMessage["type"] = "error";

        }else{

        $insert = $penduduk->insert($data, false);

        $this->update_jumlah_tanggungan($id_kk);

        if($insert){
            $displayMessage["message"] = "Tambah Data Berhasil!";
            $displayMessage["type"] = "success";
        }else {
            $displayMessage["message"] = "Tidak dapat menambah Data";
            $displayMessage["type"] = "error";
            }
        }
        return view("components/alert", $displayMessage);
    }

    public function delete_penduduk () {
        $id = $this->request->getGet('id');
        $id_kk  = $this->request->getGet('id_kk');
        
        // ** Buat Object dari Class Model

        $penduduk = new \App\Models\PendudukModel();
        
        $delete = $penduduk->delete($id);
        
        $this->update_jumlah_tanggungan($id_kk);

        $displayMessage = [
            "message" => "",
            "url" => base_url()."penduduk",
            "type" => ""

        ];
        if($delete){
            $displayMessage["message"] = "Delete Data Berhasil!";
            $displayMessage["type"] = "success";
        } else {
            $displayMessage["message"] = "Tidak dapat menghapus Data";
            $displayMessage["type"] = "error";
        }
        return view("components/alert", $displayMessage);
    }

    public function edit_penduduk() {
        $id = $this->request->getGet('id');

        // untuk mengambil data id
        $penduduk = new \App\Models\PendudukModel();

        $getData = $penduduk->find($id);

        $data = [
            "penduduk" => $getData
        ];

        return view('master_data/data_penduduk/edit', $data);
    }

    public function submit_edit(){
        $id = $this->request->getPost('id');
        // $nik = $this->request->getPost('nik');
        $nama = $this->request->getPost('nama');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $agama = $this->request->getPost('agama');
        $pendidikan = $this->request->getPost('pendidikan');
        $pekerjaan = $this->request->getPost('pekerjaan');
        $penghasilan = $this->request->getPost('penghasilan');
        $pengeluaran = $this->request->getPost('pengeluaran');
        $sumber_air = $this->request->getPost('sumber_air');
        $status_kawin = $this->request->getPost('status_kawin');
        $status_rumah = $this->request->getPost('status_rumah');
        $daya_listrik = $this->request->getPost('daya_listrik');
        $transportasi = $this->request->getPost('transportasi');
        $is_kepala_keluarga = $this->request->getPost('is_kepala_keluarga');

        $data = [
            // "nik" => $nik,
            "nama" => $nama,
            "jenis_kelamin" => $jenis_kelamin,
            "tempat_lahir" => $tempat_lahir,
            "tanggal_lahir" => $tanggal_lahir,
            "agama" => $agama,
            "pendidikan" => $pendidikan,
            "pekerjaan" => $pekerjaan,
            "penghasilan" => $penghasilan,
            "pengeluaran" => $pengeluaran,
            "sumber_air" => $sumber_air,
            "status_kawin" => $status_kawin,
            "status_rumah" => $status_rumah,
            "daya_listrik" => $daya_listrik,
            "transportasi" => $transportasi,
            "is_kepala_keluarga" => $is_kepala_keluarga
        ];

        // ** Buat Object dari Class Model

        $penduduk = new \App\Models\PendudukModel();

        $displayMessage = [
            "message" => "",
            "url" => base_url()."penduduk",
            "type" => ""
        ];

        $update = $penduduk->update($id, $data);

        if($update){
            $displayMessage["message"] = "Update Data Berhasil!";
            $displayMessage["type"] = "success";
        } else {
            $displayMessage["message"] = "Tidak dapat Update Data";
            $displayMessage["type"] = "error";
        }
        return view("components/alert", $displayMessage);
    }

    function update_jumlah_tanggungan($id_kk) {

        // Buat Objek dari Class Anggota
        $anggota = new \App\Models\PendudukModel();

        // Buat Objek dari Class PendudukModel
        $kartu_keluarga = new \App\Models\KartuKeluargaModel();

        $countAnggota = $anggota->where("id_kk",$id_kk)->countAllResults();

        $jumlah_tanggungan = $countAnggota-=1;

        $update = $kartu_keluarga->update($id_kk, [
            'jumlah_tanggungan' => $jumlah_tanggungan
        ]);
    }
    
    
}
