<?php

namespace App\Controllers;

class KriteriaBansosController extends BaseController
{
    public function index()
    {
        // // Buat Objek dari Class PendudukModel
        // $periodeBansos = new \App\Models\PeriodeBansosModel();

        // // Ambil semua data yang ada pada table penduduk
        // $getData = $periodeBansos->findAll();

        // // Kirim data ke view
        // $data = [
        //     "periode_bansos_list" => $getData
        // ];
        return view('penentuan_bansos/kriteria_bansos/index');
    }
    public function tambah(){
        return view("master_data/periode_bansos/add");
    }

    public function submit_tambah(){
        $nama_periode = $this->request->getPost('nama_periode');
        $kuota = $this->request->getPost('kuota');
        $tgl_awal = $this->request->getPost('tgl_awal');
        $tgl_akhir = $this->request->getPost('tgl_akhir');
        $keterangan = $this->request->getPost('keterangan');
        $tgl_awal = date('Y-m-d', strtotime($tgl_awal));
        $tgl_akhir = date('Y-m-d', strtotime($tgl_akhir));

        $data = [
            "nama_periode" => $nama_periode,
            "kuota" => $kuota,
            "tgl_awal" => $tgl_awal,
            "tgl_akhir" => $tgl_akhir,
            "keterangan" => $keterangan
        ];

        // ** Buat Object dari Class Model

        $periode = new \App\Models\PeriodeBansosModel();

        $displayMessage = [
            "message" => "",
            "url" => base_url()."periode_bansos",
            "type" => ""
        ];

        $insert = $periode->insert($data, false);

        if($insert){
            $displayMessage["message"] = "Tambah Data Berhasil!";
            $displayMessage["type"] = "success";
        }else {
            $displayMessage["message"] = "Tidak dapat menambah Data";
            $displayMessage["type"] = "error";
            }
        return view("components/alert", $displayMessage);
    }

    public function delete_periode () {
        $id_periode = $this->request->getGet('id_periode');
        
        // ** Buat Object dari Class Model

        $periode = new \App\Models\PeriodeBansosModel();
        
        $delete = $periode->delete($id_periode);
        $displayMessage = [
            "message" => "",
            "url" => base_url()."periode_bansos",
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

    public function edit_periode() {
        $id_periode = $this->request->getGet('id_periode');

        // untuk mengambil data id
        $periode = new \App\Models\PeriodeBansosModel();

        $getData = $periode->find($id_periode);

        $data = [
            "periode" => $getData
        ];

        return view('master_data/periode_bansos/edit', $data);
    }

    public function submit_edit(){
        $id_periode = $this->request->getPost('id_periode');
        $nama_periode = $this->request->getPost('nama_periode');
        $kuota = $this->request->getPost('kuota');
        $tgl_awal = $this->request->getPost('tgl_awal');
        $tgl_akhir = $this->request->getPost('tgl_akhir');
        $keterangan = $this->request->getPost('keterangan');

        $tgl_awal = date('Y-m-d', strtotime($tgl_awal));
        $tgl_akhir = date('Y-m-d', strtotime($tgl_akhir));

        $data = [
            "nama_periode" => $nama_periode,
            "kuota" => $kuota,
            "tgl_awal" => $tgl_awal,
            "tgl_akhir" => $tgl_akhir,
            "keterangan" => $keterangan
        ];

        // ** Buat Object dari Class Model

        $periode = new \App\Models\PeriodeBansosModel();

        $displayMessage = [
            "message" => "",
            "url" => base_url()."periode_bansos",
            "type" => ""
        ];

        $update = $periode->update($id_periode, $data);

        if($update){
            $displayMessage["message"] = "Update Data Berhasil!";
            $displayMessage["type"] = "success";
        } else {
            $displayMessage["message"] = "Tidak dapat Update Data";
            $displayMessage["type"] = "error";
        }
        return view("components/alert", $displayMessage);
    }
    
    
}
