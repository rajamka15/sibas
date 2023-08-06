<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

  
<title>SIBAS | Edit Data Penduduk</title>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1><i class="fa fa-plus"></i> Edit Data Penduduk</h1>
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
            <form action="<?php echo base_url() ?>penduduk/submit_edit" method="post"> 
            <input type="hidden" name="id" value="<?php echo $penduduk['id'] ?>"> 
              <div class="form-group row">
                  <!-- Is Kepala Keluarga? -->
                  <div class="col-lg-6 mt-2">
                          <label>Apakah Kepala Keluarga?</label>
                          <select class="form-control" name="is_kepala_keluarga" required>
                          <option value="">Pilih Kepala Keluarga</option>
                          <option value="0"<?php echo $penduduk['is_kepala_keluarga'] == '0' ? 'selected' : '' ?> >Bukan Kepala Keluarga</option>
                          <option value="1"<?php echo $penduduk['is_kepala_keluarga'] == '1' ? 'selected' : '' ?> >Kepala Keluarga</option>
                          
                      </select>
                      </div>
                  <!-- Is Kepala Keluarga? -->

                  <!-- NIK -->
                  <div class="col-lg-6">
                      <label>NIK</label>
                      <input type="number" class="form-control" name="nik" value="<?php echo $penduduk['nik'] ?>" placeholder="Masukkan NIK" readonly>
                  </div>
                  <!-- End NIK -->

                  <!-- Nama -->
                  <div class="col-lg-6">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $penduduk['nama'] ?>" placeholder="Masukkan Nama Lengkap" required>
                  </div>
                  <!-- End Nama -->

                  <!-- Jenis Kelamin -->
                  <div class="col-lg-6 mt-2">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jenis_kelamin" required>
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="P" <?php echo $penduduk['jenis_kelamin'] == 'P' ? 'selected' : '' ?> >Perempuan</option>
                          <option value="L" <?php echo $penduduk['jenis_kelamin'] == 'L' ? 'selected' : '' ?> >Laki-laki</option>
                      </select>
                  </div>
                  <!-- End Jenis Kelamin -->

                  <!-- Tempat Lahir -->
                  <div class="col-lg-6 mt-2">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $penduduk['tempat_lahir'] ?>" placeholder="Masukkan Tempat Lahir" required>
                  </div>
                  <!-- End Tempat Lahir -->

                  <!-- Tanggal Lahir -->
                  <div class="col-lg-6 mt-2">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $penduduk['tanggal_lahir'] ?>" placeholder="Masukkan Tanggal Lahir" required>
                  </div>
                  <!-- End Tanggal Lahir -->

                  <!-- Agama -->
                  <div class="col-lg-6 mt-2">
                      <label>Agama</label>
                      <select class="form-control" name="agama" required>
                          <option value="">Pilih Agama</option>
                          <option value="Islam"<?php echo $penduduk['agama'] == 'Islam' ? 'selected' : '' ?> >Islam</option>
                          <option value="Protestan"<?php echo $penduduk['agama'] == 'Protestan' ? 'selected' : '' ?> >Protestan</option>
                          <option value="Katholik"<?php echo $penduduk['agama'] == 'Katholik' ? 'selected' : '' ?> >Katholik</option>
                          <option value="Hindu"<?php echo $penduduk['agama'] == 'Hindu' ? 'selected' : '' ?> >Hindu</option>
                          <option value="Buddha"<?php echo $penduduk['agama'] == 'Buddha' ? 'selected' : '' ?> >Buddha</option>
                          <option value="Konghucu"<?php echo $penduduk['agama'] == 'Konghucu' ? 'selected' : '' ?> >Konghucu</option>
                        </select>
                    </div>
                  <!-- End Agama -->

                  
                  <!-- Pendidikan -->
                  <div class="col-lg-6 mt-2">
                      <label>Pendidikan</label>
                      <select class="form-control" name="pendidikan" required>
                          <option value="">Pilih Pendidikan</option>
                          <option value="Tidak Sekolah"<?php echo $penduduk['pendidikan'] == 'Tidak Sekolah' ? 'selected' : '' ?> >Tidak Sekolah</option>
                          <option value="SD"<?php echo $penduduk['pendidikan'] == 'SD' ? 'selected' : '' ?> >SD</option>
                          <option value="SMP"<?php echo $penduduk['pendidikan'] == 'SMP' ? 'selected' : '' ?> >SMP</option>
                          <option value="SMA/SMK"<?php echo $penduduk['pendidikan'] == 'SMA/SMK' ? 'selected' : '' ?> >SMA/SMK</option>
                          <option value="S1/S2/S3"<?php echo $penduduk['pendidikan'] == 'S1/S2/S3' ? 'selected' : '' ?> >S1/S2/S3</option>
                        </select>
                      </div>
                  <!-- End Pendidikan -->

                  
                  <!-- Pekerjaan -->
                  <div class="col-lg-6 mt-2">
                      <label>Pekerjaan</label>
                      <input type="text" class="form-control" name="pekerjaan" value="<?php echo $penduduk['pekerjaan'] ?>" placeholder="Masukkan Pekerjaan" required>
                  </div>
                  <!-- End Pekerjaan -->

                  
                  <!-- Penghasilan -->
                  <div class="col-lg-6 mt-2">
                      <label>Penghasilan</label>
                      <select class="form-control" name="penghasilan" required>
                          <option value="">Pilih Penghasilan</option>
                          <option value="<500K"<?php echo $penduduk['penghasilan'] == '<500K' ? 'selected' : '' ?> > < 500K </option>
                          <option value="500K-2JT"<?php echo $penduduk['penghasilan'] == '500K-2J' ? 'selected' : '' ?> >500K-2JT</option>
                          <option value="2JT-4JT"<?php echo $penduduk['penghasilan'] == '<2JT-4JT' ? 'selected' : '' ?> >2JT-4JT</option>
                          <option value=">4JT"<?php echo $penduduk['penghasilan'] == '>4JT' ? 'selected' : '' ?> > >4JT </option>
                      </select>
                  </div>
                  <!-- End Penghasilan -->

                  
                  <!-- Pengeluaran -->
                  <div class="col-lg-6 mt-2">
                      <label>Pengeluaran</label>
                      <select class="form-control" name="pengeluaran" required>
                          <option value="">Pilih Pengeluaran</option>
                          <option value="<500K"<?php echo $penduduk['pengeluaran'] == '<500K' ? 'selected' : '' ?> > < 500K </option>
                          <option value="500K-2JT"<?php echo $penduduk['pengeluaran'] == '500K-2J' ? 'selected' : '' ?> >500K-2JT</option>
                          <option value="2JT-4JT"<?php echo $penduduk['pengeluaran'] == '<2JT-4JT' ? 'selected' : '' ?> >2JT-4JT</option>
                          <option value=">4JT"<?php echo $penduduk['pengeluaran'] == '>4JT' ? 'selected' : '' ?> > >4JT </option>
                      </select>
                  </div>
                  <!-- End Pengeluaran -->

                  
                  <!-- Sumber Air -->
                  <div class="col-lg-6 mt-2">
                      <label>Sumber Air</label>
                      <select class="form-control" name="sumber_air" required>
                          <option value="">Pilih Sumber Air</option>
                          <option value="Sumur Milik Sendiri"<?php echo $penduduk['sumber_air'] == 'Sumur Milik Sendiri' ? 'selected' : '' ?> >Sumur Milik Sendiri</option>
                          <option value="Sumur Milik Tetangga"<?php echo $penduduk['sumber_air'] == 'Sumur Milik Tetangga' ? 'selected' : '' ?> >Sumur Milik Tetangga</option>
                          <option value="PDAM">PDAM</option>
                        </select>
                      </div>
                  <!-- End Sumber Air -->

                  
                  <!-- Status Kawin -->
                  <div class="col-lg-6 mt-2">
                      <label>Status Kawin</label>
                      <select class="form-control" name="status_kawin" required>
                          <option value="">Pilih Status Kawin</option>
                          <option value="Belum Kawin"<?php echo $penduduk['status_kawin'] == 'Belum Kawin' ? 'selected' : '' ?> >Belum Kawin</option>
                          <option value="Kawin"<?php echo $penduduk['status_kawin'] == 'Kawin' ? 'selected' : '' ?> >Kawin</option>
                          <option value="Janda"<?php echo $penduduk['status_kawin'] == 'Janda' ? 'selected' : '' ?> >Janda</option>
                          <option value="Duda"<?php echo $penduduk['status_kawin'] == 'Duda' ? 'selected' : '' ?> >Duda</option>
                        </select>
                      </div>
                  <!-- End Status Kawin -->

                  
                  <!-- Status Rumah -->
                  <div class="col-lg-6 mt-2">
                      <label>Status Rumah</label>
                      <select class="form-control" name="status_rumah" required>
                          <option value="">Pilih Status Rumah</option>
                          <option value="Menumpang"<?php echo $penduduk['status_rumah'] == 'Menumpang' ? 'selected' : '' ?> >Menumpang</option>
                          <option value="Milik Sendiri"<?php echo $penduduk['status_rumah'] == 'Milik Sendiri' ? 'selected' : '' ?> >Milik Sendiri</option>
                          <option value="Kontrak"<?php echo $penduduk['status_rumah'] == 'Kontrak' ? 'selected' : '' ?> >Kontrak</option>
                          <option value="Milik Orang Tua/Warisan"<?php echo $penduduk['status_rumah'] == 'Milik Orang Tua/Warisan' ? 'selected' : '' ?> >Milik Orang Tua/Warisan</option>
                        </select>
                  </div>
                  <!-- End Status Rumah -->

                  
                  <!-- Daya Listrik -->
                  <div class="col-lg-6 mt-2">
                      <label>Daya Listrik</label>
                      <select class="form-control" name="daya_listrik" required>
                          <option value="">Pilih Daya Listrik</option>
                          <option value="Listrik Menumpang"<?php echo $penduduk['daya_listrik'] == 'Listrik Menumpang' ? 'selected' : '' ?> >Listrik Menumpang</option>
                          <option value="Listrik 450 Watt"<?php echo $penduduk['daya_listrik'] == 'Listrik 450 Watt' ? 'selected' : '' ?> >Listrik 450 Watt</option>
                          <option value="Listrik 900 Watt"<?php echo $penduduk['daya_listrik'] == 'Listrik 900 Watt' ? 'selected' : '' ?> >Listrik 900 Watt</option>
                          <option value="Listrik>900 Watt"<?php echo $penduduk['daya_listrik'] == 'Listrik>900 Watt' ? 'selected' : '' ?> >Listrik > 900 Watt</option>
                        </select>
                    </div>
                  <!-- End Daya Listrik -->

                  <!-- Transportasi -->
                  <div class="col-lg-6 mt-2">
                      <label>Transportasi</label>
                      <select class="form-control" name="transportasi" required>
                          <option value="">Pilih Transportasi</option>
                          <option value="Jalan Kaki/Sepeda/Sepeda Motor Seadanya"<?php echo $penduduk['transportasi'] == 'Jalan Kaki/Sepeda/Sepeda Motor Seadanya' ? 'selected' : '' ?> >Jalan Kaki/Sepeda/Sepeda Motor Seadanya</option>
                          <option value="Sepeda Motor 1 Buah dalam Kondisi Baik"<?php echo $penduduk['transportasi'] == 'Sepeda Motor 1 Buah dalam Kondisi Baik' ? 'selected' : '' ?> >Sepeda Motor 1 Buah dalam Kondisi Baik</option>
                          <option value="Sepeda Motor >1 Buah dalam kondisi baik"<?php echo $penduduk['transportasi'] == 'Sepeda Motor >1 Buah dalam Kondisi Baik' ? 'selected' : '' ?> >Sepeda Motor >1 Buah dalam kondisi baik</option>
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

<!-- page script -->

<script type="text/javascript">

  $(document).ready(function() {
  $("#table_penduduk").DataTable();
})
</script>
<?= $this->endSection() ?>   