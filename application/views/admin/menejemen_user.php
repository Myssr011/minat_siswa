<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manajemen User
      <small></small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">

          <div class="box-body">
            <div class="row">
              <div class="col-md-12">

                <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-database"></span>Data User</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
                  <a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-user"></span> Registrasi User</a>
                </div>

                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <table class="table table-bordered table-hover table-striped" cellspacing="0" width="100%" id="table_user">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Nama Lengkap</th>
                              <th>Email</th>
                              <th>No. Telp</th>
                              <th>Role</th>
                              <th>Kelas</th>
                              <th>Opsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                            foreach ($data_user as $list_user) { ?>
                              <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $list_user['username']; ?></td>
                                <td><?php echo "******"; ?></td>
                                <td><?php echo $list_user['nama_lengkap']; ?></td>
                                <td><?php echo $list_user['email']; ?></td>
                                <td><?php echo $list_user['no_hp']; ?></td>
                                <td><?php echo $list_user['role']; ?></td>
                                <td><?php echo $list_user['kelas']; ?></td>
                                <td>
                                  <a class="btn btn-xs btn-danger" style="margin : 0px 10px 0px 10px" href="<?php echo base_url(); ?>admin/user/hapus/<?php echo $list_user['idadmin']; ?>" data-toggle="confirmation"><span class="fa fa-trash"></span></a>
                                  <a class="btn btn-xs btn-warning" href="#" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $list_user['idadmin'] ?>"><span class="fa fa-pencil"></span></a>
                                </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar User Baru</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/user/registrasi_user">
          <div class="box-body">
            <div class="form-group">
              <label for="username" class="col-sm-3 control-label">Username</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="******" name="password">
              </div>
            </div>
            <div class="form-group">
              <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap">
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-3 control-label">Email</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label for="no_hp" class="col-sm-3 control-label">No.HP</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="no_hp" placeholder="No.HP" name="no_hp">
              </div>
            </div>
            <div class="form-group">
              <label for="role" class="col-sm-3 control-label">Role</label>
              <div class="col-sm-9">
                <select name="role" id="role" class="form-control" onchange="selectedRole(this.value)">
                  <option value="">Pilih Role</option>
                  <option value="admin">Admin</option>
                  <option value="wali-kelas">Wali Kelas</option>
                  <option value="kepala-sekolah">Kepala Sekolah</option>
                </select>
              </div>
            </div>
            <div class="form-group" id="kelasSelect" required>
              <label for="kelas" class="col-sm-3 control-label">Kelas (Pilih jelas wali kelas)</label>
              <div class="col-sm-9">
                <select name="kelas" class="form-control" required>
                  <option value="0">-- Pilih Kelas --</option>
                  <?php
                  foreach ($kelas as $kel) { ?>
                    <option value="<?php echo $kel['idkelas'] ?>"><?php echo $kel['kelas'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Daftar</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
</div>

<?php foreach ($data_user as $list_user02) { ?>
  <div class="example-modal modal fade bs-example-modal-sm<?php echo $list_user02['idadmin'] ?>" id="modal-register" data-focus-on="input:first" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="box-body">
          <div class="box-header with-border">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspEdit Data User</h4>
          </div>

          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/user/update/<?php echo $list_user02['idadmin']; ?>/">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                      <input type="" class="form-control" id="username" name="username" value="<?php echo $list_user02['username']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                      <input type="" class="form-control" id="password" name="password" value="<?php echo $list_user02['password']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label">Nama Lengkap</label>
                    <div class="col-md-9">
                      <input type="" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $list_user02['nama_lengkap']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                      <input type="" class="form-control" id="email" name="email" value="<?php echo $list_user02['email']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label">No.HP</label>
                    <div class="col-md-9">
                      <input type="" class="form-control" id="no_hp" name="no_hp" value="<?php echo $list_user02['no_hp']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_hp" class="col-sm-3 control-label">Role</label>
                    <div class="col-sm-9">
                      <select name="role" id="role" class="form-control">
                        <option value="">Pilih Role</option>
                        <option value="admin" <?php echo $list_user02['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                        <option value="wali-kelas" <?php echo $list_user02['role'] == 'wali-kelas' ? 'selected' : ''; ?>>Wali Kelas</option>
                        <option value="kepala-sekolah" <?php echo $list_user02['role'] == 'kepala-sekolah' ? 'selected' : ''; ?>>Kepala Sekolah</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group" id="kelasSelect" required>
              <label for="kelas" class="col-sm-3 control-label">Kelas (Pilih jelas wali kelas)</label>
              <div class="col-sm-9">
                <select name="kelas" class="form-control" required>
                  <option value="0">-- Pilih Kelas --</option>
                  <?php
                  foreach ($kelas as $kel) { ?>
                    <option value="<?php echo $kel['idkelas'] ?>" <?php echo $list_user02['idkelas'] == $kel['idkelas'] ? 'selected' : ''; ?>><?php echo $kel['kelas'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
