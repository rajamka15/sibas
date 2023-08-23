<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>


<title>SIBAS | Data Hasil</title>


<!-- Content Header (Page header) -->
<div class="content-header"></div><!-- /.container-header -->

<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Hasil Bansos</h3>
  </div>

<div class="card-body">
<div id="accordion">
  <?php
  $no = 0;
  foreach($periode_bansos_list as $data) {
    $no++;
    $card = 'danger';
    if($no % 1 == 0){
      $card = 'success';
    }
    if($no % 2 == 0){
      $card = 'primary';
    }
    if($no % 3 == 0){
      $card = 'info';
    }
   ?>
   <div class="card card-<?=$card?>">
      <div class="card-header">
         <h4 class="card-title w-100">
            <a class="d-block w-100" data-toggle="collapse" href="#collapse<?=$no?>">
            <?=$no." ". $data['nama_periode']; ?>
            </a>
         </h4>
      </div>
      <div id="collapse<?=$no?>" class="collapse" data-parent="#accordion">
         <div class="card-body">
           <div class="row col-md-12">
             <div class="col-md-6">
                Keterangan : <?=$data['keterangan'];?>
             </div>
             <div class="col-md-6" style="float:right">
               <a href="#" onclick="getBansos(<?=$data['id_periode']?>,<?=$no?>)" class="btn btn-primary">Lihat Hasil</a>
             </div>
           </div>
           <br>
           <div class="row" id="hasil_bansos_<?=$no?>">

             <!-- <div class="card card-primary card-outline card-tabs">
               <div class="card-header p-0 pt-1 border-bottom-0">
                  <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="penduduk" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Data Penduduk</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Profile</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Messages</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Settings</a>
                     </li>
                  </ul>
               </div>
               <div class="card-body" id="body-tab-customs">
                  <div class="tab-content" id="custom-tabs-three-tabContent">
                     <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
                     </div>
                     <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                        Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                     </div>
                     <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                        Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                     </div>
                     <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                        Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                     </div>
                  </div>
               </div>
            </div> -->
           </div>
         </div>
      </div>
   </div>
 <?php } ?>
</div>
</div><!-- /.card-body -->
</div>
<!-- /.card -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>public/plugins/jquery/jquery.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#table_kk").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#table_kk_wrapper .col-md-6:eq(0)');
  });
  function getBansos(id_periode,key){
    var base_url = '<?=base_url()?>';
  $.ajax({
    type: 'GET',
    url: base_url + "periode_bansos/hasil_bansos?id_periode="+id_periode,
    dataType: "json",
    success: function (res) {
      console.log(res);
      /*res = JSON.parse(res);*/
      var html_tab = `
      <div class="card card-primary card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
           <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
           <li class="nav-item">
              <a class="nav-link active" id="penduduk" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Data Penduduk</a>
           </li>
      `;
      var li_content = "";
      $.each(res.data_hasil,function(keys,values){
        console.log(keys);
        var name_item = keys == 1 ? "Normalisasi" : "Normailasi * Bobot";
        li_content += `
        <li class="nav-item">
           <a class="nav-link active" id="penduduk" data-toggle="pill" href="#tabs-`+keys+`" role="tab" aria-controls="tabs-`+keys+`" aria-selected="true">`+name_item+`</a>
        </li>
        `;
      });
      html_tab += li_content;
      html_tab += `</ul>
     </div>`;
     $('#hasil_bansos_'+key).append(html_tab)
    },
    error: function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR.responseJSON);
        console.log(textStatus);
        console.log(errorThrown);
        Swal.fire(
          'Oopss!',
          'Gagal Update Error : !!.\n' + jqXHR.responseJSON.message,
          'error');
    }
  });
  }
</script>

<?= $this->endSection() ?>
