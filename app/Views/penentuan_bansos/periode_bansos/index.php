<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>


<title>SIBAS | Periode Program Bansos</title>


<!-- Content Header (Page header) -->
<div class="content-header"></div><!-- /.container-header -->

<!-- /.content-header -->
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Periode Program Bantuan Sosial</h3>
  </div>

  <div class="card-body">
    <a href="<?php echo base_url() ?>periode_bansos/tambah" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
    <br><br>
    <table id="table_periode" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama Periode</th>
          <th>Tanggal Awal</th>
          <th>Tanggal Akhir</th>
          <th>Kuota</th>
          <th>Keterangan</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach($periode_bansos_list as $data) {
            echo"<tr>";
              echo"<td>".$data['nama_periode']."</td>";
              echo"<td>".$data['tgl_awal']."</td>";
              echo"<td>".$data['tgl_akhir']."</td>";
              echo"<td>".$data['kuota']." Orang</td>";
              echo"<td>".$data['keterangan']."</td>";
              echo"<td>
                <div class='dropdown show'>
                  <a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                    Pilih Action
                  </a>
                  <div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
                    <a class='dropdown-item' href='".base_url()."periode_bansos/edit?id_periode=".$data['id_periode']."''>Edit</a>
                    <a class='dropdown-item' <a onclick='return confirm(\"Apakah anda ingin menghapus data ini?\")' href='".base_url()."periode_bansos/delete?id_periode=".$data['id_periode']."'>Delete</a>
                    <a class='dropdown-item' href='".base_url()."periode_bansos/config_kriteria?id_periode=".$data['id_periode']."&nama_periode=".$data['nama_periode']."''>Set Kriteria</a>
                    <a class='dropdown-item btn btn-primary' onclick='postingBansos(".$data['id_periode'].")' href='#''>Posting Bansos</a>
                  </div>";

              echo"</tr>";
          }
        ?>
      </tbody>
    </table>
  </div><!-- /.card-body -->


<!-- jQuery -->
<script src="<?php echo base_url() ?>public/plugins/jquery/jquery.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#table_periode").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#table_periode_wrapper .col-md-6:eq(0)');
  });
  function postingBansos(id_periode){
    let send_data = {
      id_periode: id_periode
    }
    Swal.fire({
              icon: "question",
              title: "Proses Bansos!!",
              html: "Apakah Kamu Yakin Ingin Posting Bansos ini ?",
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Yakin!',
              cancelButtonColor: '#d33',
              cancelButtonText: 'Batal',
              preConfirm: (remark) => {
              ajaxAction(send_data);
          },
          allowOutsideClick: () => !Swal.isLoading()
        });
  }
  function ajaxAction(send_data,message, no_hp){
    var base_url = '<?=base_url()?>';
  $.ajax({
    type: 'POST',
    url: base_url + "periode_bansos/ajax_action",
    dataType: "json",
    data: send_data,
    success: function (res) {
      // console.log(res);
      /*res = JSON.parse(res);*/
      if(res.success){
        Swal.fire(
          'Success!',
          'Posting Bansos Berhasil, Silahkan cek Hasil posting di halaman Posting Bansos !!',
          'success').then(function (e) {
            window.location.reload();
          });
      }else {
        Swal.fire(
          'Error!',
          ''+res.msg,
          'error');
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR.responseJSON);
        console.log(textStatus);
        console.log(errorThrown);
        Swal.fire(
          'Oopss!',
          'Gagal Update Error : !!.\n' + jqXHR.responseJSON.message,
          'error');
    }
  });
  }
</script>

<?= $this->endSection() ?>
