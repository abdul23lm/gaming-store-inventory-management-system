<?php

	include_once '../../koneksi.php';
	if(isset($_COOKIE['sukses']))
	{
		echo '<script type="text/javascript">
			alert('.$_COOKIE["sukses"].')
			</script>';
	}
	$barang 	= mysqli_query($koneksi,"SELECT * FROM lgs_produk");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>LM Games Store | Data Produk</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css">
		<link rel="shortcut icon" href="assets/img/favicon.ico">
	</head>
	<body>
		  <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="../index" class="brand">
                        <img src="assets/img/logo.png" width="120" height="40" alt="Logo" />
                   </a>
                </div>
            </div>
        </div>
        <br><br>

		<div class="container">
			<table class="table" style="border-top: #ffe400 4px solid;">
			  <thead class="thead">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Kode Produk</th>
			      <th scope="col">Nama Produk</th>
			      <th scope="col">Tipe</th>
			      <th scope="col">Jumlah Stok</th>
			      <th scope="col">Harga</th>
			      <th scope="col">Action <a type="button" class="btn btn-sm ml-2" href="javascript:void(0)" onclick="modal_barang()" style="background-color: #ffe400"><i class="fa fa-plus" style="color: #fff"></i></a></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $no=1; foreach($barang as $databarang) { ?>
			    <tr>
			      <th scope="row"><?php echo $no; ?></th>
			      <td><?php echo $databarang['item_code']; ?></td>
			      <td><?php echo $databarang['item_name']; ?></td>
			      <td><?php echo $databarang['item_type']; ?></td>
			      <td id="tablequantity"><?php echo $databarang['item_quantity']; ?> Pcs</td>
			      <td>Rp.<?php echo $databarang['item_price']; ?></td>
			      <td>
			      	<a href="javascript:void(0)" onclick="edit_barang('<?php echo $databarang['item_id']?>')" class="btn btn-sm bg-info" title="Edit"><i class="fa fa-pencil" style="color: #fff"></i></a>
			      	<a href="processbarang.php?do=delete&id=<?php echo $databarang['item_id']?>" class="btn btn-sm bg-danger" title="Hapus!"><i class="fa fa-trash" style="color: #fff"></i></a>
			      </td>
			    </tr>
			    <?php $no++;} ?>
			  </tbody>
			</table>

		</div>

		<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="formjudul">Tambah Produk</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="processbarang.php?do=add" method="POST" id="formbarang">
		        	<div class="form-group row">
		        		<label for="kodebarang" class="col-sm-4 col-form-label">Kode Produk</label>
		        		<div class="col-sm-8">
		        			<input type="text" class="form-control" placeholder="Kode Produk" id="kodebarang" name="kodebarang">
		        		</div>
		        	</div>
		        	<div class="form-group row">
		        		<label for="namabarang" class="col-sm-4 col-form-label">Nama Produk</label>
		        		<div class="col-sm-8">
		        			<input type="text" class="form-control" placeholder="Nama Produk" id="namabarang" name="namabarang">
		        		</div>
		        	</div>
		        	<div class="form-group row">
		        		<label for="tipe" class="col-sm-4 col-form-label">Tipe</label>
		        		<div class="col-sm-8">
		        			<select name="tipe" placeholder="Tipe" id="tipe" class="form-control" >
		        			<option value="">Pilih Tipe</option>
		        			<option value="PC" >PC</option>
		        			<option value="PS 4" >PS 4</option>
		        			<option value="Xbox One" >Xbox One</option>
		        			</select>
		        		</div>
		        	</div>
		        	<div class="form-group row">
		        		<label for="quantity" class="col-sm-4 col-form-label">Jumlah Stok</label>
		        		<div class="col-sm-8">
		        			<input type="number" class="form-control" placeholder="Jumlah Stok" id="quantity" name="quantity">
		        		</div>
		        	</div>
		        	<div class="form-group row">
		        		<label for="harga" class="col-sm-4 col-form-label">Harga</label>
		        		<div class="col-sm-8">
		        			<input type="number" class="form-control" placeholder="Harga" id="harga" name="harga">
		        		</div>
		        	</div>
		        	
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>

				 <div class="footer">
		 	 <p>Back To <a href="../index">Home</a> | <a href="../about/aboutme">About Me</a> | &copy; 2018 Designed By <a href="http://www.instagram.com/abdul_lm">Abdul Latif Munjiat</a> | 1610631170004</p>
		 <br>
            
        </div>


<script src="assets/js/jquery.js"></script>
		<script src="assets/js/popper.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
	</body>
</html>