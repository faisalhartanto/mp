<!--<img src="<?php echo base_url('assets/img/3.jpg');?>" height="140px" width="100%">-->
	<header class="main-header no-print">
    <!-- Logo -->
    <a href="<?php echo site_url('dashdir');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo base_url('assets/img/icon.png');?>"/></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="max-height: 28px" src="<?php echo base_url('assets/img/kisel-logo.png');?>"/></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	  
		<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li id="home" class="active"><a href="<?php echo site_url('dashdir');?>"><b>AMIRA</b> <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
		
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('template2/dist/img/avatar5.png');?>" class="user-image" alt="User Image">
			  <?php $uname= $this->session->userdata('user'); ?>
              <span class="hidden-xs"><?php echo $uname ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('template2/dist/img/avatar5.png');?>" class="img-circle" alt="User Image">

                <p>
                  Account
                  <small>Administrator</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('dashdir');?>" class="btn btn-primary btn-flat"><i class="fa fa-home"></i> Beranda</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('dashdir/logout');?>" class="btn btn-danger btn-flat"><i class="fa fa-sign-out"></i> Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
            <!-- Static navbar 
            <div class="navbar navbar-default">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('dashdir');?>">Aplikasi Sistem Informasi Inventaris dan Asset</a>
                </div>
                </div>
            </div>-->