<?php

	include_once '../koneksi.php';
	if(isset($_COOKIE['sukses']))
	{
		echo '<script type="text/javascript">
			alert('.$_COOKIE["sukses"].')
			</script>';
	}
	$barang	= mysqli_query($koneksi,"SELECT * FROM lgs_produk");

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
			      
			    </tr>
			    <?php $no++;} ?>
			  </tbody>
			</table>

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