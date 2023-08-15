<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from adminlte.io/themes/v3/pages/examples/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 04:54:00 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SIbas | Log in</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
      <link rel="stylesheet" href="<?php echo base_url()?>public/plugins/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>public/plugins/toastr/toastr.min.css">
      <link rel="stylesheet" href="<?php echo base_url()?>public/dist/css/adminlte.min.css">
   <body class="hold-transition login-page">
      <div class="login-box">
         <div class="card card-outline card-primary">
            <div class="card-header text-center">
               <a class="h3"><b>Sistem Informasi Bantuan Sosial</b></a>
            </div>
            <div class="card-body">
               <p class="login-box-msg">Selamat Datang</p>
               <form action="<?= base_url(); ?>login/auth_login" method="post" accept-charset="UTF-8">
                  <div class="input-group mb-3">
                     <input type="text" name="username" class="form-control" placeholder="Username">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" name="password" class="form-control" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-8">
                        <div class="icheck-primary">
                           <input type="checkbox" id="remember">
                           <label for="remember">
                           Remember Me
                           </label>
                        </div>
                     </div>
                     <div class="col-4">
                       <!-- <button type="button" class="btn btn-danger swalDefaultError">
Launch Error Toast
</button> -->
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                     </div>
                  </div>
               </form>
               <!--
               <p class="mb-1">
                  <a href="forgot-password.html">I forgot my password</a>
               </p>
               <p class="mb-0">
                  <a href="register.html" class="text-center">Register a new membership</a>
               </p> -->
            </div>
         </div>
      </div>
      <script src="<?php echo base_url()?>public/plugins/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url()?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url()?>public/plugins/sweetalert2/sweetalert2.min.js"></script>
      <script src="<?php echo base_url()?>public/plugins/toastr/toastr.min.js"></script>
      <script src="<?php echo base_url()?>public/dist/js/adminlte.min.js"></script>
      <!-- <script src="<?php echo base_url()?>public/dist/js/demo.js"></script> -->
      <script>
      $(function() {

        // $('.swalDefaultError').click(function() {
        <?php if ($error == true) : ?>

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
      // toastr.options.closeDuration = 300;
      // toastr.options.newestOnTop = false;
      // toastr.options.closeEasing = 'swing';
      // toastr.options.closeButton = true;
      // toastr.options.newestOnTop = false;
        <?php foreach ($msg as $er) : ?>
      toastr.error('<?= $er ?>');
      // console.log("<?php echo $er ?>");
      <?php endforeach ?>
    // });
    <?php endif ?>
    });
      </script>
   </body>
   <!-- Mirrored from adminlte.io/themes/v3/pages/examples/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2023 04:54:00 GMT -->
</html>
