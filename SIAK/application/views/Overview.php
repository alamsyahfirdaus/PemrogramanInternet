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
    <?php $this->load->view('templates/page'); ?>
    <section class="content">

    </section>
  </div>
  <?php $this->load->view('templates/footer'); ?>
</div>
<?php $this->load->view('templates/jQuery'); ?>
</body>
</html>
