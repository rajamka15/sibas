<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

  
<title>SIBAS | Tambah Data Penduduk</title>



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1><i class="fa fa-plus"></i> Tambah Data Penduduk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Penduduk</li>
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
            <form action="<?php echo base_url() ?>penduduk/submit_tambah" method="post"> 
              <div class="form-group row">

                  <!-- Is Kepala Keluarga? -->
                  <div class="col-lg-6 mt-2">
                          <label>Apakah Kepala Keluarga?</label>
                          <select class="form-control" name="is_kepala_keluarga" required>
                          <option value="">Pilih Kepala Keluarga</option>
                          <option value="0">Bukan Kepala Keluarga</option>
                          <option value="1">Kepala Keluarga</option>
                      </select>
                      </div>
                  <!-- Is Kepala Keluarga? -->

                  <!-- No KK -->
                  <div class="col-lg-6 mt-2">
                      <label>Nama KK</label>
                      <select class="form-control select2" name="kk" required >
                          <option value="">Pilih KK</option>
                          <?php
                          foreach ($kk as $item) {
                            echo "<option value='".$item['id_kk']."'>".$item['nama_kepala_kk']."(".$item['no_kk'].")</option>";
                          }
                          ?>
                      </select>
                  </div>
                  <!-- End No KK -->
                  
                  <!-- NIK -->
                  <div class="col-lg-6 mt-2">
                      <label>NIK</label>
                      <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK" oninput="checkMaxLength(this, 16)" required>
                  </div>
                  <!-- End NIK -->

                  <!-- Nama -->
                  <div class="col-lg-6">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required>
                  </div>
                  <!-- End Nama -->

                  <!-- Jenis Kelamin -->
                  <div class="col-lg-6 mt-2">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jenis_kelamin" required>
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="P">Perempuan</option>
                          <option value="L">Laki-laki</option>
                      </select>
                  </div>
                  <!-- End Jenis Kelamin -->

                  <!-- Tempat Lahir -->
                  <div class="col-lg-6 mt-2">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                  </div>
                  <!-- End Tempat Lahir -->

                  <!-- Tanggal Lahir -->
                  <div class="col-lg-6 mt-2">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                  </div>
                  <!-- End Tanggal Lahir -->

                  
                  <!-- Agama -->
                  <div class="col-lg-6 mt-2">
                      <label>Agama</label>
                      <select class="form-control" name="agama" required>
                          <option value="">Pilih Agama</option>
                          <option value="Islam">Islam</option>
                          <option value="Protestan">Protestan</option>
                          <option value="Katholik">Katholik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Buddha">Buddha</option>
                          <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                  <!-- End Agama -->

                  
                  <!-- Pendidikan -->
                  <div class="col-lg-6 mt-2">
                      <label>Pendidikan</label>
                      <select class="form-control" name="pendidikan" required>
                          <option value="">Pilih Pendidikan</option>
                          <option value="Tidak Sekolah">Tidak Sekolah</option>
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA/SMK">SMA/SMK</option>
                          <option value="S1/S2/S3">S1/S2/S3</option>
                        </select>
                      </div>
                  <!-- End Pendidikan -->

                  
                  <!-- Pekerjaan -->
                  <div class="col-lg-6 mt-2">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan" required>
                  </div>
                  <!-- End Pekerjaan -->

                  
                  <!-- Penghasilan -->
                  <div class="col-lg-6 mt-2">
                      <label>Penghasilan</label>
                      <select class="form-control" name="penghasilan" required>
                          <option value="">Pilih Penghasilan</option>
                          <option value="<500K"> < 500K </option>
                          <option value="500K-2JT">500K-2JT</option>
                          <option value="2JT-4JT">2JT-4JT</option>
                          <option value=">4JT"> >4JT </option>
                      </select>
                  </div>
                  <!-- End Penghasilan -->

                  
                  <!-- Pengeluaran -->
                  <div class="col-lg-6 mt-2">
                      <label>Pengeluaran</label>
                      <select class="form-control" name="pengeluaran" required>
                          <option value="">Pilih Pengeluaran</option>
                          <option value="<500K"> < 500K </option>
                          <option value="500K-2JT">500K-2JT</option>
                          <option value="2JT-4JT">2JT-4JT</option>
                          <option value=">4JT"> >4JT </option>
                        </select>
                  </div>
                  <!-- End Pengeluaran -->

                  
                  <!-- Sumber Air -->
                  <div class="col-lg-6 mt-2">
                      <label>Sumber Air</label>
                      <select class="form-control" name="sumber_air" required>
                          <option value="">Pilih Sumber Air</option>
                          <option value="Sumur Milik Sendiri">Sumur Milik Sendiri</option>
                          <option value="Sumur Milik Tetangga">Sumur Milik Tetangga</option>
                          <option value="PDAM">PDAM</option>
                        </select>
                      </div>
                  <!-- End Sumber Air -->

                  
                  <!-- Status Kawin -->
                  <div class="col-lg-6 mt-2">
                      <label>Status Kawin</label>
                      <select class="form-control" name="status_kawin" required>
                          <option value="">Pilih Status Kawin</option>
                          <option value="Belum Kawin">Belum Kawin</option>
                          <option value="Kawin">Kawin</option>
                          <option value="Janda">Janda</option>
                          <option value="Duda">Duda</option>
                        </select>
                      </div>
                  <!-- End Status Kawin -->

                  
                  <!-- Status Rumah -->
                  <div class="col-lg-6 mt-2">
                      <label>Status Rumah</label>
                      <select class="form-control" name="status_rumah" required>
                          <option value="">Pilih Status Rumah</option>
                          <option value="Menumpang">Menumpang</option>
                          <option value="Milik Sendiri">Milik Sendiri</option>
                          <option value="Kontrak">Kontrak</option>
                          <option value="Milik Orang Tua/Warisan">Milik Orang Tua/Warisan</option>
                        </select>
                  </div>
                  <!-- End Status Rumah -->

                  
                  <!-- Daya Listrik -->
                  <div class="col-lg-6 mt-2">
                      <label>Daya Listrik</label>
                      <select class="form-control" name="daya_listrik" required>
                          <option value="">Pilih Daya Listrik</option>
                          <option value="Listrik Menumpang">Listrik Menumpang</option>
                          <option value="Listrik 450 Watt">Listrik 450 Watt</option>
                          <option value="Listrik 900 Watt">Listrik 900 Watt</option>
                          <option value="Listrik>900 Watt">Listrik > 900 Watt</option>
                        </select>
                    </div>
                  <!-- End Daya Listrik -->

                  <!-- Transportasi -->
                  <div class="col-lg-6 mt-2">
                      <label>Transportasi</label>
                      <select class="form-control" name="transportasi" required>
                          <option value="">Pilih Transportasi</option>
                          <option value="Jalan Kaki/Sepeda/Sepeda Motor Seadanya">Jalan Kaki/Sepeda/Sepeda Motor Seadanya</option>
                          <option value="Sepeda Motor 1 Buah dalam Kondisi Baik">Sepeda Motor 1 Buah dalam Kondisi Baik</option>
                          <option value="Sepeda Motor >1 Buah dalam kondisi baik">Sepeda Motor >1 Buah dalam kondisi baik</option>
                        </select>
                  </div>
                  <!-- End Transportasi -->
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

<!-- page script

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
</script> -->

<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
})
</script>

<?= $this->endSection() ?>   