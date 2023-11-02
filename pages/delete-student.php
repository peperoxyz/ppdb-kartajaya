<?php 

//koneksi ke dbms : hostname, username, password, nama db
include '../process/functions.php';

	$id = $_GET["id"]; 

	if ( delete($id) > 0) {
		echo "
			<script>
				alert('data berhasil dihapus!');
				document.location.href='student-list.php';
			</script>
		";
	} else {
			echo "
			<script>
				alert('data gagal dihapus!');
				document.location.href='student-list.php';
			</script>
		";
	}
?>