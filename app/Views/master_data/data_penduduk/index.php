<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

  
<title>SIBAS | Data Penduduk</title>

<!-- DataTables -->
  

<!-- Content Header (Page header) -->
<div class="content-header"></div><!-- /.container-header -->

<!-- general form elements -->
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Data Penduduk</h3>
</div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="<?php echo base_url() ?>penduduk/tambah" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
    <br><br>
    <div class="table-responsive">
      <table id="table_penduduk" class="display nowrap table table-bordered table-striped">
        <thead>
        <tr>
        <th data-priority="1">
          <input type="checkbox" class="selectAll">
        </th>
        <th>Nama KK</th>
        <th>NIK</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Agama</th>
        <th>Action</th>
        <th></th>
        <th data-priority="1000000">Tanggal Lahir</th>
        <th data-priority="1000000">Pendidikan</th>
        <th data-priority="1000000">Pekerjaan</th>
        <th data-priority="1000000">Penghasilan</th>
        <th data-priority="1000000">Pengeluaran</th>
        <th data-priority="1000000">Sumber Air</th>
        <th data-priority="1000000">Status Kawin</th>
        <th data-priority="1000000">Status Kepemilikan Rumah</th>
        <th data-priority="1000000">Daya Listrik</th>
        <th data-priority="1000000">Transportasi</th>
        <th data-priority="1000000">Kepala Keluarga?</th>
      </tr>
      </thead>
      <tbody>
      <?php
          function get_jeniskelamin($code) {
            if($code == 'L') {
              return 'Laki-laki';
            } 
            return 'Perempuan';
          }
            $get_agama = [
              '1' => 'Islam',
              '2' => 'Protestan',
              '3' => 'Katholik',
              '4' => 'Hindu',
              '5' => 'Buddha',
              '6' => 'Konghucu'
            ];
              
          function get_is_kepala_keluarga($code) {
            if($code == '0') {
              return 'Bukan Kepala Keluarga';
            } 
            return 'Kepala Keluarga';
          }
          foreach($penduduk_list as $data) {
            echo"<tr>";
              echo "<td></td>";
              echo"<td>".$data['nama_kepala_kk']."</td>";
              echo"<td>".$data['nik']."</td>";
              echo"<td>".$data['nama']."</td>";
              echo"<td>".get_jeniskelamin($data['jenis_kelamin'])."</td>";
              echo"<td>".$data['tempat_lahir']."</td>";
              echo"<td>".$get_agama[$data['agama']]."</td>";
              echo"<td>
                <a href='".base_url()."penduduk/edit?id=".$data['id']."' class='btn btn-warning btn-sm'>Edit</a>
                <a onclick='return confirm(\"Apakah anda ingin menghapus data ini?\")' href='".base_url()."penduduk/delete?id=".$data['id']."&id_kk=".$data['id_kk']."' class='btn btn-danger btn-sm'>Delete</a>
                </td>";
              echo"<td><i class='fa fa-plus'></i></td>";
              echo"<td>".$data['tanggal_lahir']."</td>";
              echo"<td>".$data['pendidikan']."</td>";
              echo"<td>".$data['pekerjaan']."</td>";
              echo"<td>".$data['penghasilan']."</td>";
              echo"<td>".$data['pengeluaran']."</td>";
              echo"<td>".$data['sumber_air']."</td>";
              echo"<td>".$data['status_kawin']."</td>";
              echo"<td>".$data['status_rumah']."</td>";
              echo"<td>".$data['daya_listrik']."</td>";
              echo"<td>".$data['transportasi']."</td>";
              echo"<td>".get_is_kepala_keluarga($data['is_kepala_keluarga'])."</td>";
              echo"</tr>";
          }
          ?>
      </tr>
      </table>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>public/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>


<!-- Page specific script -->
<script>
  $(document).ready(function() {
    var tablePenduduk = $("#table_penduduk").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "columnDefs": [
        {
          "orderable": false,
          "className": 'select-checkbox',
          "targets": 0
        },
        {
          "orderable": false,
          "targets": 8
        }
      ],
      responsive: {
        details: {
          type: "column",
          target: 8
        }
      },
      select: {
        style: 'multi',
        selector: 'td:first-child'
      },
      buttons: [
        {
          extend: 'copyHtml5',
          title: 'Data Penduduk',
          exportOptions: {
            columns: [ 0, ':visible' ]
          }
        },
        {
          extend: 'excelHtml5',
          title: 'Data Penduduk',
          exportOptions: {
            columns: ':visible',
            columns: [ 1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19]
          }
        },
        {
            extend: 'pdfHtml5',
            title: 'Data Penduduk',
            exportOptions: {
              columns: ':visible',
              columns: [ 1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19]
            },
            orientation: 'landscape',
            pageSize: 'LEGAL'
        },
        'colvis'
      ]
    }).buttons().container().appendTo('#table_penduduk_wrapper .col-md-6:eq(0)');
    $(".selectAll").click(function() {
      $(".select-checkbox").click()
    })
  }) 
</script>
<?= $this->endSection() ?>   
