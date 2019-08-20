<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('template2/dist/img/avatar5.png'); ?>" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <?php $uname = $this->session->userdata('user'); ?>
                <p><?php echo $uname; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>-->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li id="lap-data-brg" class="treeview">
                <a href="<?php echo site_url('dashdir'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </li>
            <li id="master" class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Master</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">

                    <li id="password"><a href="<?php echo site_url('password2/gantipassword'); ?>"><i
                                    class="fa fa-circle-o"></i> Ganti Password</a></li>
                </ul>
            </li>

            <li class="header">LABELS</li>
            <li><a href="<?php echo site_url('dashboard/logout'); ?>"><i class="fa fa-sign-out text-red"></i> <span>Keluar</span></a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!--  
<div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                        </span> Master</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <table class="table">
                                            
											<tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('typebarang'); ?>">Jenis Barang</a>
                                                </td>
                                            </tr>
											
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('merk'); ?>">Merk Barang</a>
                                                </td>
                                            </tr>
											
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('dashboard/petugas'); ?>">Pengguna</a>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('vendor'); ?>">Vendor</a>
                                                </td>
                                            </tr>
											<tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('import_excel'); ?>">Import Data Barang</a>
                                                </td>
                                            </tr>
											
                                        </table>
                                    </div>
                                </div>
                            </div>
                
				
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span> Transaksi</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-cloud-upload text-success"></span> <a href="<?php echo site_url('brg/tambah'); ?>">Input Barang</a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
				
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-th">
                            </span>Laporan Data barang</a>
                        </h4>
                    </div>
                    
						<div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table"> 
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('laporan/excelexport/BL'); ?>">Bangunan</a>
                                                </td>
                                            </tr>
											<tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('laporan/excelexport/OE'); ?>">Inventaris Kantor</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('laporan/excelexport/VH'); ?>">Kendaraan</a>
                                                </td>
                                            </tr>
											<tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('laporan/excelexport/FF'); ?>">Mebel dan Alat Kantor</a>
                                                </td>
                                            </tr>
											
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('laporan/excelexport/MP'); ?>">Mesin dan Alat Produksi<a>
                                                </td>
                                            </tr>
											
											<tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('laporan/excelexport/ST'); ?>">Partisi</a>
                                                </td>
                                            </tr>
											<tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('laporan/excelexport/IE'); ?>">Peralatan Sistem Informasi</a>
                                                </td>
                                            </tr>
											<tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('laporan/excelexport/LN'); ?>">Tanah</a>
                                                </td>
                                            </tr>
											
                                        </table>
                                    </div>
                                </div>
                </div>
				
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="<?php echo site_url('dashboard/logout'); ?>"><span class="glyphicon glyphicon-off">
                            </span> Logout</a>
                        </h4>
                    </div>
                </div>
</div>-->