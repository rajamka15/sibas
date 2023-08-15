<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>


<title>SIBAS | Profile</title>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1><i class="fa fa-plus"></i> Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
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
            <form action="<?php echo base_url() ?>user/submit_edit" method="post">
              <div class="form-group row">

                  <div class="col-lg-12">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" value="<?= $list_user['username']?>">
                  </div>
                  <div class="col-lg-12">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="<?=$list_user['email']?>">
                  </div>
                  <div class="col-lg-12">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama_user" value="<?=$list_user['nama_user']?>">
                  </div>
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
<script>
function checkMaxLength(input, maxLength) {
  if (input.value.length > maxLength) {
    input.value = input.value.slice(0, maxLength);
    alert("Karakter melebihi batas maksimum!");
  }
}
</script>



<?= $this->endSection() ?>
