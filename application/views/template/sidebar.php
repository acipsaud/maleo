  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("dashboard"); ?>">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard <?php //echo $this->session->userdata('level'); ?></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" >
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Kinerja</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("kinerja/all"); ?>">All</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("kinerja"); ?>">Unit</a></li>
            <!-- <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("kinerja/datel"); ?>">Datel</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("kinerja/hero"); ?>">Hero</a></li> -->
            <li class="nav-item">
              <a class="nav-link" href="#cek" aria-expanded="false" >
                <i class="#"></i>
                <span class="menu-title">Teritory</span>
              </a>
              <div id="cek">
                <ul class="nav flex-column sub-menu" style="padding:0px;padding-left:3px;color:#fff">
                  <li > <a class="nav-link" href="<?php echo site_url("kinerja/datel"); ?>"><i class="icon-contract menu-icon" style=""></i>Datel</a></li>
                  <li > <a class="nav-link" href="<?php echo site_url("kinerja/hero"); ?>"><i class="icon-contract menu-icon" style=""></i>Hero</a></li>
                  <li > <a class="nav-link" href="<?php echo site_url("kinerja/sto"); ?>"><i class="icon-contract menu-icon" style=""></i>STO</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#as" aria-expanded="false" >
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Track. Progress</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="as">
          <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('track/trackff'); ?>">Fact Finding</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('track/trackll'); ?>">Lesson Learn</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('track/trackplan'); ?>">Action Plan</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('track/tracksupport'); ?>">Support Needed</a></li>
          <li class="nav-item"> <a class="nav-link" href="#">Budged Plan</a></li>
          
          </ul>
        </div>
      </li>

      <?php
      if ($this->session->userdata('level')=='admin'){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url("manageuser"); ?>">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Managed User</span>
        </a>
      </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" >
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Master</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("kat_indikator"); ?>">Kategori Indikator</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("indikator"); ?>">Indikator</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("kinerja/datakinerja"); ?>">Kinerja</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("kandatel"); ?>">Datel</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("witel"); ?>">Witel</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("loker"); ?>">loker</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo site_url("teritory"); ?>">Teritory</a></li>
            </ul>
          </div>
        </li>
      <?php }else{ 
        if (($this->session->userdata('teritory')!='329') and ($this->session->userdata('loker')!='13') and ($this->session->userdata('loker')!='14') and ($this->session->userdata('loker')!='15') and ($this->session->userdata('loker')!='16') and ($this->session->userdata('loker')!='5') and ($this->session->userdata('loker')!='6')) {
        ?>
            <li style='color:#c1c5c9'>
                --------------------------------
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url("indikator"); ?>">
                <i class="icon-circle-plus menu-icon"></i>
                <span class="menu-title">Create Indikator </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url("kinerja/datakinerja"); ?>">
                <i class="icon-circle-plus menu-icon"></i>
                <span class="menu-title">Create Kinerja </span>
              </a>
            </li>
          <?php } ?>
      <?php } ?>
    </ul>
  </nav>