<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />
  <title><?php echo env('APP_NAME'); ?></title>


    <!-- Bootstrap -->
    <link href="<?php public_path(); ?>admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php public_path(); ?>admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php public_path(); ?>admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php public_path(); ?>admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php public_path(); ?>admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php public_path(); ?>admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php public_path(); ?>admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <link href="<?php public_path(); ?>admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php public_path(); ?>admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php public_path(); ?>admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php public_path(); ?>admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php public_path(); ?>admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php public_path(); ?>admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include base_path().'views/admin/partials/navbar.php'; ?>
       
          <div class="right_col" role="main">
            {{content}}
          </div>

        <?php include base_path().'views/admin/partials/footer.php'; ?>

      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php public_path(); ?>admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php public_path(); ?>admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php public_path(); ?>admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php public_path(); ?>admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php public_path(); ?>admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php public_path(); ?>admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php public_path(); ?>admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php public_path(); ?>admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php public_path(); ?>admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php public_path(); ?>admin/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php public_path(); ?>admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php public_path(); ?>admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php public_path(); ?>admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php public_path(); ?>admin/vendors/moment/min/moment.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php public_path(); ?>admin/build/js/custom.min.js"></script>
    
<!-- Datatables -->
<script src="<?php public_path(); ?>admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php public_path(); ?>admin/vendors/pdfmake/build/vfs_fonts.js"></script>

  </body>
</html>
