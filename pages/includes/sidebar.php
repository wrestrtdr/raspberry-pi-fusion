  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
	
	
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="../index.php"><i class="fa fa-dashboard"></i> Dashboard Overview</a></li>
            <li><a href="../pages/rpi_status.php"><i class="fa fa-bar-chart"></i> Status Information</a></li>
          </ul>
        </li>
        
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-info-circle"></i> <span>System Information</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-microchip"></i> Board & SoC
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="../pages/rpi_soc.php"><i class="fa fa-microchip"></i> Board & SoC</a></li>
				<li><a href="../pages/rpi_cpu.php"><i class="fa fa-microchip"></i> CPU</a></li>
				<li><a href="../pages/rpi_memory.php"><i class="fa fa-microchip"></i> Memory</a></li>
				<li><a href="../pages/rpi_network.php"><i class="fa fa-sitemap"></i> Network</a></li>
				<li><a href="../pages/rpi_storage.php"><i class="fa fa-hdd-o"></i> Storage</a></li>				
              </ul>
            </li>
			
			<li>
              <a href="#"><i class="fa fa-exchange"></i> Interfaces
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="../pages/dev_av.php"><i class="fa fa-exchange"></i> Audio / Video</a></li>
				<li><a href="../pages/rpi_gpio_status.php"><i class="fa fa-exchange"></i> GPIO Status</a></li>
				<li><a href="../pages/rpi_memory.php"><i class="fa fa-exchange"></i> USB Devices</a></li>					    
              </ul>
            </li>
			
			<li>
              <a href="#"><i class="fa fa-server"></i> Operating System
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="../pages/sys_os.php"><i class="fa fa-server"></i> General Information</a></li>
				<li><a href="../pages/sys_modules.php"><i class="fa fa-server"></i> Kernel Modules</a></li>
				<li><a href="../pages/sys_processes.php"><i class="fa fa-server"></i> Running Processes</a></li>
				<li><a href="../pages/sys_services.php"><i class="fa fa-server"></i> Running Services</a></li>
				<li><a href="../pages/sys_packages.php"><i class="fa fa-server"></i> Software Packages</a></li>
				<li><a href="../pages/sys_users.php"><i class="fa fa-server"></i> Users & Groups</a></li>			
              </ul>
            </li>

          </ul>
        </li>

		<li class="treeview">
          <a href="#">
            <i class="fa fa-area-chart"></i> <span>Statistics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../pages/charts_overview.php"><i class="fa fa-area-chart"></i> General Overview</a></li>
			<li><a href="../pages/charts_cpu.php"><i class="fa fa-area-chart"></i> CPU</a></li>
            <li><a href="#"><i class="fa fa-area-chart"></i> Memory</a></li>
			<li><a href="#"><i class="fa fa-area-chart"></i> Network</a></li>
			<li><a href="#"><i class="fa fa-area-chart"></i> Storage</a></li>
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-keyboard-o"></i> <span>Control</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-microchip"></i> GPIO Functions
			  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="#"><i class="fa fa-exchange"></i> GPIO</a></li>
				<li><a href="#"><i class="fa fa-exchange"></i> I2C</a></li>
				<li><a href="#"><i class="fa fa-exchange"></i> PWM</a></li>
				<li><a href="#"><i class="fa fa-exchange"></i> SPI</a></li>
				<li><a href="#"><i class="fa fa-exchange"></i> UART</a></li>				
              </ul>
            </li>

			<li><a href="#"><i class="fa fa-camera"></i> Camera (CSI)</a></li>
			<li><a href="#"><i class="fa fa-desktop"></i> Display (DSI)</a></li>

          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-plus-circle"></i> <span>Add-ons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
				<ul class="treeview-menu">
				<li><a href="#"><i class="fa fa-bitcoin"></i> Cryptocoins Miner</a></li>
				<li><a href="#"><i class="fa  fa-microchip"></i> Sensors</a></li>
				</ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Tools</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="../pages/sys_phpinfo.php"><i class="fa  fa-info"></i> PHP Info</a></li>
			<li><a href="../pages/tools_pla.php"><i class="fa fa-database"></i> PHP Lite Admin</a></li>
			<li><a href="../pages/sys_terminal.php"><i class="fa fa-terminal"></i> Terminal</a></li>
          </ul>
        </li>
		
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Documentation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li>
              <a href="#"><i class="fa fa-book"></i> GPIO
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
				<li><a href="../pages/doc_gpio_func.php"><i class="fa fa-book"></i> Functions Overview</a></li>
				<li><a href="../pages/doc_gpio_headers.php"><i class="fa fa-book"></i> Headers RPi & Zero</a></li>		
				<li><a href="../pages/doc_gpio_headers_cm.php"><i class="fa fa-book"></i> Headers CM & I/O Board</a></li>				
              </ul>
            </li>
			
			<li><a href="../pages/doc_board_revs.php"><i class="fa fa-book"></i> Board Revisions</a></li>
			
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-certificate"></i> <span>Pi Fusion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../pages/pif_credits.php"><i class="fa fa-thumbs-up"></i> Credits</a></li>
			<li><a href="#"><i class="fa fa-money"></i> Donations</a></li>
			<li><a target="_blank" href="https://electrodrome.net/forum/rpi-projekt-pi-fusion"><i class="fa fa-question"></i> Forum / Help</a></li>
			<li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
			<li><a href="../pages/pif_settings.php"><i class="fa fa-gear"></i> Settings</a></li>
			<li><a target="_blank" href="https://github.com/ElectroDrome/raspberry-pi-fusion"><i class="fa fa-github"></i> Sourcecode (Github)</a></li>
          </ul>
        </li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>