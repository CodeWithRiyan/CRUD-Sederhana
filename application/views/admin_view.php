<!DOCTYPE html>
<html>
<head>
	<title>CRUD SHOP</title>
	<link rel="stylesheet" type="text/css" href="<?php echo  base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo  base_url() ?>assets/bootstrap/css/style.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>">CRUD SHOP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo anchor('Login/logout','Log out') ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div>
  <div class="container">
    <table class="table table-stripped table-hover table-bordered">
      <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Gambar Barang</th>
        <th>Status</th>
        <th>
        <?php echo anchor('admin/add','Add Product',array('class'=>'btn btn-default')) ?>
        </th>
      </tr>
      <?php foreach ($product as $p) { ?>
      <tr>
        <td><?= $p->barang_id ?></td>
        <td><?= $p->barang_nama ?></td>
        <td><?= $p->barang_harga ?></td>
        <td><?= img('image/'.$p->barang_gambar,'Product',array('class'=>'admin_image')) ?></td>
        <td><?= $p->barang_aktif ?></td>
        <td>
          <?= anchor('admin/edit/'.$p->barang_id,'Edit',array('class'=>'btn btn-primary'))  ?>
          <?= anchor('admin/delete/'.$p->barang_id,'Delete',array('class'=>'btn btn-danger','onclick'=>'return confirm(\'Do You Really Remove this data?\')'))  ?>
        </td>
      </tr>
      <?php } ?>
    </table>    
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/script.js"></script>
</body>
</html>