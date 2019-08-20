<!doctype html>
    <html>
        <head>
            <title>Monitoring Project | <?php echo $title;?></title>
            <!-- Bootstrap Core CSS -->
            <link href="<?php echo base_url('assets/admin-pro/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/admin-pro/plugins/perfect-scrollbar/css/perfect-scrollbar.css');?>" rel="stylesheet">

            <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="<?php echo base_url('assets/admin-pro/css/style.css')?>" rel="stylesheet">
            <!-- Dashboard 1 Page CSS -->
            <link href="<?php echo base_url('assets/admin-pro/css/pages/dashboard4.css')?>" rel="stylesheet">
            <!-- You can change the theme colors from here -->
            <link href="<?php echo base_url('assets/admin-pro/css/colors/default.css')?>" id="theme" rel="stylesheet">

            <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/datepicker.css');?>" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

			      <!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/style1.css');?>" /> -->

            <script src="<?php echo base_url('assets/admin-pro/plugins/jquery/jquery.min.js')?>"></script>
            <!-- Bootstrap popper Core JavaScript -->
            <script src="<?php echo base_url('assets/admin-pro/plugins/bootstrap/js/popper.min.js')?>"></script>
            <script src="<?php echo base_url('assets/admin-pro/plugins/bootstrap/js/bootstrap.min.js')?>"></script>
            <script src="<?php //echo base_url('template2/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
            <script src="<?php //echo base_url('assets/js/bootstrap.js');?>"></script>

        </head>
        <body class="fix-header card-no-border fix-sidebar">
          <!-- <div class="preloader">
              <div class="loader">
                  <div class="loader__figure"></div>
                  <p class="loader__label">BATMAN</p>
              </div>
          </div> -->

          <div id="main-wrapper">
            <?php echo $_header;?>
            <?php echo $_sidebar;?>

            <div class="page-wrapper">

              <div class="container-fluid">
                <?php echo $_content;?>
              </div>

              <footer class="footer">
                  © 2019 Barokah Tim
              </footer>

              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Konfirmasi</h4>
                    </div>
                    <div class="modal-body">
                          <input type="hidden" name="idhapus" id="idhapus">
                              <p>Apakah anda yakin ingin menghapus data ini?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->

            </div>

          </div>

        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="<?php echo base_url('assets/admin-pro/js/perfect-scrollbar.jquery.min.js')?>"></script>
        <!--Wave Effects -->
        <script src="<?php echo base_url('assets/admin-pro/js/waves.js')?>"></script>
        <!--Menu sidebar -->
        <script src="<?php echo base_url('assets/admin-pro/js/sidebarmenu.js')?>"></script>
        <!--stickey kit -->
        <script src="<?php echo base_url('assets/admin-pro/plugins/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
        <script src="<?php echo base_url('assets/admin-pro/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo base_url('assets/admin-pro/js/custom.min.js')?>"></script>

        <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
        <script>
          tinymce.init({selector:'textarea'});

          $(function(){
              $("#tanggal1").datepicker({
                  format:'yyyy-mm-dd'
              });

              $("#tanggal2").datepicker({
                  format:'yyyy-mm-dd'
              });

              $("#tanggal").datepicker({
                  format:'yyyy-mm-dd'
              });
          })
        </script>
		
        <!-- Core Scripts - Include with every page -->
		
     
        <script src="<?php echo base_url('assets/js/holder.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
        <script src="<?php echo base_url('assets/js/application.js');?>"></script>
        <script src="<?php //echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/raphael-2.1.0.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/morris.js');?>"></script>
        <script src="<?php echo base_url('assets/js/sb-admin.js');?>"></script>
        <script src="<?php echo base_url('assets/js/demo/dashboard-demo.js');?>"></script>
		<script src="<?php echo base_url('assets/template2/assets/js/material-dashboard.js');?>"></script>
		
	
		
		<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
		
        </body>
    </html>
