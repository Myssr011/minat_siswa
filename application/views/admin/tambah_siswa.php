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
                  <h3 class="box-title"><span class="fa fa-database"></span>&nbsp&nbsp&nbspTambah Data Siswa</h3>
                  <!--<a target="" href="#" class="btn btn-primary pull-right" style="margin-top: -10px" data-toggle="modal" data-target=".bs-example-modal-tambah">Tambah Dosen</a>-->
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form method="post" action="<?php echo base_url();?>/admin/siswa/tambah_siswa">
                        <h4>IDENTITAS SISWA</h4><hr>
                        <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="username" type="text" class="form-control" required>
                                </div>
                                <label  class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="password" type="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                <input name="nama" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                    <input type="radio" name="jk" id="inlineRadio1" value="L"> Laki-laki
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="jk" id="inlineRadio2" value="P"> Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10 col-md-4">
                                <input name="nisn" type="text" class="form-control" required>
                                </div>
                                <label  class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10 col-md-4">
                                    <select name="kelas" class="form-control" required>
                                        <option value="">-- Pilih Kelas --</option>
                                        <?php 
                                        foreach ($kelas as $kel){ ?>
                                         <option value="<?php echo $kel['idkelas']?>"><?php echo $kel['kelas']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                       
                            <button type="submit" style="float:right; " class="btn btn-info btn-lg"><span class="fa fa-save"></span> Simpan </button>
                            <button type="reset" style="float:right; margin-right:20px;" class="btn btn-danger btn-lg"> Reset</button>
                        </form> <br>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
  
  </section>


</div>