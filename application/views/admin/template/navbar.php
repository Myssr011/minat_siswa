<ul class="sidebar-menu">
  <li class="header">MENU</li>

  <li class="<?php if ($this->uri->segment(2) == "dashboard") {
                echo "active";
              } ?> treeview">
    <a href="<?php echo base_url(); ?>admin/dashboard">
      <i class="fa fa-home"></i> <span>Dashboard</span>
    </a>
  </li>

  <?php
  $user_data = $this->session->userdata();
  if ($user_data['role'] == 'admin') {
  ?>
    <li class="<?php if ($this->uri->segment(2) == "user") {
                  echo "active";
                } ?> treeview">
      <a href="<?php echo base_url(); ?>admin/user">
        <i class="fa fa-folder-open"></i> <span>User</span>
      </a>
    </li>

    <li class="<?php if ($this->uri->segment(2) == "siswa") {
                  echo "active";
                } ?> treeview">
      <a href="<?php echo base_url(); ?>admin/siswa">
        <i class="fa fa-book"></i> <span>Siswa</span>
      </a>
    </li>

    <li class="<?php if ($this->uri->segment(2) == "soal") {
                  echo "active";
                } ?> treeview">
      <a href="<?php echo base_url(); ?>admin/soal">
        <i class="fa fa-book"></i> <span>Soal</span>
      </a>
    </li>
  <?php } ?>
  </li>
  <br>
</ul>