<!--<img src="<?php //echo base_url('assets/img/3.jpg');?>" height="140px" width="100%">-->
            <!-- Static navbar -->
            <!-- <div class="navbar navbar-default">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php //echo site_url('dashboard');?>">comBAT MANagement System</a>
                </div>
                </div>
            </div> -->

            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo site_url('dashboard');?>">
                            <!-- Logo icon --><b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <!-- <img src="<?php //echo base_url('assets/admin-pro/images/logo-icon.png')?>" alt="B" class="dark-logo" /> -->
                                <!-- Light Logo icon -->
                                <!-- <img src="<?php //echo base_url('assets/admin-pro/images/logo-light-icon.png')?>" alt="B" class="light-logo" />-->
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                             <!-- dark Logo text -->
                             <!--<img src="<?php echo base_url('assets/img/BM-logo2.png')?>" alt="MP" class="dark-logo" />-->
                             <!-- Light Logo text -->
                             <img src="<?php echo base_url('assets/admin-pro/assets/images/logo-light-text.png')?>" class="light-logo" alt="BM" /></span> </a>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <li class="nav-item hidden-sm-down"></li>
                        </ul>
                        <ul class="navbar-nav my-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/admin-pro/images/users/icon3.jpg')?>" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                    <ul class="dropdown-user">
                                        <li>
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src="<?php echo base_url('assets/admin-pro/images/users/icon3.jpg')?>" alt="user"></div>
                                                <div class="u-text">
                                                    <h4>Administrator</h4>
                                                    <p class="text-muted">@barokahtim</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                        <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                        <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?php echo site_url('dashboard/logout');?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
