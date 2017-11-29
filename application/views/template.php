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

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo THEME; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js??key=AIzaSyCwYQT-WMW5KgJUqF-PjmcSlFQ2iWmAiRI&libraries=drawing,geometry,distance"></script>
    <script src="<?php echo THEME; ?>sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo THEME; ?>sweetalert.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo BASE_URL.'assets/';?>new-logo.png" type="image/x-icon">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
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

    <!-- Morris.js charts -->
    <script src="<?php echo THEME; ?>raphael-min.js"></script>
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
    <!-- AdminLTE App -->
    <script src="<?php echo THEME; ?>dist/js/app.min.js"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script type="text/javascript">
      $("#dataTables-data").DataTable({responsive: true});
      $("#dataTables-permohonan").DataTable({responsive: true});
      $("#dataTables-bap").DataTable({responsive: true });
      $("#dataTables-pra").DataTable({responsive: true });
      $("#dataTables-arsip").DataTable({responsive: true });
      $("#dataTables-disposisi").DataTable({responsive: true });
      $("#dataTables-user").DataTable({responsive: true });
      $("#dataTables-mDesa").DataTable({responsive: true });
      $("#dataTables-mKecamatan").DataTable({responsive: true });
      $("#dataTables-koordinat").DataTable({responsive: true });

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

      function autofill() {
        var nik = $('#search').val();
        if (nik='') {
          $('#details_nik').prop('disabled',true);
        }else{
          $('#details_nik').prop('disabled',false);
          $.ajax({
            url:'search',
            dataType: 'json',
          }).success(function(data){
            obj = JSON.parse(data);
            $('#nik').val(obj.nik);
            $('#kk').val(obj.kk);
            $('#nama').val(obj.nama);
            $('#tempat_lahir').val(obj.tempat_lahir);
            $('#tanggal_lahir').val(obj.tanggal_lahir);
            $('#pendidikan').val(obj.pendidikan);
            $('#agama').val(obj.agama);
            $('#pekerjaan').val(obj.pekerjaan);
            $('#status_kawin').val(obj.status_kawin);
            $('#status_dalam_keluarga').val(obj.status_dalam_keluarga);
            $('#jumlah_anggota_keluarga').val(obj.jumlah_anggota_keluarga);
            $('#rt').val(obj.rt);
            $('#dusun').val(obj.dusun);
            $('#desa').val(obj.desa);
            $('#alamat').val(obj.alamat);
          });
        }
      }
      // MAPS
    </script>
  </body>
</html>
