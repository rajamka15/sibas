<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

  
<title>SIBAS | Kriteria Bansos</title>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1><i class="fa fa-plus"></i> Konfigruasi Kriteria Bansos</h1>
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
            <form action="<?php echo base_url() ?>periode_bansos/submit_kriteria" method="post"> 
              <div class="form-group row">
              <div class="col-12 col-sm-6">
              <input type="hidden" name="id_periode" value="<?php echo $id_periode ?>"> 

                  <label>Pilih Kriteria <?php echo $nama_periode ?> </label>
                  <div class="select2-purple">
                    <select class="select2" multiple="multiple" name="nama_kriteria[]"data-placeholder="Pilih Kriteria" data-dropdown-css-class="select2-purple" style="width: 100%;">
                      <option value="Status Kawin">Status Kawin</option>
                      <option value="Pendidikan">Pendidikan</option>
                      <option value="Pekerjaan"> Pekerjaan</option>
                      <option value="Penghasilan">Penghasilan</option>
                      <option value="Pengeluaran">Pengeluaran</option>
                      <option value="Sumber Air">Sumber Air</option>
                      <option value="Status Kepemilikan Rumah">Status Kepemilikan Rumah</option>
                      <option value="Daya Listrik">Daya Listrik</option>
                      <option value="Transportasi">Transportasi</option>
                      <option value="Jumlah Tanggungan">Jumlah Tanggungan</option>
                      <option value="Umur">Umur</option>
                    </select>
                  </div>
                </div>
              </div>    
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

<!-- Select2 -->
<script src="<?php echo base_url() ?>public/plugins/select2/js/select2.full.min.js"></script>



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
  //Initialize Select2 Elements
  $('.select2').select2();
  
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