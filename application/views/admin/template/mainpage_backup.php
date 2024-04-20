 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Dashboard
     </h1>
     <hr />
   </section>

   <!-- Main content -->
   <section class="content">
     <?php if ($role != 'wali-kelas') { ?>
       <div class="row">
         <div class="col-md-3">
           <div class="box box-primary">
             <div class="box-header">
               <span class="text-primary">Jumlah Siswa</span>
             </div>
             <div class="box-body box-profile">
               <h3><?= $siswa ?></h3>
             </div>
           </div>
         </div>

         <div class="col-md-3">
           <div class="box box-primary">
             <div class="box-header">
               <span class="text-primary">Jumlah Soal</span>
             </div>
             <div class="box-body box-profile">
               <h3><?= $soal ?></h3>
             </div>
           </div>
         </div>

         <div class="col-md-3">
           <div class="box box-primary">
             <div class="box-header">
               <span class="text-primary">Jumlah User</span>
             </div>
             <div class="box-body box-profile">
               <h3><?= $user ?></h3>
             </div>
           </div>
         </div>

         <div class="col-md-3">
           <div class="box box-primary">
             <div class="box-header">
               <span class="text-primary">Jumlah yang sudah mengisi tes</span>
             </div>
             <div class="box-body box-profile">
               <h3><?= $minat_bakat ?></h3>
             </div>
           </div>
         </div>
       </div>
     <?php } ?>
     <div class="box box-primary">
       <div class="box-header">
         <a href="<?= base_url('admin/dashboard/export') ?>" class="btn btn-success btn-sm" style="float: right;"><i class="fa fa-print"></i> Cetak Laporan</a>
         <h3 class="text-primary">Laporan</h3>
       </div>
       <div class="box-body box-profile">
         <table class="table table-bordered table-hover table-striped" cellspacing="0" width="100%" id="myTable">
           <thead>
             <tr style="text-align: center;">
               <th width="5%">No</th>
               <th width="12%">NISN</th>
               <th width="20%">Nama</th>
               <th width="">Jenis Kelamin</th>
               <th width="">Kelas</th>
               <th width="15%">Persen</th>
               <th width="15%">Hasil</th>
             </tr>
           </thead>
           <tbody>
             <?php $no = 1;
              foreach ($laporan as $list) { ?>
               <tr>
                 <td><?php echo $no++; ?></td>
                 <td><?php echo $list['nis'] ?></td>
                 <td><?php echo $list['nama_lengkap'] ?></td>
                 <td><?php echo ($list['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan') ?></td>
                 <td><?php echo $list['kelas'] ?></td>
                 <td><?php echo $list['persen'] ?>%</td>
                 <td><?php echo $list['hasil'] ?></td>
               </tr>
             <?php } ?>
           </tbody>
         </table>
       </div>
     </div>
   </section>
 </div>