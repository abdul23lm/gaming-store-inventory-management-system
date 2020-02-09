<?php

	include_once '../../koneksi.php';

	$do = $_GET['do'];
	if($do == 'add')
	{
		$kodebarang = $_POST['kodebarang'];
		$namabarang = $_POST['namabarang'];
		$tipebarang = $_POST['tipe'];
		$quantity	= $_POST['quantity'];
		$harga		= $_POST['harga'];


		$query = mysqli_query($koneksi, "INSERT INTO lgs_produk (item_code,item_name,item_type,item_quantity,item_price) VALUES ('$kodebarang','$namabarang','$tipebarang','$quantity','$harga')") or die(mysqli_error($koneksi));

		if($query)
		{
			setcookie("sukses", "DATA BERHASIL DITAMBAHKAN!", time() + 10, "/");
			load();
		}
		else
		{
			echo 'GAGAL';
		}
	}



	elseif ($do == 'wantedit') {
		$id = $_GET['id'];
		$barang 	= mysqli_query($koneksi,"SELECT * FROM lgs_produk WHERE item_id='$id'");
		$data = mysqli_fetch_array($barang);
		echo json_encode($data);

	}

	elseif ($do == 'edit') {
		$id = $_GET['id'];

		$kodebarang = $_POST['kodebarang'];
		$namabarang = $_POST['namabarang'];
		$tipebarang = $_POST['tipe'];
		$quantity	= $_POST['quantity'];
		$harga		= $_POST['harga'];


		$query = mysqli_query($koneksi, "UPDATE lgs_produk SET item_code='$kodebarang',item_name='$namabarang',item_type='$tipebarang', item_quantity='$quantity', item_price='$harga' WHERE item_id='$id'") or die(mysqli_error($koneksi));

		if($query)
		{
			setcookie("sukses", "DATA BERHASIL DI EDIT!", time() + 10, "/");
			load();
		}
		else
		{
			echo 'GAGAL';
		}
	}

	elseif ($do = 'delete') {
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "DELETE FROM lgs_produk WHERE item_id='$id'") or die(mysqli_error($koneksi));
		if($query)
		{
			setcookie("sukses", "DATA BERHASIL DIHAPUS!", time() + 10, "/");
			load();
		}
		else
		{
			echo 'GAGAL';
		}
	}

	function load(){

		echo '<script type="text/javascript">
				window.location.replace("data_barang_admin.php");
			 </script>';
	}

?>