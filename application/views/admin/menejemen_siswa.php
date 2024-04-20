<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA SISWA
      <small></small>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-users"></span>    Data Siswa</h3>
                  <a target="" href="<?php echo base_url();?>/admin/siswa/tambah" class="btn btn-primary pull-right" style="margin-right: 5px; margin-left: 5px;">Tambah Siswa</a>
                </div>

          <div class="box-body">
            <table class="table table-bordered table-hover table-striped" cellspacing="0" width="100%" id="myTable">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="12%">NISN</th>
                  <th width="30%">Nama</th>
                  <th width="">Jenis Kelamin</th>
                  <th width="">Kelas</th>
                  <th width="15%">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach($siswa as $list_siswa){ ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $list_siswa['nis'] ?></td>
                  <td><?php echo $list_siswa['nama_lengkap'] ?></td>
                  <td><?php echo ($list_siswa['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan') ?></td>
                  <td><?php echo $list_siswa['kelas'] ?></td>
                  <td>
                    <a href="<?php echo base_url() ?>/admin/siswa/hapus_siswa/<?php echo $list_siswa['nis'] ?>" class="btn btn-xs btn-danger demo-buku" data-toggle="confirmation"><span class="fa fa-trash"></span></a> 
                    <a href="<?php echo base_url() ?>/admin/siswa/edit_siswa/<?php echo $list_siswa['nis'] ?>" class="btn btn-xs btn-warning demo-buku"><span class="fa fa-pencil"></span></a> 
                    <a href="<?php echo base_url() ?>/admin/siswa/detail_siswa/<?php echo $list_siswa['nis'] ?>" class="btn btn-xs btn-success demo-buku"><span class="fa fa-eye"></span></a> 
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>





