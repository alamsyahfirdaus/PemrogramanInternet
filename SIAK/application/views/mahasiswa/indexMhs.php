<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('templates/head'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php $this->load->view('templates/navbar'); ?>
  <?php $this->load->view('templates/sidebar'); ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Table</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

   <section class="content ">
      <div class="row">
		<div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <div class="card-body">
            <?php foreach ($mhs as $key) : ?>
              <table id="example1" class="table table-bordered" width="100%">
                <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Program Studi</th>
                  <th>Fakultas</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><?= $key->nim ?></td>
                  <td><?= $key->nama_lengkap ?></td>
                  <td><?= $key->email ?></td>
                  <td><?= $key->nama_program_studi ?></td>
                  <td><?= $key->fakultas_name ?></td>
                </tr>
            	</tbody>
              </table>
          	<?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
  <?php $this->load->view('templates/footer'); ?>
</div>
<?php $this->load->view('templates/jQuery'); ?>
</body>
</html>
