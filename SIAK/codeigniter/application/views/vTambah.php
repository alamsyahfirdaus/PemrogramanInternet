<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title; ?></title>
</head>
<body>
	<h2><?= $judul; ?></h2>
	<form action="<?=site_url('home/simpan/tambah')?>" method="post">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<label for="nim">NIM</label>
				</td>
				<td>
					<input type="text" name="nim" id="nim">
				</td>
			</tr>
			<tr>
				<td>
					<label for="nama_lengkap">Nama Lengkap</label>
				</td>
				<td>
					<input type="text" name="nama_lengkap" id="nama_lengkap">
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">Password</label>
				</td>
				<td>
					<input type="text" name="password" id="password">
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">Email</label>
				</td>
				<td>
					<input type="text" name="email" id="email">
				</td>
			</tr>
			<tr>
				<td>
					<label for="no_handphone">No. Handphone</label>
				</td>
				<td>
					<input type="text" name="no_handphone" id="no_handphone">
				</td>
			</tr>
			<tr>
				<td>
					<label>Program Studi</label>
				</td>
				<td>
					<select name="program_studi_id" id="program_studi">
						<option value="">Pilih Program Studi</option>
						<?php 
						$query = $this->db->get('program_studi');
						foreach ($query->result() as $key): ?>
						<option value="<?=$key->program_studi_id;?>"><?=$key->nama_program_studi;?></option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<button type="submit">Simpan</button>
					<button>Batal</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>