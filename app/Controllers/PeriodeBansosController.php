<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
class PeriodeBansosController extends BaseController
{
  /**
 * Access to current session.
 *
 * @var \CodeIgniter\Session\Session
 */
protected $session;

/**
 * Authentication settings.
 */
protected $config;


  //--------------------------------------------------------------------

public function __construct()
{
  // log_message('debug', 'Some variable did not contain a value.');

  // error_log("Big trouble, we're all out of FOOs!", 1,"operator@example.com");
  // start session
  $this->session = Services::session();
  $this->db      = \Config\Database::connect();
           // error_log(print_r($this->session->userData['id'], true), 0);

}
    public function index()
    {
        // Buat Objek dari Class PendudukModel
        $periodeBansos = new \App\Models\PeriodeBansosModel();

        // Ambil semua data yang ada pada table penduduk
        $getData = $periodeBansos->findAll();

        // Kirim data ke view
        $data = [
            "periode_bansos_list" => $getData
        ];
        return view('penentuan_bansos/periode_bansos/index', $data);
    }
    public function tambah(){
        return view("penentuan_bansos/periode_bansos/add");
    }
    public function view_hasil(){
      // Buat Objek dari Class PendudukModel
      $periodeBansos = new \App\Models\PeriodeBansosModel();

      // Ambil semua data yang ada pada table penduduk
      $getData = $periodeBansos->findAll();

      // Kirim data ke view
      $data = [
          "periode_bansos_list" => $getData
      ];
      if(isset($_GET['penerima']) && $_GET['penerima'] == 1){
        return view("penentuan_bansos/hasil_bansos/penerima_bansos", $data);
      }
        return view("penentuan_bansos/hasil_bansos/index", $data);
    }
    public function config_kriteria(){
      // Buat Objek dari Class PendudukModel
      $kriteria = new \App\Models\KriteriaBansosModel();

			$id_periode = $this->request->getGet('id_periode');
      // Ambil semua data yang ada pada table penduduk
      $getData = $kriteria->findAll();
      $builder = 	$this->db->table('setting_bobot_kriteria t0');
      $builder->join('kriteria as t1', 't1.id_kriteria = t0.id_kriteria', 'inner');
      $builder->where('t0.id_bansos', $id_periode);
    // $builder = $db->table('users');
       $get_data_setting = $builder->get();
        $data = [
            "nama_periode" => $this->request->getGet('nama_periode'),
            "id_periode" => $this->request->getGet('id_periode'),
            "data_kriteria" => $getData,
            "data_setting" => $get_data_setting->getResultArray()
        ];
        return view("penentuan_bansos/periode_bansos/add_kriteria",$data);
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

        return view('penentuan_bansos/periode_bansos/edit', $data);
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

    public function submit_kriteria(){
        //variable di Controller merupakan id dari kolom pada database didata yang ada pada controller, sedangkan yg dikurung getGet nama dari tipe data view pada database
        $id_periode = $this->request->getPost('id_periode');
        $is_edit = $this->request->getPost('is_edit');
        $datas = [];
          $tmp_data = [
              'id_kriteria' => $_POST['id_kriteria'],
              // 'id_transaksi' => $last_id,
              'bobot' => $_POST['bobot'],
          ];

          foreach ($tmp_data as $k => $v) {
              for($i = 0; $i < count($v);$i++) {
                  $datas[$i][$k] = $v[$i];
                  $datas[$i]['id_bansos'] = $id_periode;
              }
          }

          $builder = $this->db->table('setting_bobot_kriteria');
          if($is_edit == 1){
            $insert = $builder->updateBatch($datas,['id_kriteria','id_bansos']);
          }else{
          $insert = $builder->insertBatch($datas);
          }


        $displayMessage = [
            "message" => "",
            "url" => base_url()."periode_bansos",
            "type" => ""
        ];

        if($insert){
            $displayMessage["message"] = "Tambah Data Berhasil!";
            $displayMessage["type"] = "success";
        }else {
            $displayMessage["message"] = "Tidak dapat menambah Data";
            $displayMessage["type"] = "error";
        }
        return view("components/alert", $displayMessage);
    }
    public function submit_kriteria_old(){
        //variable di Controller merupakan id dari kolom pada database didata yang ada pada controller, sedangkan yg dikurung getGet nama dari tipe data view pada database
        $id_periode = $this->request->getPost('id_periode');
        $nama_kriteria = $this->request->getPost('nama_kriteria');

        $data = [

        ];

        foreach ($nama_kriteria as $item) {
            array_push ($data, [
                'id_periode' => $id_periode,
                'nama_kriteria' => $item
            ]);
        }


         $builder = $this->db->table('setting_bobot_kriteria');
         $insert = $builder->insertBatch($data);

        $displayMessage = [
            "message" => "",
            "url" => base_url()."periode_bansos",
            "type" => ""
        ];

        if($insert){
            $displayMessage["message"] = "Tambah Data Berhasil!";
            $displayMessage["type"] = "success";
        }else {
            $displayMessage["message"] = "Tidak dapat menambah Data";
            $displayMessage["type"] = "error";
        }
        return view("components/alert", $displayMessage);
    }
    function posting_bansos(){
        $id_periode = $this->request->getPost('id_periode');

        $db = db_connect();
        //blocking insert
        $table_setting1 = $this->db->table('setting_bobot_kriteria t');
        $table_setting1->select('*');
        $table_setting1->join('kriteria as t2', 't2.id_kriteria = t.id_kriteria');
        $table_setting1->where('id_bansos=', $id_periode);
        $data_setting = $table_setting1->get();
        if(count($data_setting->getResult()) == 0){
          $response['success'] = false;
          $response['msg'] = 'Gagal Posting Bansos<br>Pastikan Periode Bansos Ini sudah DI setting Kriteria !!';
          echo json_encode($response);
          exit();
        }
        $cek_insert = $this->db->table('posting_bansos');
        $cek_insert->where('id_periode=', $id_periode);
        $data_posting = $cek_insert->get();
        if(count($data_posting->getResult()) > 0){
          $response['success'] = false;
          $response['msg'] = 'Gagal Posting Bansos<br>Bansos Sudah diposting, cek kembali postingan Bansos di halaman Hasil Bansos!!';
          echo json_encode($response);
          exit();
        }
        // error_log(print_r($db , true), 0);
        $get_kk_penduduk = $this->get_pendududk_kriteria();

        // if(count($data_setting->getResult()) == 0){
        //
        // }
        // $kriteria_data = $builder_kriteria->getResult();
        $arrayNormalisasi = array();
        $arrayNormalisasi_x_bobot = array();
        $arrayFirst = array();
        $nilai_pembagi = array();
        $sum_paw = 0;
        foreach ($get_kk_penduduk as $key => $value) {
          // code...
          // $arrayNormalisasi[$key]['nama'] = $value->nama_kepala_kk;

          $arrayFirst[$value->id_pendidikan]['pendidikan'][]=[
            'nilai' => pow($value->n_pendidikan,2),
            'first' => $value->n_pendidikan,
            'id_kk' => $value->id_kk,
            'nama' => $value->nama_kepala_kk
          ];


          $arrayFirst[$value->id_jumlah_tanggungan]['jumlah_tanggungan'][]=[
            'nilai' => pow($value->n_jumlah_tanggungan,2),
            'first' => $value->n_jumlah_tanggungan,
            'id_kk' => $value->id_kk,
            'nama' => $value->nama_kepala_kk
          ];

          $arrayFirst[$value->id_penghasilan]['penghasilan'][]=[
            'nilai' => pow($value->n_penghasilan,2),
            'first' => $value->n_penghasilan,
            'id_kk' => $value->id_kk,
            'nama' => $value->nama_kepala_kk
          ];

          $arrayFirst[$value->id_pengeluaran]['pengeluaran'][] =[
            'nilai' => pow($value->n_pengeluaran,2),
            'first' => $value->n_pengeluaran,
            'id_kk' => $value->id_kk,
            'nama' => $value->nama_kepala_kk
          ];

          $arrayFirst[$value->id_sumber_air]['sumber_air'][] =[
            'nilai' => pow($value->n_sumber_air,2),
            'first' => $value->n_sumber_air,
            'id_kk' => $value->id_kk,
            'nama' => $value->nama_kepala_kk
          ];

          $arrayFirst[$value->id_status_rumah]['status_rumah'][] =[
            'nilai' => pow($value->n_status_rumah,2),
            'first' => $value->n_status_rumah,
            'id_kk' => $value->id_kk,
            'nama' => $value->nama_kepala_kk
          ];

          $arrayFirst[$value->id_daya]['daya'][] =[
            'nilai' => pow($value->n_daya,2),
            'first' => $value->n_daya,
            'id_kk' => $value->id_kk,
            'nama' => $value->nama_kepala_kk
          ];

          $arrayFirst[$value->id_transportasi]['transportasi'][] =[
            'nilai' => pow($value->n_transportasi,2),
            'first' => $value->n_transportasi,
            'id_kk' => $value->id_kk,
            'nama' => $value->nama_kepala_kk
          ];

          $arrayFirst[$value->id_umur]['umur'][] =[
            'nilai' => pow($value->n_umur,2),
            'first' => $value->n_umur,
            'id_kk' => $value->id_kk,
            'nama' => $value->nama_kepala_kk
          ];
        }
        // error_log(print_r($arrayFirst[2]['jumlah_tanggungan'] , true), 0);
        // error_log(print_r(array_sum(array_column($arrayFirst[2]['jumlah_tanggungan'], 'nilai')) , true), 0);
        // exit();
        foreach ($arrayFirst as $key => $pembagi) {
          // code...

          // error_log(print_r($pembagi , true), 0);
          // error_log(print_r(array_sum($pembagi['pendidikan']) , true), 0);
            if(
              array_key_exists('pendidikan',$pembagi )
            ){
              $nilai_pembagi[$key] = round(sqrt(array_sum(array_column($pembagi['pendidikan'],'nilai'))),8);
              foreach ($pembagi['pendidikan'] as $k => $v) {
                // code...
                $nilai_normalisasi = $v['first'] / round(sqrt(array_sum(array_column($pembagi['pendidikan'],'nilai'))),8);
                $arrayNormalisasi[$key][] = [
                  'id_kk' => $v['id_kk'],
                  'nama' => $v['nama'],
                  'nilai' => round($nilai_normalisasi,10)
                ];
              }
            }

            if(
              array_key_exists('jumlah_tanggungan',$pembagi )
            ){
            $nilai_pembagi[$key] = round(sqrt(array_sum(array_column($pembagi['jumlah_tanggungan'],'nilai'))),8);
            foreach ($pembagi['jumlah_tanggungan'] as $k => $v) {
              // code...
              $nilai_normalisasi = $v['first'] / round(sqrt(array_sum(array_column($pembagi['jumlah_tanggungan'],'nilai'))),8);
              $arrayNormalisasi[$key][] = [
                'id_kk' => $v['id_kk'],
                'nama' => $v['nama'],
                'nilai' => round($nilai_normalisasi,10)
              ];
            }
            }

            if(
              array_key_exists('penghasilan',$pembagi )
            ){
                $nilai_pembagi[$key] = round(sqrt(array_sum(array_column($pembagi['penghasilan'],'nilai'))),8);
                foreach ($pembagi['penghasilan'] as $k => $v) {
                  // code...
                  $nilai_normalisasi = $v['first'] / round(sqrt(array_sum(array_column($pembagi['penghasilan'],'nilai'))),8);
                  $arrayNormalisasi[$key][] = [
                    'id_kk' => $v['id_kk'],
                    'nama' => $v['nama'],
                    'nilai' => round($nilai_normalisasi,10)
                  ];
                }
              }

            if(
              array_key_exists('pengeluaran',$pembagi )
            ){
              $nilai_pembagi[$key] = round(sqrt(array_sum(array_column($pembagi['pengeluaran'],'nilai'))),8);
              foreach ($pembagi['pengeluaran'] as $k => $v) {
                // code...
                $nilai_normalisasi = $v['first'] / round(sqrt(array_sum(array_column($pembagi['pengeluaran'],'nilai'))),8);
                $arrayNormalisasi[$key][] = [
                  'id_kk' => $v['id_kk'],
                  'nama' => $v['nama'],
                  'nilai' => round($nilai_normalisasi,10)
                ];
              }
            }

            if(
              array_key_exists('sumber_air',$pembagi )
            ){
              $nilai_pembagi[$key] = round(sqrt(array_sum(array_column($pembagi['sumber_air'],'nilai'))),8);
              foreach ($pembagi['sumber_air'] as $k => $v) {
                // code...
                $nilai_normalisasi = $v['first'] / round(sqrt(array_sum(array_column($pembagi['sumber_air'],'nilai'))),8);
                $arrayNormalisasi[$key][] = [
                  'id_kk' => $v['id_kk'],
                  'nama' => $v['nama'],
                  'nilai' => round($nilai_normalisasi,10)
                ];
              }
            }

            if(
              array_key_exists('status_rumah',$pembagi )
            ){
              $nilai_pembagi[$key] = round(sqrt(array_sum(array_column($pembagi['status_rumah'],'nilai'))),8);
              foreach ($pembagi['status_rumah'] as $k => $v) {
                // code...
                $nilai_normalisasi = $v['first'] / round(sqrt(array_sum(array_column($pembagi['status_rumah'],'nilai'))),8);
                $arrayNormalisasi[$key][] = [
                  'id_kk' => $v['id_kk'],
                  'nama' => $v['nama'],
                  'nilai' => round($nilai_normalisasi,10)
                ];
              }
            }

            if(
              array_key_exists('daya',$pembagi )
            ){
              $nilai_pembagi[$key] = round(sqrt(array_sum(array_column($pembagi['daya'],'nilai'))),8);
              foreach ($pembagi['daya'] as $k => $v) {
                // code...
                $nilai_normalisasi = $v['first'] / round(sqrt(array_sum(array_column($pembagi['daya'],'nilai'))),8);
                $arrayNormalisasi[$key][] = [
                  'id_kk' => $v['id_kk'],
                  'nama' => $v['nama'],
                  'nilai' => round($nilai_normalisasi,10)
                ];
              }
            }

            if(
              array_key_exists('transportasi',$pembagi )
            ){
              $nilai_pembagi[$key] = round(sqrt(array_sum(array_column($pembagi['transportasi'],'nilai'))),8);
              foreach ($pembagi['transportasi'] as $k => $v) {
                // code...
                $nilai_normalisasi = $v['first'] / round(sqrt(array_sum(array_column($pembagi['transportasi'],'nilai'))),8);
                $arrayNormalisasi[$key][] = [
                  'id_kk' => $v['id_kk'],
                  'nama' => $v['nama'],
                  'nilai' => round($nilai_normalisasi,10)
                ];
              }
            }

            if(
              array_key_exists('umur',$pembagi )
            ){
              $nilai_pembagi[$key] = round(sqrt(array_sum(array_column($pembagi['umur'],'nilai'))),8);
              foreach ($pembagi['umur'] as $k => $v) {
                // code...
                $nilai_normalisasi = $v['first'] / round(sqrt(array_sum(array_column($pembagi['umur'],'nilai'))),8);
                $arrayNormalisasi[$key][] = [
                  'id_kk' => $v['id_kk'],
                  'nama' => $v['nama'],
                  'nilai' => round($nilai_normalisasi,10)
                ];
              }
            }

        }

        // error_log(print_r($arrayNormalisasi , true), 0);
        // exit(  );
        $data_update_pembagi = array();
        foreach ($nilai_pembagi as $key => $value) {
          // code...
          $data_update_pembagi[] = [
            'id_kriteria' => $key,
            'id_bansos' => $id_periode,
            'pembagi' => floatVal($value),
          ];
        }
        $table_setting = $this->db->table('setting_bobot_kriteria');
        $update = $table_setting->updateBatch($data_update_pembagi,['id_kriteria','id_bansos']);

        $data_insert_posting_t1 = array();
        foreach ($arrayNormalisasi as $key => $value) {
          // code...
          foreach ($value as $k_n => $v_n) {
            // code...
            $data_insert_posting_t1[] = [
              'id_kriteria' => $key,
              'id_periode' => $id_periode,
              'id_kk' => $v_n['id_kk'],
              'tahap_proses' => 1,
              'nilai' => $v_n['nilai'],
            ];
          }
        }
        $table_posting_bansos = $this->db->table('posting_bansos');
        $insert1 = $table_posting_bansos->insertBatch($data_insert_posting_t1);

        $data_insert_posting_t2 = array();
        foreach ($data_setting->getResult() as $key_setting => $value_setting) {
          // code...
          foreach ($arrayNormalisasi as $key => $value) {
            // code...
            foreach ($value as $v_n) {
              if($key == $value_setting->id_kriteria){
                $nilai_normalisai_x_bobot = $value_setting->type_kriteria == 1 ?
                (-1* $value_setting->bobot * $v_n['nilai']) :
                ( $value_setting->bobot * $v_n['nilai']);
                $data_insert_posting_t2[] = [
                  'id_kriteria' => $key,
                  'id_periode' => $id_periode,
                  'id_kk' => $v_n['id_kk'],
                  'tahap_proses' => 2,
                  'nilai' => round($nilai_normalisai_x_bobot,9),
                ];
              }
            }
          }
        }

        $insert2 = $table_posting_bansos->insertBatch($data_insert_posting_t2);
        $response = array();

        if($insert1 && $insert2){
          $response['success'] = true;
          $response['msg'] = 'ok';
        }else{
          $response['success'] = false;
          $response['msg'] = 'Gagal Posting Bansos';
        }
        echo json_encode($response);
        // $query = $this->db->getLastQuery();
        // error_log(print_r($query , true), 0);
        // error_log(print_r($data_insert_posting_t2 , true), 0);
        // exit();

    }
    public function hasil_bansos(){
      $id_periode = $this->request->getGet('id_periode');
      $get_data_bansos = $this->db->query("
      SELECT * FROM posting_bansos p
      INNER JOIN kartu_keluarga k ON k.id_kk = p.id_kk
      INNER JOIN periode_bansos b ON b.id_periode = p.id_periode
      INNER JOIN kriteria kr ON kr.id_kriteria = p.id_kriteria
      INNER JOIN setting_bobot_kriteria s ON s.id_bansos = b.id_periode AND kr.id_kriteria = s.id_kriteria
      WHERE p.id_periode = $id_periode
      GROUP BY p.id_posting #, s.id_kriteria
      ORDER BY k.nama_kepala_kk, p.tahap_proses, kr.id_kriteria
      ");
      $group_tahap_bansos = $this->group_by('tahap_proses',$get_data_bansos->getResultArray());

      $data_temp_nama = array();
      foreach ($group_tahap_bansos as $key => $value) {
        // code...
        $data_temp_nama[$key] = $this->group_by('nama_kepala_kk',$value);
      }

      $data_temp_kriteria = array();
      foreach ($data_temp_nama as $key => $value) {
        // code...
        foreach ($value as $key_n => $value_n) {
          // code...
          $data_temp_kriteria[$key][$key_n] = $this->group_by('nama_kriteria',$value_n);
        }
      }

      $get_data_array_bansos = array();
      foreach ($data_temp_kriteria as $key => $value_nama) {
        // code...

        foreach ($value_nama as $key_nama => $value_kriteria) {
          // code...
            $sum_nilai = 0;

          foreach ($value_kriteria as $key_kriteria => $value) {
            // code...

            foreach ($value as $keys) {
              $sum_nilai += floatVal($keys['nilai']) ;
            }


          }
          $get_data_array_bansos[$key][$key_nama] = $value_kriteria;
          if($key == 2){
            $get_data_array_bansos[$key][$key_nama]['Hasil'] = round($sum_nilai,8);
          }

        }
      }
      $data_kriteria_penduduk =json_decode(json_encode($this->get_pendududk_kriteria()), true); ;
      // $get_data_array_bansos[0] = $data_kriteria_penduduk;
      $array_data_penduduk = array();
      foreach ($data_kriteria_penduduk as $key => $value) {
        // code...
        foreach (array_keys($value) as  $v_k) {
          // code...

          if(substr($v_k, 0, 2) == "n_"){
          // error_log(print_r($v_k , true), 0);
            $key_data = explode("_",$v_k);
            // error_log(print_r($key_data , true), 0);
            $k = count($key_data) > 2 ? $key_data[1]." ".$key_data[2] : $key_data[1];
            $array_data_penduduk[$value['nama_kepala_kk']][ucfirst($k)] = $value[$v_k];
          }
        }

      }
      // $hasil_sort  = array_column($get_data_array_bansos, 'Hasil');
      // array_multisort($hasil_sort, SORT_ASC, $driver_rank);
      $response['data_penduduk'] = $array_data_penduduk;
      $response['data_hasil'] = $get_data_array_bansos;
      header("Content-Type: application/json");

      echo json_encode($response);
      // print("<pre>".print_r($response,true)."</pre>");
    }
    function get_pendududk_kriteria(){
      $get = $this->db->query("
      SELECT
      res.id_kk,
      case
      when (COUNT(res.id_kk) - 1) = 0 then getIdKriteria(6)
      when (COUNT(res.id_kk) - 1) > 0 AND (COUNT(res.id_kk) - 1) <= 2 then getIdKriteria(7)
      when (COUNT(res.id_kk) - 1) > 2 AND (COUNT(res.id_kk) - 1) <= 4 then getIdKriteria(8)
      when (COUNT(res.id_kk) - 1) >= 5 then getIdKriteria(9)
      end
       'id_jumlah_tanggungan',
      getIdKriteria(res.pendidikan) 'id_pendidikan',
      getIdKriteria(res.penghasilan) 'id_penghasilan',
      getIdKriteria(res.pengeluaran) 'id_pengeluaran',
      getIdKriteria(res.sumber_air) 'id_sumber_air',
      getIdKriteria(res.status_rumah) 'id_status_rumah',
      getIdKriteria(res.daya_listrik) 'id_daya',
      getIdKriteria(res.transportasi) 'id_transportasi',
      case
      when res.umur >= 20 AND res.umur <= 30 then getIdKriteria(40)
      when res.umur > 30 AND res.umur <= 40 then getIdKriteria(41)
      when res.umur > 40 AND res.umur <= 50 then getIdKriteria(42)
      when res.umur > 50 then getIdKriteria(43)
      ELSE getIdKriteria(40)
      END 'id_umur',
      k.nama_kepala_kk,
      getNilaiSubKriteria(res.pendidikan) 'n_pendidikan',
      case
      when (COUNT(res.id_kk) - 1) = 0 then getNilaiSubKriteria(6)
      when (COUNT(res.id_kk) - 1) > 0 AND (COUNT(res.id_kk) - 1) <= 2 then getNilaiSubKriteria(7)
      when (COUNT(res.id_kk) - 1) > 2 AND (COUNT(res.id_kk) - 1) <= 4 then getNilaiSubKriteria(8)
      when (COUNT(res.id_kk) - 1) >= 5 then getNilaiSubKriteria(9)
      end
       'n_jumlah_tanggungan',
      getNilaiSubKriteria(res.penghasilan) 'n_penghasilan',
      getNilaiSubKriteria(res.pengeluaran) 'n_pengeluaran',
      getNilaiSubKriteria(res.sumber_air) 'n_sumber_air',
      getNilaiSubKriteria(res.status_rumah) 'n_status_rumah',
      getNilaiSubKriteria(res.daya_listrik) 'n_daya',
      getNilaiSubKriteria(res.transportasi) 'n_transportasi',
      case
      when res.umur >= 20 AND res.umur <= 30 then getNilaiSubKriteria(40)
      when res.umur > 30 AND res.umur <= 40 then getNilaiSubKriteria(41)
      when res.umur > 40 AND res.umur <= 50 then getNilaiSubKriteria(42)
      when res.umur > 50 then getNilaiSubKriteria(43)
      ELSE 0
      END 'n_umur'
       FROM (
      SELECT * FROM penduduk p WHERE p.is_kepala_keluarga = 1
      ) res
      INNER JOIN kartu_keluarga k ON k.id_kk = res.id_kk
      GROUP BY res.id_kk
      ORDER BY res.nama
      ")->getResult();

      return $get;
    }
    function group_by($key, $data) {
        $result = array();

        foreach($data as $val) {
            if(array_key_exists($key, $val)){
                $result[$val[$key]][] = $val;
            }else{
                $result[""][] = $val;
            }
        }

        return $result;
    }
}
