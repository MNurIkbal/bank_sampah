<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('image/user/') . $this->session->userdata('foto') ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('nama'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MANAJEMEN ADMIN</li>

      <?php
      if ($this->session->userdata('level') == 'admin') {
      ?>

        <li><a href="app"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-recycle"></i>
            <span>Master Data Sampah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('sampah'); ?>"><i class="fa fa-circle-o"></i> <span>Data Sampah</span></a></li>
            <li><a href="<?= base_url('jenis_sampah'); ?>"><i class="fa fa-circle-o"></i> <span>Jenis Sampah</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-send"></i>
            <span>Master Data Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('pembelian'); ?>"><i class="fa fa-trash"></i> <span>Setor Sampah</span></a></li>
            <li><a href="<?= base_url('app/tarik_tabungan'); ?>"><i class="fa fa-cart-plus"></i> <span>Tarik Tabungan</span></a></li>
            <li><a href="<?= base_url('app/tabungan'); ?>"><i class="fa fa-money"></i> <span>Tabungan Sampah</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i>
            <span>Data Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="" target="_blank"><i class="fa fa-circle-o"></i> <span>Laporan Data Nasabah</span></a></li>
            <li><a href="" target="_blank"><i class="fa fa-circle-o"></i> <span>Laporan Data Sampah</span></a></li>
            <li><a href="" target="_blank"><i class="fa fa-circle-o"></i> <span>Laporan Data Transaksi</span></a></li>
            <li><a href="" target="_blank"><i class="fa fa-circle-o"></i> <span>Laporan Data Penjualan</span></a></li>
          </ul>
        </li>
        <li><a href="<?= base_url('operator'); ?>"><i class="fa fa-user"></i> <span>Data Operator</span></a></li>
        <li><a href="<?= base_url('anggota'); ?>"><i class="fa fa-user"></i> <span>Data Nasabah</span></a></li>
        <li><a href="<?= base_url('user'); ?>"><i class="fa fa-user"></i> <span>Data Administrator</span></a></li>

      <?php } 
      elseif($this->session->userdata('level') == "operator") { ?>
       <li><a href="app"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-recycle"></i>
            <span>Master Data Sampah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('sampah'); ?>"><i class="fa fa-circle-o"></i> <span>Data Sampah</span></a></li>
            <li><a href="<?= base_url('jenis_sampah'); ?>"><i class="fa fa-circle-o"></i> <span>Jenis Sampah</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-send"></i>
            <span>Master Data Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('pembelian'); ?>"><i class="fa fa-trash"></i> <span>Setor Sampah</span></a></li>
            <li><a href="<?= base_url('app/tarik_tabungan'); ?>"><i class="fa fa-cart-plus"></i> <span>Tarik Tabungan</span></a></li>
            <li><a href="<?= base_url('app/tabungan'); ?>"><i class="fa fa-money"></i> <span>Tabungan Sampah</span></a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-pdf-o"></i>
            <span>Data Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="" target="_blank"><i class="fa fa-circle-o"></i> <span>Laporan Data Nasabah</span></a></li>
            <li><a href="" target="_blank"><i class="fa fa-circle-o"></i> <span>Laporan Data Sampah</span></a></li>
            <li><a href="" target="_blank"><i class="fa fa-circle-o"></i> <span>Laporan Data Transaksi</span></a></li>
            <li><a href="" target="_blank"><i class="fa fa-circle-o"></i> <span>Laporan Data Penjualan</span></a></li>
          </ul>
        </li>

      <?php } elseif ($this->session->userdata('level') == 'anggota') { ?>
        <li><a href="<?= base_url('app'); ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="<?= base_url('app/sampah'); ?>"><i class="fa fa-trash"></i> <span>Data Sampah</span></a></li>
        <li><a href=""><i class="fa fa-money"></i> <span>Riwayat Tabungan Nasabah</span></a></li>
      <?php
      } ?>
    </ul>
  </section>
</aside>