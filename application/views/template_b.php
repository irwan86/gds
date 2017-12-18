<?php 
// Controller Level Navigasi
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo THEME; ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo THEME; ?>Font_Awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo THEME; ?>ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo THEME; ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo THEME; ?>dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo THEME;?>plugins/datatables-plugins/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo THEME;?>plugins/datatables-responsive/dataTables.responsive.css">
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="<?php echo THEME; ?>plugins/iCheck/flat/blue.css"> -->
    <!-- Morris chart -->
    <!-- <link rel="stylesheet" href="<?php echo THEME; ?>plugins/morris/morris.css"> -->
    <!-- jvectormap -->
    <!-- <link rel="stylesheet" href="<?php echo THEME; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css"> -->
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo THEME; ?>plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo THEME; ?>plugins/daterangepicker/daterangepicker-bs3.css">
    <!--  -->
    <link rel="stylesheet" href="<?php echo THEME; ?>plugins/select2/select2.min.css">
    <!-- bootstrap wysihtml5 - text editor --
    <link rel="stylesheet" href="<?php echo THEME; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js??key=AIzaSyCwYQT-WMW5KgJUqF-PjmcSlFQ2iWmAiRI&libraries=drawing,geometry,distance"></script>
    <!--  -->
    <script src="<?php echo THEME; ?>sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo THEME; ?>sweetalert.css">
    <link rel="stylesheet" href="<?php echo THEME; ?>plugins/fancybox/jquery.fancybox.css">

    <link rel="stylesheet" href="<?php echo THEME; ?>plugins/fancybox/helpers/jquery.fancybox-buttons.css">
    <link rel="stylesheet" href="<?php echo THEME; ?>plugins/fancybox/helpers/jquery.fancybox-thumbs.css">

    <link rel="stylesheet" href="<?php echo THEME;?>sidesa.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo BASE_URL.'assets/';?>new-logo.png" type="image/x-icon">
  </head>
  <body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
    <div class="wrapper">
      <?php $this->load->view('top-navbar'); ?>
      <?php $this->load->view('side-navbar'); ?>
      <div class="content-wrapper">
        <?php $this->load->view($main_content); ?>
      </div>
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2017 <a href="#">Pemerintah Desa Gantung</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo THEME; ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo THEME; ?>plugins/jQueryUI/jquery-ui2.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo THEME; ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo THEME; ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo THEME; ?>plugins/datatables-plugins/dataTables.bootstrap.js"></script>
    <script src="<?php echo THEME; ?>plugins/datatables-responsive/dataTables.responsive.js"></script>
    <!-- Input Mask -->
    <script src="<?php echo THEME; ?>plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo THEME; ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo THEME; ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- JQUERY upload -->
    <script src="<?php echo THEME; ?>plugins/jquery.ajaxfileupload.js"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo THEME; ?>raphael-min.js"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo THEME; ?>jquery.form.min.js"></script>
    <!-- <script src="<?php echo THEME; ?>plugins/morris/morris.js"></script> -->
    <!-- Sparkline -->
    <script src="<?php echo THEME; ?>plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <!-- <script src="<?php echo THEME; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
    <!-- <script src="<?php echo THEME; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="<?php echo THEME; ?>plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo THEME; ?>moment.min.js"></script>
    <script src="<?php echo THEME; ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo THEME; ?>plugins/datepicker/bootstrap-datepicker.js"></script>

    <!--  -->
    <script src="<?php echo THEME; ?>plugins/select2/select2.min.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo THEME; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo THEME; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo THEME; ?>plugins/fastclick/fastclick.min.js"></script>
    <!-- Download JS -->
    <!-- AdminLTE App -->
    <script src="<?php echo THEME; ?>dist/js/app.min.js"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="<?php echo THEME; ?>plugins/fancybox/jquery.mousewheel.pack.js"></script>

    <script src="<?php echo THEME; ?>plugins/fancybox/jquery.fancybox.pack.js"></script>
<!--  -->
    <script src="<?php echo THEME; ?>plugins/fancybox/helpers/jquery.fancybox-media.js"></script>
    <script src="<?php echo THEME; ?>plugins/fancybox/helpers/jquery.fancybox-buttons.js" ></script>
    <script src="<?php echo THEME; ?>plugins/fancybox/helpers/jquery.fancybox-thumbs.js" ></script>

    <!-- <script type="text/javascript" src="<?php echo THEME; ?>plugins/webcamReader/js/qrcodelib.js"></script>
    <script type="text/javascript" src="<?php echo THEME; ?>plugins/webcamReader/js/webcodecamjquery.js"></script>

    <script type="text/javascript" src="<?php echo THEME; ?>plugins/webcamReader/js/webcodecamjs.js"></script>
    <script type="text/javascript" src="<?php echo THEME; ?>plugins/webcamReader/js/mainjquery.js"></script>
    <script type="text/javascript" src="<?php echo THEME; ?>plugins/webcamReader/js/decoderworker.js"></script>
    <script type="text/javascript" src="<?php echo THEME; ?>plugins/webcamReader/js/main.js"></script> -->
    <!--  -->
    <script type="text/javascript" src="<?php echo THEME; ?>plugins/html2canvas.js"></script>
  
    <script type="text/javascript">

      function refresh(){
        location.reload();
      }

      $(".select2").select2();
      $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
      $("[data-mask]").inputmask();
    
      $(".fancybox").fancybox({
        closeBtn  : false,
        helpers		: {
          buttons	: {}
        }
      });

      $("#table_arsip_masuk").DataTable({
        responsive: true, 
        order:[[ 0, "desc"]],
        rowGroup: {
          dataSrc: 'tipe'
          }
      });

      $("#list-user").DataTable({
        responsive: true, 
        order:[[ 5, "desc"]]        
      });

// ==========================
// Pertanahan
      $("#list_permohonan").DataTable({
        responsive: true,
      });

      $("#list_bap").DataTable({
        responsive: true,
      });

      $("#table_klasifikasi_surat").DataTable({
        responsive: true, 
        rowGroup: {
          dataSrc: 'tipe'
          }
      });

      $("#master_penduduk").DataTable({
        responsive: true, 
        rowGroup: {
          dataSrc: 'no_kk'
          }
      });

      $("#mutasi_penduduk").DataTable({
        responsive: true, 
        rowGroup: {
          dataSrc: 'no_kk'
          }
      });

      $("#adm-wilayah").DataTable({
        responsive: true, 
        rowGroup: {
          dataSrc: 'nama_dusun'
          }
        // "processing": true,
        // "serverSide": true,
        // "order": [], //Initial no order.
        //             // Load data for the table's content from an Ajax source
        //             "ajax": {
        //                 "url": '<?php echo BASE_URL.'adm/json';?>',
        //                 "type": "POST"
        //             },
        //             //Set column definition initialisation properties.
        //             "columnDefs": [
        //               { 
        //                   "targets": [ 0 ], 
        //                   "orderable": false, 
        //               },
        //               ],
       
      });
      $("#adm-desa").DataTable({
        responsive: true, 
        rowGroup: {
          dataSrc: 'nama_kecamatan'
          }
      });
      $("#adm-dusun").DataTable({
        responsive: true, 
        rowGroup: {
          dataSrc: 'nama_desa'
        }
      });
      $("#notif_history").DataTable({
        responsive: true, 
        order:[[ 1, "desc"]]
      });
      // fast_search system load
      $('#fast_search').select2({
        ajax: {
          url: 'lookup',
          dataType: 'json',
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });

      // MAPS
</script>
<script>
// ======= Posting Via Ajax 
 var getUrl = window.location;
 var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
//  ========= //
  var save_method;
  var arsip_method;      
  function cari_data() {
        event.preventDefault();
        var nik = $('[name="cari_tanah_nik"]').val();
        if(nik!=''){
          $('#loader-icon').show();
          $('#result_cari_data').hide();
          $('#data_kosong').hide();
          $.ajax({
            url:'<?php echo BASE_URL.'cari/nik/';?>'+nik,
            type:'GET',
            success:function(data){
              $('#loader-icon').hide();
              if(data!='null' ){
                var obj = JSON.parse(data);
                  console.log(data);
                $('#no_nik').text("NIK "+obj.no_nik);
                $('#no_kk').text("No. KK "+obj.no_kk);
                $('#nama').text(obj.nama);
                $('#ttl').text(obj.tempat_lahir+"/"+obj.tanggal_lahir);
                $('#pddk_akhir').text(obj.pddk_akhir);
                $('#shdk').text(obj.shdk);
                $('#agama').text(obj.agama);
                $('#pekerjaan').text(obj.pekerjaan);
                $('#status').text(obj.status);
                $('#shdrt').text(obj.shdrt+"  Orang");
                $('#alamat').text(obj.alamat);
                $('#no_rt').text(obj.no_rt);
                $('#dusun').text(obj.dusun);
                $('[name="kependudukan_id"]').val(obj.id);
                $('[name="no_nik"]').val(obj.no_nik);
                $('[name="pemohon"]').val(obj.nama);

                $('#result_cari_data').show();
                $('#data_kosong').hide();
              }else{
                $('#result_cari_data').hide();
                $('#data_kosong').show();
              }             
            }, error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                  }
          });
        }
      }

  function cari_data_skt(){
        event.preventDefault();
        var nik = $('[name="cari_tanah_skt"]').val();
        if(nik!=''){
          $('#loader-icon').show();
          $('#result_cari_data').hide();
          $('#data_kosong').hide();
          $.ajax({
            url:'<?php echo BASE_URL.'cari/skt/';?>'+nik,
            type:'GET',
            success:function(data){
              $('#loader-icon').hide();
              if(data!='null' ){
                var obj = JSON.parse(data);
                  console.log(data);
                $('#no_nik').text("NIK "+obj.no_nik);
                $('#no_kk').text("No. KK "+obj.no_kk);
                $('#nama').text(obj.nama);
                $('#ttl').text(obj.tempat_lahir+"/"+obj.tanggal_lahir);
                $('#pddk_akhir').text(obj.pddk_akhir);
                $('#shdk').text(obj.shdk);
                $('#agama').text(obj.agama);
                $('#pekerjaan').text(obj.pekerjaan);
                $('#status').text(obj.status);
                $('#shdrt').text(obj.shdrt+"  Orang");
                $('#alamat').text(obj.alamat);
                $('#no_rt').text(obj.no_rt);
                $('#dusun').text(obj.dusun);
                $('[name="kependudukan_id"]').val(obj.id);
                $('[name="no_nik"]').val(obj.no_nik);
                $('[name="pemohon"]').val(obj.nama);

                $('#result_cari_data').show();
                $('#data_kosong').hide();
              }else{
                $('#result_cari_data').hide();
                $('#data_kosong').show();
              }
             
            }, error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                  }
          });
        }
      }





    function input_penduduk_baru(){
      swal({
              title: 'Apa Anda Menginput Data Penduduk Baru?',
              text: "Data penduduk Akan digunakan untuk mengaktifkan fitur - fitur SiDesa !",
              type: 'success',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Setujui Data!'              
            }, function isConfirm(){
              $('#input_data_penduduk_baru')[0].reset();
              $('#modal_input_data_penduduk_baru').modal('show');
            });
             
    }

    function save_data_penduduk_baru(){
        $('#input_data_penduduk_baru').submit(function(evt){
          evt.preventDefault();
          var url = '<?php echo BASE_URL."input/datapenduduk";?>';
          var formData = new FormData($(this)[0]);
          $.ajax({
            url:url,
            type: "POST",
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(data){
              swal('Selamat !','Berhasil Input Data Penduduk Baru Ke Sistem!','success');
              location.reload();
            }, error: function (jqXHR, textStatus, errorThrown) {
              swal('Oops...','Something went wrong!','error');
             }
          });
          
        });
    }

    function desa_edit(){
      $('#data_desa_form')[0].reset();
      $('#modal_data_desa').modal('show');
    }
    
    function permohonan_setujui(id){
      event.preventDefault();
      var url = '<?php echo BASE_URL.'permohonan/setujui/';?>'+id;
      swal({
              title: 'Apa Anda Yakin untuk Menyetujui Permohonan?',
              text: "Akses ke Form Pernyataan akan dibuka!",
              type: 'success',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Setujui Data!'              
            }, function isConfirm(){
              $.ajax({
                url:url,
                type:"POST",
                dataType:"JSON",
                success: function (data){
                  swal('Selamat !','Berhasil Buka Kunci data!','success');
                  location.reload();
                },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                  }
              });
            });
    }

    function posting_permohonan(){
      $('#permohonan_form').submit(function(evt){
        evt.preventDefault();
        var formData = new FormData($(this)[0]);
        var url = '<?php echo BASE_URL.'permohonan/input';?>';
        $.ajax({
            url:url,
            type: "POST",
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(data){
              swal('Selamat !','Berhasil Posting Permohonan!','success');
              location.reload();
            }, error: function (jqXHR, textStatus, errorThrown) {
              swal('Oops...','Something went wrong!','error');
             }
          });
      
      });
    }
    
    function buat_disposisi(){
      $('#disposisi_input')[0].reset();
      $('#modal_disposisi').modal('show');
    }

    function cetak_disposisi(id){
      event.preventDefault();
        var url = '<?php echo BASE_URL."disposisi/cetak/";?>'+id;
        swal({
              title: 'Apa Anda Yakin untuk Mencetak?',
              text: "Data Naskah Dinas Akan Di Cetak!",
              type: 'success',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Cetak Data!'              
            }, function isConfirm(){
              $.ajax({
                url:url,
                type:"POST",
                dataType:"JSON",
                success: function (data){
                  swal('Selamat !','Berhasil Mencetak data!'+data.link,'success');
                  location.reload();
                },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                  }
              });
            });
    }

    // ====================================== PERTANAHAN
    function cetak_permohonan(id){
      event.preventDefault();
      var url = '<?php echo BASE_URL."permohonan/cetak/";?>'+id;
        swal({
              title: 'Apa Anda Yakin untuk mencetak Surat Permohonan?',
              text: "Cetak Surat Permohonan "+id+" dari Sistem!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Cetak!'              
            }, function isConfirm(){
              $.ajax({
                url:url,
                type:"POST",
                dataType:"JSON",            
                success: function (data){
                  swal('Selamat !','Berhasil Generate PDF !','success');
                  location.reload();
                },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                  }
              });
            });
    }
    
    function pernyataan_input(){
      $('#pernyataan_input')[0].reset();
      $('#modal_pernyataan').modal('show');
    }

    function input_tim_verifikasi(){
      $('#bap_input')[0].reset();
      $('#modal_bap').modal('show');
    }

    function bap_save(){
      event.preventDefault();
      swal({
        title: 'Apa Anda Yakin?',
              text: "Data Tim Verifikasi Akan di Input ke Sistem!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Simpan!'              
            }, function isConfirm(){
              $.ajax({
                url:'<?php echo BASE_URL."berita_acara/input";?>',
                type:"POST",
                data:$('#bap_input').serialize(),
                dataType:"JSON",            
                success: function(data){
                  swal('Selamat !','Berhasil Posting Data Tim Verifikasi Tanah !','success');
                  location.reload();
                }
                ,error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                    location.reload();
                  }
              });
      });
    }

    function pernyataan_save(){
      event.preventDefault();
      swal({
              title: 'Apa Anda Yakin?',
              text: "Data Pernyataan Akan di Input ke Sistem!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Simpan!'              
            }, function isConfirm(){
              $.ajax({
                url:'<?php echo BASE_URL."pernyataan/input";?>',
                type:"POST",
                data:$('#pernyataan_input').serialize(),
                dataType:"JSON",            
                success: function(data){
                  swal('Selamat !','Berhasil Posting Data Pernyataan !','success');
                  location.reload();
                }
                ,error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                    location.reload();
                  }
              });           
            });
    }
    function cetak_pernyataan(id){
      event.preventDefault();
      var url = '<?php echo BASE_URL."pernyataan/cetak/";?>'+id;
      swal({
              title: 'Apa Anda Yakin?',
              text: "Cetak Surat Peryataan dari Sistem!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Cetak!'              
            }, function isConfirm(){
              $.ajax({
                url:url,
                type:"POST",
                dataType:"JSON",            
                success: function (data){
                  swal('Selamat !','Berhasil Generate PDF !','success');
                  location.reload();
                },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                  }
              });
            });
    }

    // DISPOSISI
    function save_disposisi(){
        event.preventDefault();
        swal({
              title: 'Apa Anda Yakin?',
              text: "Kirim dan teruskan Disposisi!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Kirim!'              
            }, function isConfirm(){
              $.ajax({
                url:'<?php echo BASE_URL."disposisi/post";?>',
                type:"POST",
                data:$('#disposisi_input').serialize(),
                dataType:"JSON",            
                success: function (data){
                  swal('Selamat !','Berhasil Posting Data Disposisi !','success');
                  location.reload();
                },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                  }
              });
            });
      
    }
    
    function lihat_notif(id){
      $.ajax({
        url:'<?php echo BASE_URL."notifikasi/baca/";?>'+id,
        type:"POST",
        dataType:"JSON",
        success:function(data){
          swal('Ditandai!','Ditandai Telah Di Baca !','success');
        }, error: function (jqXHR, textStatus, errorThrown) {
              swal('Oops...','Something went wrong!','error');
             }
      });
    }

    function posting_arsip(){
      arsip_method = 'posting_arsip';
      $('#arsip_input')[0].reset();
      $('#modal_arsip').modal('show');
    }

      function baca_arsip(id){
        $.ajax({
          url:'<?php echo BASE_URL."disposisi/tandai/baca/";?>'+id,
          dataType: "JSON",
          type: "POST",
          success:function(data){
            swal('Selamat !','Membaca Detail!','success');
          }, error: function (jqXHR, textStatus, errorThrown) {
              swal('Oops...','Something went wrong!','error');
             }
        });
      }
      function save_arsip(){
        var url;
        switch (arsip_method) {
          case 'posting_arsip':
          url = '<?php echo BASE_URL."arsip/input";?>';
            break;
          case 'edit_arsip':
          url = '<?php echo BASE_URL."arsip/update";?>';
            break;
          default:
            break;
        }
        $('#arsip_input').submit(function(evt){
          evt.preventDefault();
          var formData = new FormData($(this)[0]);
          $.ajax({
            url:url,
            type: "POST",
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(data){
              swal('Selamat !','Berhasil Input Data Arsip!','success');
              location.reload();
            }, error: function (jqXHR, textStatus, errorThrown) {
              swal('Oops...','Something went wrong!','error');
             }
          });
          
        });
      }
      function posting(){
        save_method = 'posting_klasifikasi';
        $('#klasifikasi')[0].reset(); // reset form on modals
        $('#modal_klasifikasi').modal('show');
      }
      function delete_posting(id){
        event.preventDefault();
        var url = '<?php echo BASE_URL."klasifikasi/delete/";?>'+id;
        swal({
              title: 'Apa Anda Yakin?',
              text: "Data Akan dihapus Secara Permanen!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Iya, Hapus Data!'              
            }, function isConfirm(){
              $.ajax({
                url:url,
                type:"POST",
                dataType:"JSON",
                success: function (data){
                  swal('Selamat !','Berhasil Menghapus data!','success');
                  location.reload();
                },
                  error: function (jqXHR, textStatus, errorThrown)
                  {
                    swal('Oops...','Something went wrong!','error');
                  }
              });
            });
      }
      function edit_posting(id){
        save_method= 'edit_klasifikasi';
        $('#klasifikasi')[0].reset(); // reset form on modals
        $.ajax({
          url:'<?php echo BASE_URL."klasifikasi/get/";?>'+id,
          type:"GET",
          dataType:"JSON",
          success: function(data){
            $('[name="id"]').val(data.id);
            $('[name="kode"]').val(data.kode);
            $('[name="klasifikasi"]').val(data.klasifikasi);
            $('#modal_klasifikasi').modal('show');
            $('.modal-title').text('Edit Data Klasifikasi');
          },
            error: function (jqXHR, textStatus, errorThrown)
            {
              swal('Oops...','Something went wrong!','error');
            }
        });
      }
      function save(){
        var url;
        switch (save_method) {
          case 'posting_klasifikasi':
            url = '<?php echo BASE_URL."klasifikasi/posting";?>';
            break;
          case 'edit_klasifikasi':
            url = '<?php echo BASE_URL."klasifikasi/edit";?>';
            break;
          default:
            break;
        }
        $.ajax({
          url:url,
          type:'POST',
          data:$('#klasifikasi').serialize(),
          dataType: 'JSON',
          success: function (data){
            $('#modal_klasifikasi').modal('show');
            swal('Selamat !','Berhasil menambahkan data!','success');
            location.reload();
          },
            error: function (jqXHR, textStatus, errorThrown)
            {
              swal('Oops...','Something went wrong!','error');
            }
        });
      }
</script>
  </body>
</html>