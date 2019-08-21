<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li><a href="<?php echo site_url('so/index_tanggal');?>" aria-expanded="false"><i class="mdi mdi-apps"></i><span class="hide-menu">Dashboard</span></a></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-application"></i><span class="hide-menu">Monitoring</span></a>
                    <ul aria-expanded="false" class="collapse">
						<li><a href="<?php echo site_url('project');?>"> Main Project </a></li> 
                        <li><a href="<?php echo site_url('so');?>"> Project (SO) </a></li>
						<li><a href="<?php echo site_url('dashgm');?>"> Grafik Progress Project </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>