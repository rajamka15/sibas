  <?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

  
<title>SIBAS | Tambah Periode Bansos</title>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1><i class="fa fa-plus"></i> Tambah Periode Bantuan Sosial</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>periode_bansos">Periode Bansos</a></li>
            <li class="breadcrumb-item active">Tambah Data</li>
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
            <form action="<?php echo base_url() ?>periode_bansos/submit_tambah" method="post"> 
              <div class="form-group row">
                  <!-- Nama Periode -->
                  <div class="col-lg-6 mt-2">
                      <label>Nama Periode</label>
                      <input type="text" class="form-control" name="nama_periode" placeholder="Masukkan Nama Periode Bansos" required>
                  </div>
                  <!-- Nama Periode -->

                  <!-- Kuota -->
                  <div class="col-lg-6 mt-2">
                      <label>Kuota Bansos</label>
                      <input type="number" class="form-control" name="kuota" placeholder="Masukkan Kuota Bansos" required>
                  </div>
                  <!-- End Kuota -->
                  
                  <!-- Tanggal Awal -->
                <div class="col-lg-6 mt-2">
                  <label>Tanggal Awal</label>
                    <div class="input-group date" id="tgl_awal" data-target-input="nearest">
                        <input type="text" name="tgl_awal" class="form-control datetimepicker-input" data-target="#tgl_awal"/>
                        <div class="input-group-append" data-target="#tgl_awal" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                 <!-- Tanggal Akhir -->
                 <div class="col-lg-6 mt-2">
                  <label> Tanggal Akhir </label>
                    <div class="input-group date" id="tgl_akhir" data-target-input="nearest">
                        <input type="text" name="tgl_akhir" class="form-control datetimepicker-input" data-target="#tgl_akhir" />
                        <div class="input-group-append" data-target="#tgl_akhir" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                 <!-- Keterangan -->
                 <div class="col-lg-6 mt-2">
                      <label>Keterangan Bansos</label>
                      <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan Bansos" required>
                  </div>
                  <!-- End Keterangan -->

              
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
<script src="<?php echo base_url() ?>public/plugins/jquery/jquery.min.js"></script>



<!-- page script -->

<script type="text/javascript">

  $(document).ready(function() {
  $("#table_periode").DataTable();
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

<script>
  $(function () {
     //Date picker Start
     $('#tgl_awal').datetimepicker({
        format: 'L'
    });

    //Date picker End
    $('#tgl_akhir').datetimepicker({
        format: 'L'
    });
  })
</script>

<?= $this->endSection() ?>   