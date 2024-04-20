<table>
<thead>
<tr style="text-align: center;">
    <th width="5%">No</th>
    <th width="12%">NISN</th>
    <th width="20%">Nama</th>
    <th width="">Jenis Kelamin</th>
    <th width="">Kelas</th>
    <th width="">CCA</th>
    <th width="15%">Persen</th>
    <th width="15%">Hasil</th>
</tr>
</thead>
<tbody>
<?php $no=1; foreach($laporan as $list){ ?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $list['nis'] ?></td>
    <td><?php echo $list['nama_lengkap'] ?></td>
    <td><?php echo ($list['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan') ?></td>
    <td><?php echo $list['kelas'] ?></td>
    <td><?php echo $list['cca'] ?></td>
    <td><?php echo $list['persen'] ?>%</td>
    <td><?php echo $list['hasil'] ?></td>
</tr>
<?php } ?>
</tbody>
</table>