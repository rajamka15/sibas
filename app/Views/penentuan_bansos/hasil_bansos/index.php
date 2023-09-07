<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>


<title>SIBAS | Data Hasil</title>


<!-- Content Header (Page header) -->
<div class="content-header"></div><!-- /.container-header -->

<div class="card card-light">
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
    $periode = $data['tgl_awal'] ." Sampai ".$data['tgl_akhir'];
   ?>
   <input type="hidden" name="periodde_<?=$no?>" id="periodde_<?=$no?>" value="<?=$periode?>">
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
               <a href="#" onclick="getBansos(<?=$data['id_periode']?>,<?=$no?>,'<?=$data['nama_periode'];?>')" class="btn btn-primary">Lihat Hasil</a>
             </div>
           </div>
           <br>
           <div class="row" id="hasil_bansos_<?=$no?>">

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
  function getBansos(id_periode,key,title){
    $('#tabs-data-'+key).remove();
    var base_url = '<?=base_url()?>';
  $.ajax({
    type: 'GET',
    url: base_url + "periode_bansos/hasil_bansos?id_periode="+id_periode,
    dataType: "json",
    success: function (res) {
      console.log(res);
      if(res.data_hasil.length == 0){
        Swal.fire(
          'Oopss!',
          'Priode Bansos ini belum di posting!!',
          'warning');
          return false;
      }
      /*res = JSON.parse(res);*/
      var html_tab = `
      <div class="card card-primary card-outline card-tabs" id="tabs-data-`+key+`">
        <div class="card-header p-0 pt-1 border-bottom-0">
           <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
           <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-three-home`+key+`" data-toggle="pill" href="#tabs-three-home`+key+`" role="tab" aria-controls="tabs-three-home`+key+`" aria-selected="true">Nilai Data Penduduk</a>
           </li>
      `;
      var li_content = "";
      var table_content = "";
      var table_contents = "";

      $.each(res.data_hasil,function(keys,values){
        // console.log(keys);
        if(keys == 1 || keys == 2){
        var name_item = keys == 1 ? "Normalisasi" : "Hasil Optimasi";
        li_content += `
        <li class="nav-item">
           <a class="nav-link" id="custom-tabs-three-home-`+key+`-`+keys+`" data-toggle="pill" href="#tabs-`+key+`-`+keys+`" role="tab" aria-controls="tabs-`+key+`-`+keys+`" aria-selected="true">`+name_item+`</a>
        </li>
        `;
        table_contents += `
        <div class="tab-pane fade" id="tabs-`+key+`-`+keys+`" role="tabpanel" aria-labelledby="custom-tabs-three-home-`+key+`-`+keys+`">
           Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
        </div>
        `;
        var button = '';
        var th_no = '';



        if(keys == 1){
          th_no += '<th>No</th>';
        }
        table_content +=`
        <div class="tab-pane fade" id="tabs-`+key+`-`+keys+`" role="tabpanel" aria-labelledby="custom-tabs-three-home-`+key+`-`+keys+`">

        <table class="table table table-bordered table-striped" id="tbl_hasil_`+key+`_`+keys+`">
        <thead>
         <tr>
         `+th_no+`
           <th>Nama</th>
        `;
        var td_ct = '<tbody id="tbody_'+key+'_'+keys+'">';
        var th_ct = '';
        var keys_th_ct = '';
        $.each(values,function(k_nama,v_nama){
          td_ct += `<tr>`;
          if(keys == 1){
            td_ct += `<td></td>`;
          }
          td_ct += `<td>`+k_nama+`</td>`;
          keys_th_ct = Object.keys(v_nama);

          $.each(v_nama,function(k_d,v_d){
            for (var i = 0; i < v_d.length; i++) {
              // console.log(v_d[i]);

              td_ct += `<td>`+ v_d[i].nilai+`</td>`;

            }



            });
            if(keys == 2){
              td_ct += `<td>`+ v_nama.Hasil+`</td>`;
              td_ct += `<td></td>`;
            }
            td_ct += `</tr>`;
        });

          // console.log(keys_th_ct);

        $.each(keys_th_ct, function(k_th,v_th){
          if(keys == 1 && v_th !== 'Hasil'){
            th_ct += '<th>'+v_th+'</th>';
          }
          if(keys == 2){
            th_ct += '<th>'+v_th+'</th>';
          }
        });
        if(keys == 2){
          th_ct += '<th>Ranking</th>';
        }
        // console.log(th_ct);
        th_ct += `</tr></thead>`;
        td_ct += `</tbody>`;
        table_content += th_ct;
        table_content += td_ct;
        table_content += `</table>`;
        // table_content += `</div>`;
        table_content += `</div>`;
        }
      });
      html_tab += li_content;
      html_tab += `</ul>
     </div>`;
     var table_penduduk =`
     <div class="tab-pane fade active show" id="tabs-three-home`+key+`" role="tabpanel" aria-labelledby="custom-tabs-three-home`+key+`">
    <div class="table-responsive">
     <table class="table table table-bordered table-striped" id="penduduk_`+key+`">
     <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
     `;

     var td = '<tbody>';
     var th = '';
     var keys_th = '';
       $.each(res.data_penduduk,function(k_name,v_name){
         td += `
         <tr>
         <td></td>
         <td>`+k_name+`</td>
         `;
         keys_th = Object.keys(v_name);
         $.each(v_name,function(k,v){
           td += `<td>`+v_name[k]+`</td>`;
         });
         td += `</tr>`;
       });
       $.each(keys_th, function(k_th,v_th){
         th += '<th>'+v_th+'</th>';
       })
       th += `</tr></thead>`;
       td += `</tbody>`;
       table_penduduk += th;
       table_penduduk += td;
       table_penduduk += `</table>`;
       table_penduduk += `</div>`;
       table_penduduk += `</div>`;
       html_tab += `
       <div class="card-body" id="body-tab-customs">
          <div class="tab-content" id="custom-tabs-three-tabContent">
       `;
       html_tab += table_penduduk;
       html_tab += table_content;
       html_tab += `</div>`;

    $('#hasil_bansos_'+key).html(html_tab);
    var table=$('#tbl_hasil_2_2');
 var tbody =$('#tbody_2_2');
 var accordion =$('#accordion');

 // var arrData = $('#tbl_hasil_2').find('tbody >tr:has(td)').get();
 // console.log(accordion);
 var table_penduduk = $('#penduduk_'+key).DataTable({
    "dom": "Bfrtip",
    "buttons" : [
      {
                    text: 'Print Excel',
                    action: function ( e, dt, node, config ) {
                      // console.log(node);
                       fnExcelReport('penduduk_'+key,title,key);
                    }
                },
    ],
    "fixedHeader": true,
    "respo nseive": false,
    "scrollCollapse": true,
    "scrollY": "400px",
    "scrollX": 250,
    "paging":false,
    "search":false,
    "responsive" : false,
  });
  table_penduduk.on( 'order.dt search.dt', function () {
          table_penduduk.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;
          } );
      } ).draw();
   table_penduduk.columns.adjust().draw();
 var table_hasil1 = $('#tbl_hasil_'+key+'_1').DataTable({
    "dom": "Bfrtip",
    "buttons" : [
      {
                    text: 'Print Excel',
                    action: function ( e, dt, node, config ) {
                      // console.log(node);
                       fnExcelReport('tbl_hasil_'+key+'_1',title,key);
                    }
                },
    ],
    "fixedHeader": true,
    "respo nseive": false,
    "scrollCollapse": true,
    "scrollY": "400px",
    "scrollX": 250,
    "paging":false,
    "search":false,
    "responsive" : false,
  });
  table_hasil1.on( 'order.dt search.dt', function () {
          table_hasil1.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;
          } );
      } ).draw();
   table_hasil1.columns.adjust().draw();
 var table_hasil2 = $('#tbl_hasil_'+key+'_2').DataTable({
    "dom": "Bfrtip",
    "buttons" : [
      {
                    text: 'Print Excel',
                    action: function ( e, dt, node, config ) {
                      // console.log(node);
                       fnExcelReport('tbl_hasil_'+key+'_2',title,key);
                    }
                },
    ],
    "fixedHeader": true,
    "respo nseive": false,
    "scrollCollapse": true,
    "scrollY": "400px",
    "scrollX": 250,
    "paging":false,
    "search":false,
    "responsive" : false,
    "order" : [[10,'desc']]
  });
  table_hasil2.on( 'order.dt', function () {
          table_hasil2.column(11, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
              cell.innerHTML = i+1;
          } );
      } ).draw();
   table_hasil2.columns.adjust().draw();
// arrData.sort(function (a, b) {
//  var val1 = $(a).children('td').eq(col).text().toUpperCase();
//  var val2 = $(b).children('td').eq(col).text().toUpperCase();
//    if ($.isNumeric(val1) && $.isNumeric(val2))
//        return sortOrder == 1 ? val1 - val2 : val2 - val1;
//      else
//        return (val1 < val2) ? -sortOrder : (val1 > val2) ? sortOrder : 0;
//                        });
//  $.each(arrData, function (index, row) {
//    tbody.append(row);
//      });
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
  function fnExcelReport(id,title,key)
{
	//var id_cust;
  // var batch = parseInt(_batch) + 1;
	var tab = document.getElementById(id);
  var periode = $('#periodde_'+key).val();
  console.log(periode);
	var title = "Report Hasil Bansos : "+title+"<br>"+periode;

		var htmls = "";
            var uri = 'data:application/vnd.ms-excel;base64,';
            var template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>';
            var base64 = function(s) {
                return window.btoa(unescape(encodeURIComponent(s)))
            };

            var format = function(s, c) {
                return s.replace(/{(\w+)}/g, function(m, p) {
                    return c[p];
                })
            };
						var column_count = tab.rows[0].childElementCount;
						var row_title = '<tr align="center"><td colspan="'+column_count+'"><span style="font-size:35px;font-weight:bold">'+title+'</span></td></tr>';


						var tab_text="<table border='2px'>"+row_title+"<tr bgcolor='#051fa1' style='color:white'>";
							// console.log(tab.rows[0].childElementCount);
							// console.log(tab.rows[0]);
				    var textRange; var j=0;
				     // id of table

				    for(j = 0 ; j < tab.rows.length ; j++)
				    {
              var html_text = tab.rows[j].innerHTML;
              if(j == 0){
              html_text = html_text.replaceAll("height: 0px;","");
              // console.log(html_text);
              }
				        tab_text=tab_text+html_text+"</tr>";
				        //tab_text=tab_text+"</tr>";
				    }
            var colspanFooter = column_count - 3;
				    // tab_text=tab_text+'<tr align="center" bgcolor="#87AFC6"><td colspan="'+colspanFooter+'"><span style="font-size:30px;font-weight:bold">Total All</span></td><td><span style="font-size:30px;font-weight:bold">'+get_ammont_format(total_all)+'</span></td></tr></table>';
						//console.log(tab_text);
				    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
				    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
				    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params
            htmls = tab_text;

            var ctx = {
                worksheet : 'Worksheet',
                table : htmls
            }
						// var date = getFormattedDates(new Date());
						var filename = "bansos";
            var link = document.createElement("a");
            link.download = "export"+filename+".xls";
            link.href = uri + base64(format(template, ctx));
            link.click();
}
</script>

<?= $this->endSection() ?>
