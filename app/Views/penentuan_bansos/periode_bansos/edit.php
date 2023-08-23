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
            <form action="<?php echo base_url() ?>periode_bansos/submit_edit" method="post"> 
            <input type="hidden" name="id_periode" value="<?php echo $periode['id_periode'] ?>"> 
              <div class="form-group row">
                  <!-- Nama Periode -->
                  <div class="col-lg-6 mt-2">
                      <label>Nama Periode</label>
                      <input type="text" class="form-control" name="nama_periode" value="<?php echo $periode['nama_periode'] ?>">
                  </div>
                  <!-- Nama Periode -->

                  <!-- Kuota -->
                  <div class="col-lg-6 mt-2">
                      <label>Kuota Bansos</label>
                      <input type="number" class="form-control" name="kuota" value="<?php echo $periode['kuota'] ?>">
                  </div>
                  <!-- End Kuota -->
                  
                  <!-- Tanggal Awal -->
                <div class="col-lg-6 mt-2">
                  <label>Tanggal Awal</label>
                  <input type="date" class="form-control" name="tgl_awal" value="<?php echo $periode['tgl_awal'] ?>" required>
                </div>

                 <!-- Tanggal Akhir -->
                 <div class="col-lg-6 mt-2">
                  <label> Tanggal Akhir </label>
                  <input type="date" class="form-control" name="tgl_akhir" value="<?php echo $periode['tgl_akhir'] ?>" required>
                  </div>

                 <!-- Keterangan -->
                 <div class="col-lg-6 mt-2">
                      <label>Keterangan Bansos</label>
                      <input type="text" class="form-control" name="keterangan" value="<?php echo $periode['keterangan'] ?>">
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

<?= $this->endSection() ?>   