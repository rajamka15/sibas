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
            <form id="form_setting_kriteria" action="<?php echo base_url() ?>periode_bansos/submit_kriteria" method="post">
              <div class="form-group row">
              <div class="col-12 col-sm-6">
              <input type="hidden" name="id_periode" value="<?php echo $id_periode ?>">

                  <label>Setting Kriteria <?php echo $nama_periode ?> </label>
                  <!-- <div class="select2-purple">
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
                  </div> -->
                  <?php
                  $loop_data = count($data_setting) > 0 ? $data_setting : $data_kriteria;
                  $is_edit = count($data_setting) > 0 ? 1 : 0;
                   ?>
                     <input type="hidden" name="is_edit" value="<?php echo $is_edit ?>">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>Id Kriteria</td>
                        <td>Nama Kriteria</td>
                        <td>Setting Bobot</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($loop_data as $key => $value) {?>
                        <tr>
                          <td><?=$value['id_kriteria']?></td>
                          <input type="hidden" name="id_kriteria[]" value="<?=$value['id_kriteria']?>">
                          <td><?=$value['nama_kriteria']?></td>
                          <?php $bobot = $is_edit == 1 ? floatVal($value['bobot']) * 100 : 0; ?>
                          <td>
                            <div class="input-group mb-3">
                             <input type="number" name="bobot[]"class="form-control rounded-0 bobot" value="<?=$bobot?>" min="0" max="100" >
                             <div class="input-group-append">
                            <span class="input-group-text">%</span>
                            </div>
                          </div>
                        </td>

                        </tr>
                    <?php  } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
            <a href="#" onclick="saveConfig()" class="btn btn-primary">Save</a>
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

<script>
  $(document).ready(function() {
  $("#table_periode").DataTable();
})
function checkMaxLength(input, maxLength) {
  if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength);
    alert("Karakter melebihi batas maksimum!");
  }
}
function saveConfig(){
  console.log("masuk");
  var total = 0;
        $.each($("input[class='form-control rounded-0 bobot']"), function(){
          total += parseInt($(this).val());
        });
  console.log(total);
  if(total !== 100){
    alert("Setting Bobot harus 100 %");
    return false;
  }
  $.each($("input[class='form-control rounded-0 bobot']"), function(){
    var floatBobot = parseInt($(this).val())/100;
    $(this).val(parseFloat(floatBobot));
    // console.log(parseFloat(floatBobot));
    // exit;
  });
  $.each($("input[class='form-control rounded-0 bobot']"), function(){
    // var floatBobot = parseInt($(this).val())/100;
    console.log($(this).val());
    // console.log(parseFloat(floatBobot));
    // exit;
  });
    // document['form_setting_kriteria'].submit();
     document.getElementById("form_setting_kriteria").submit();
}
</script>

<?= $this->endSection() ?>
