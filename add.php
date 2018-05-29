<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CRUD no Modals</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<style>
		body{
		width: 100%;
		height: 800px;
		margin: 10px auto;
		} 	
		section{
			width: 900px;
		}
		.box-footer button{
			float: right;
			margin-right: 10px;
		}
	</style> 
</head>
<body>
<div >
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Peserta</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="phpCode/action_t_pegawai.php?action=add" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2">Id</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id" placeholder="Id" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="jenis_kelamin" >
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
	                <button type="button" onclick="history.go(-1); return false;" class="btn btn-default">Batal</button>
	                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
			</div><!--/.col (right) -->
		</div> <!-- /.row -->
	</section><!-- /.content -->
</div>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script> <!-- lib js untuk ajax -->
<script type="text/javascript">
    $(document).ready(function(){
    <?php
      require_once('phpCode/queryCode.php');
      $c = new Connection;
      $id = $c->select_last_id();
      echo"
      $('input[name=\"id\"]').val(\"".$id."\");
      ";
    ?>      
    });
</script>
</body>
</html>
