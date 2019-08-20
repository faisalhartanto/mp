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
            <li id="beranda" class="active treeview">
                <a href="<?php echo site_url('dashmgr'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Beranda</span>
                </a>
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
                    <!-- <li id="merk-barang"><a href="<?php echo site_url('merk2'); ?>"><i class="fa fa-circle-o"></i> Merk Barang</a></li>-->
                    <!--<li id="vendor"><a href="<?php echo site_url('vendor2'); ?>"><i class="fa fa-circle-o"></i> Vendor</a></li>-->
                    <li id="password"><a href="<?php echo site_url('password2/gantipassword'); ?>"><i
                                    class="fa fa-circle-o"></i> Ganti Password</a></li>
                </ul>
            </li>
            <li id="transaksi" class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Transaksi</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <!--<li id="input-barang"><a href="<?php echo site_url('brg2/tambah'); ?>"><i class="fa fa-circle-o"></i> Input Barang</a></li>-->
                    <!--<li id="input-barang"><a href="<?php echo site_url('brg2/index'); ?>"><i class="fa fa-circle-o"></i> Edit Data Barang</a></li>-->
                    <!--<li id="input-barang"><a href="<?php echo site_url('brg2/index_relokasi'); ?>"><i class="fa fa-circle-o"></i> Relokasi Barang</a></li>-->
                    <li id="input-barang"><a href="<?php echo site_url('brg2/index_approve'); ?>"><i
                                    class="fa fa-circle-o"></i> Approve Input Barang Baru</a></li>
                </ul>
            </li>
            <?php
            if (in_array($this->session->userdata('level'), array(1, 3))) {
                ?>
                <li id="lap-data-brg" class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i>
                        <span>Laporan Data barang</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li id="all"><a href="<?php echo site_url('laporan2/indexall'); ?>"><i
                                        class="fa fa-circle-o"></i>
                                All Kategori</a></li>
                        <li id="lap-excel"><a href="<?php echo site_url('laporan2/excelexport'); ?>"><i
                                        class="fa fa-circle-o"></i>
                                Export To Excel</a></li>
                    </ul>
                </li>
                <?php
            }
            ?>
            <!-- <li id="bangunan"><a href="<?php echo site_url('laporan2/excelexport/LN'); ?>"><i class="fa fa-circle-o"></i> Land</a></li>
            <li id="bangunan"><a href="<?php echo site_url('laporan2/excelexport/BL'); ?>"><i class="fa fa-circle-o"></i> Building</a></li>
            <li id="inventaris"><a href="<?php echo site_url('laporan2/excelexport/VC'); ?>"><i class="fa fa-circle-o"></i> Vehicles</a></li>
			<li id="bangunan"><a href="<?php echo site_url('laporan2/excelexport/MP'); ?>"><i class="fa fa-circle-o"></i> Machine and Production Tools</a></li>
            <li id="bangunan"><a href="<?php echo site_url('laporan2/excelexport/FT'); ?>"><i class="fa fa-circle-o"></i> Furniture and Fixture</a></li>
            <li id="inventaris"><a href="<?php echo site_url('laporan2/excelexport/IT'); ?>"><i class="fa fa-circle-o"></i> Information and Technology</a></li>
			<li id="bangunan"><a href="<?php echo site_url('laporan2/excelexport/OE'); ?>"><i class="fa fa-circle-o"></i> Office Equipment</a></li>
            <li id="bangunan"><a href="<?php echo site_url('laporan2/excelexport/LA'); ?>"><i class="fa fa-circle-o"></i> Lease Asset</a></li>
            <li id="inventaris"><a href="<?php echo site_url('laporan2/excelexport/LI'); ?>"><i class="fa fa-circle-o"></i> Leased Hold Improvement</a></li>
			<li id="inventaris"><a href="<?php echo site_url('laporan2/excelexport/IA'); ?>"><i class="fa fa-circle-o"></i> Intangible Asset</a></li>
            -->
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