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
            <form action="<?php echo base_url() ?>user/change_password" method="post">
              <div class="form-group row">

                  <div class="col-lg-12">
                      <label>Password Lama</label>
                      <input type="text" class="form-control" name="password_old" >
                  </div>
                  <div class="col-lg-12">
                      <label>Password Baru</label>
                      <input type="text" class="form-control" name="password" >
                  </div>
                  <div class="col-lg-12">
                      <label>Ulangi Password</label>
                      <input type="text" class="form-control" name="password_confirm" >
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
<!-- <script src="<?php echo base_url() ?>public/plugins/jquery-3.3.1.js"></script> -->
<script src="<?php echo base_url()?>public/plugins/jquery/jquery.min.js"></script>


<!-- page script -->
<script>
$(function() {

  // $('.swalDefaultError').click(function() {
  <?php if ($error == true) : ?>
  console.log("masuk_error");
    toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "100",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "show",
            "hideMethod": "hide"
        };
  <?php foreach ($msg as $er) : ?>
toastr.error('<?= $er ?>');
<?php endforeach ?>
// });
<?php endif ?>
});
</script>



<?= $this->endSection() ?>
