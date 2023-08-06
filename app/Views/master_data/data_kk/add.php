<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

  
<title>SIBAS | Tambah Data Kartu Keluarga</title>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1><i class="fa fa-plus"></i> Tambah Data Kartu Keluarga</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Kartu Keluarga</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="card">
  <div class="card-body">
    <div class="col-lg-12">
        <div class="tile">
          <div class="tile-body">
            <form action="<?php echo base_url() ?>kartu_keluarga/submit_tambah" method="post"> 
              <div class="form-group row">
                  <!-- NIK -->
                  <div class="col-lg-6">
                      <label>No. Kartu Keluarga</label>
                      <input type="number" class="form-control" name="no_kk" placeholder="Masukkan No. KK" oninput="checkMaxLength(this, 16)" required>
                  </div>
                  <!-- End NIK -->

                  <!-- Nama -->
                  <div class="col-lg-6">
                      <label>Nama Kepala Keluarga</label>
                      <input type="text" class="form-control" name="nama_kepala_kk" placeholder="Masukkan Nama Kepala Keluarga" required>
                  </div>
                  <!-- End Nama -->
              
              </div>

          <div class="text-right">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>public/plugins/jquery-3.3.1.js"></script>


<!-- page script -->

<script type="text/javascript">

  $(document).ready(function() {
  $("#table_penduduk").DataTable();
})
</script>

<script>
function checkMaxLength(input, maxLength) {
  if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength);
    alert("Karakter melebihi batas maksimum!");
  }
}
</script>



<?= $this->endSection() ?>   