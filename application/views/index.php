<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Home | Global Prestasi School </title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>/assehts/img/hadoop.png" type="image/x-icon">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/AdminLTE.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/other/datatables/datatables.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/home.css">

	<!--<link href="assets/css/search.css" rel="stylesheet">-->

</head>

<body style="background-image: url('<?php echo base_url();?>assets/img/x.jpg'); background-size: cover;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Minat Bakat Siswa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav navbar-right">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">
                <?php 
                  $user_data = $this->session->userdata();
                  echo $user_data['nama'];
                ?>
              </span>
            </a>
          </li>

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class=" fa fa-upload"></span>
              <span class="hidden-xs">Log Out</span>
            </a>

            <ul class="dropdown-menu" style="width: auto; min-width: 0">
              <!-- User image -->
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer" >
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>Login/logout" class="btn btn-danger btn-flat">Logout</i></a>
                </div>
              </li>
            </ul>

          </li>          
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container wrapper">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><?=$title?></h3>
					</div>
					<div class="panel-body">
					<form method="post" action="<?php echo base_url();?>/home/minat_bakat">
                        <h4>IDENTITAS SISWA</h4><hr>
                            <div class="form-group row">
								<label  class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-4 col-md-4">
                                <input name="nisn" type="text" class="form-control" value="<?=$user_data['nis'];?>" readonly>
                                </div>
                                <label  class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-4 col-md-4">
                                <input name="nama" type="text" class="form-control" value="<?=$user_data['nama'];?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-4 col-md-4">
                                    <label class="radio-inline">
                                    <input type="radio" name="jk" id="inlineRadio1" value="L" <?=$user_data['jenis_kelamin'] == 'L' ? 'checked' : '';?>> Laki-laki
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="jk" id="inlineRadio2" value="P" <?=$user_data['jenis_kelamin'] == 'P' ? 'checked"' : '';?>> Perempuan
                                    </label>
                                </div>
								<label  class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10 col-md-4">
                                    <select name="kelas" class="form-control" disabled>
                                        <option value="">-- Pilih Kelas --</option>
                                        <?php 
                                        foreach ($kelas as $kel){ ?>
                                         <option value="<?php echo $kel['idkelas']?>" <?=$user_data['kelas'] == $kel['idkelas'] ? 'selected' : '';?>><?php echo $kel['kelas']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
							<hr/>
							<div>
							<b>Penilaian:</b>
							<div>0: jika pernyataan tersebut sangat tidak menggambarkan diri anda.</div>
							<div>1: jika pernyataan tersebut tidak menggambarkan diri anda.</div>
							<div>2: jika pernyataan tersebut sedikit menggambarkan diri anda.</div>
							<div>3: jika pernyataan tersebut kurang lebih / kira-kira menggambarkan diri anda.</div>
							<div>4: jika pernyataan tersebut menggambarkan diri anda.</div>
							<div>5: jika pernyataan tersebut sangat menggambarkan diri anda.</div>
							</div>
							<?php 
							foreach($soal as $list_soal){ ?>
							<div style="margin-top: 50px;">
									<div class="form-group row">
									<label class="col-sm-1 text-center"><?=$list_soal['nomor']?></label>	
									<label class="col-sm-10 col-form-label"><?=$list_soal['soal']?></label>
										<div class="col-sm-4 col-sm-offset-1">
											<label class="radio-inline">
											<input type="radio" name="pilih[<?=$list_soal['nomor']?>]" id="inlineRadio1" value="0" required> 0
											</label>
											<label class="radio-inline">
											<input type="radio" name="pilih[<?=$list_soal['nomor']?>]" id="inlineRadio2" value="1" required> 1
											</label>
											<label class="radio-inline">
											<input type="radio" name="pilih[<?=$list_soal['nomor']?>]" id="inlineRadio2" value="2" required> 2
											</label>
											<label class="radio-inline">
											<input type="radio" name="pilih[<?=$list_soal['nomor']?>]" id="inlineRadio2" value="3" required> 3
											</label>
											<label class="radio-inline">
											<input type="radio" name="pilih[<?=$list_soal['nomor']?>]" id="inlineRadio2" value="4" required> 4
											</label>
											<label class="radio-inline">
											<input type="radio" name="pilih[<?=$list_soal['nomor']?>]" id="inlineRadio2" value="5" required> 5
											</label>
										</div>
									</div>
							</div>
							<?php } ?>
                            <button type="submit" class="btn btn-info btn-lg"><span class="fa fa-save"></span> Simpan </button>
                        </form> 
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="<?php echo base_url(); ?>/assets/other/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/other/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/other/fastclick/lib/fastclick.js"></script>
	<script src="<?php echo base_url(); ?>/assets/other/datatables/datatables.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/adminlte.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/other/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url(); ?>/assets/other/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/pages/dashboard2.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/demo.js"></script>
	<script src="<?php echo base_url(); ?>/assets/other/bs-confirmation-master/bootstrap-confirmation.min.js"></script>

	<script>
		$(document).ready(function() {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
</body>

</html>