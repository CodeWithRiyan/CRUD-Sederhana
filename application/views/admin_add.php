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
  <h1>Form Add</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('admin/add') ?>
      <div class="form-group">
        <label>Barang ID</label>
        <input type="text" class="form-control" placeholder="Barang ID" name="id">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Barang</label>
        <input type="text" class="form-control" placeholder="Nama barang" name="nama">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga Barang</label>
        <input type="text" class="form-control" placeholder="Harga Barang" name="harga">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Satuan Barang</label>
        <input type="text" class="form-control" placeholder="Satuan barang" name="satuan">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Deskripsi Barang</label>
        <input type="text" class="form-control" placeholder="Deskripsi barang" name="deskripsi">
      </div>
      <div class="form-group">
        <label>File input</label>
        <input name="userfile" type="file">
      </div>
      <div class="form-group">
        <label>Status Barang</label>
        <select name="status" class="form-control">
          <option value="0">0</option>
          <option value="1">1</option>
        </select>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>    
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/script.js"></script>
</body>
</html>