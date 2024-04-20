<div class="content-wrapper">
<section class="content-header">
    <h1>
      MENEJEMEN SISWA
      <small></small>
    </h1>
  </section>

  <section class="context">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspDetail Data Siswa</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                    <?php foreach ($siswa as $list_siswa) { ?>
                        <form method="post" action="<?php echo base_url();?>/admin/siswa/update_siswa/<?php echo $list_siswa['nis'] ?>">
                        <h4>IDENTITAS PESERTA DIDIK</h4><hr>
                        <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10 col-md-4">
                                <p><?php echo $list_siswa['username'];?></p>
                    </div>
                            </div>    
                        <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10 col-md-4">
                                <p><?php echo $list_siswa['nama_lengkap'];?></p>
                                </div>
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['jenis_kelamin'] == 'L' ? 'laki-laki' : 'Perempuan';?>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['nis'];?>
                                </div>
                                <label  class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10 col-md-4">
                                <?php echo $list_siswa['kelas'];?>
                                </div>
                            </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  
  </section>


</div>