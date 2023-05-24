<h4 class="alert alert-info" style="margin-top:0px">Detail Setor Sampah</h4>
<table class="table">
	<tr>
		<td>Kode Setor</td>
		<td><?php echo 'STR00' . $id_sampah; ?></td>
	</tr>
	<tr>
		<td>Tanggal Setor</td>
		<td><?php echo $tanggal; ?></td>
	</tr>
	<tr>
		<td>NIN</td>
		<td><?php echo ambil_field_tabel('anggota', 'id_anggota', $id_anggota, 'nama_anggota'); ?></td>
	</tr>
	<tr>
		<td>Berat</td>
		<td><?php echo $berat; ?></td>
	</tr>
	<tr>
		<td>Total</td>
		<td><?php echo $total; ?></td>
	</tr>
	<tr>
		<td>Ket</td>
		<td><?php echo $ket; ?></td>
	</tr>
	<tr>
		<td></td>
		<td><a href="<?php echo site_url('pembelian') ?>" class="btn btn-default">Batal</a></td>
	</tr>
</table>