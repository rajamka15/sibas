<?php

namespace App\Controllers;

class DataKartuKeluargaController extends BaseController
{
    public function index () {
        // Buat Objek dari Class PendudukModel
        $kartu_keluarga = new \App\Models\KartuKeluargaModel();
        
        // Buat Objek dari Class Anggota
        $anggota = new \App\Models\PendudukModel();

        // Ambil semua data yang ada pada table penduduk
        $getData = $kartu_keluarga->findAll();

        $result = [];
        foreach($getData as $item) {
            $countAnggota = $anggota->where("id_kk", $item['id_kk'])->countAllResults();
            array_push($result, [
                "id_kk" => $item["id_kk"],
                "no_kk" => $item["no_kk"],
                "nama_kepala_kk" => $item["nama_kepala_kk"],
                "jumlah_anggota" => $countAnggota,
                "jumlah_tanggungan" => $item["jumlah_tanggungan"]
            ]);
        }
        
        // Kirim data ke view
        $data = [
            "kk_list" => $result
        ];
        return view('master_data/data_kk/index', $data);
    }

    public function tambah (){
        return view('master_data/data_kk/add');
    }

    public function submit_tambah(){
        $no_kk = $this->request->getPost('no_kk');
        $nama_kepala_kk = $this->request->getPost('nama_kepala_kk');

        $data = [
            "no_kk" => $no_kk,
            "nama_kepala_kk" => $nama_kepala_kk
        ];

        // ** Buat Object dari Class Model

        $kartu_keluarga = new \App\Models\KartuKeluargaModel();

        $displayMessage = [
            "message" => "",
            "url" => base_url()."kartu_keluarga",
            "type" => ""
        ];

        // Cek ID Kartu Keluarga
        $checkID = $kartu_keluarga->where('no_kk', $no_kk)->first();
        if ($checkID){
            $displayMessage["message"] = "Tidak dapat menambah No KK ".$no_kk. " Karena sudah ada";
            $displayMessage["type"] = "error";
        }else{

            $insert = $kartu_keluarga->insert($data, false);

            if($insert){
                $displayMessage["message"] = "Tambah Data Berhasil!";
                $displayMessage["type"] = "success";
            } else {
                $displayMessage["message"] = "Tidak dapat menambah Data";
                $displayMessage["type"] = "error";
        } 
    }
        return view("components/alert", $displayMessage);
    }

    public function delete_kk(){
        $id_kk= $this->request->getGet('id_kk');

        // ** Buat Object dari Class Model

        $kartu_keluarga = new \App\Models\KartuKeluargaModel();

        $delete = $kartu_keluarga->delete($id_kk);

        $displayMessage = [
            "message" => "",
            "url" => base_url()."kartu_keluarga",
            "type" => ""
        ];

        if($delete){
            $displayMessage["message"] = "Delete Data Berhasil!";
            $displayMessage["type"] = "success";
        } else {
            $displayMessage["message"] = "Tidak dapat menambah Data";
            $displayMessage["type"] = "error";
        }
        return view("components/alert", $displayMessage);
    }

    public function edit_kk() {
        //variable di Controller merupakan id dari tipe data yang ada pada view, sedangkan yg dikurung getGet nama kolom pada database
        $id_kk = $this->request->getGet('id_kk');

        // untuk mengambil data id
        $kartu_keluarga = new \App\Models\KartuKeluargaModel();

        $getData = $kartu_keluarga->find($id_kk);

        $data = [
            "kartu_keluarga" => $getData
        ];

        return view('master_data/data_kk/edit', $data);
    }

    public function submit_edit(){
        $id_kk = $this->request->getPost('id_kk');
        $no_kk = $this->request->getPost('no_kk');
        $nama_kepala_kk = $this->request->getPost('nama_kepala_kk');
    
        $data = [
            "no_kk" => $no_kk,
            "nama_kepala_kk" => $nama_kepala_kk
        ];

        // ** Buat Object dari Class Model

        $kartu_keluarga = new \App\Models\KartuKeluargaModel();

        $displayMessage = [
            "message" => "",
            "url" => base_url()."kartu_keluarga",
            "type" => ""
        ];

                // // Cek ID Kartu Keluarga
                // $checkID = $kartu_keluarga->where('no_kk', $no_kk)->first();
                // if ($checkID){
                //     $displayMessage["message"] = "Tidak dapat menambah No KK ".$no_kk. " Karena sudah ada";
                //     $displayMessage["type"] = "error";
                // }else{

            $update = $kartu_keluarga->update($id_kk, $data);

            if($update){
                $displayMessage["message"] = "Tambah Data Berhasil!";
                $displayMessage["type"] = "success";
            } else {
                $displayMessage["message"] = "Tidak dapat menambah Data";
                $displayMessage["type"] = "error";
            }
            return view("components/alert", $displayMessage);
        } 
}