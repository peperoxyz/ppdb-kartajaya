<?php

//koneksi ke dbms : hostname, username, password, nama db
$host = "localhost";
$user = "root";
$password = "";
$database = "db_jwd";
$koneksi = mysqli_connect($host, $user, $password, $database);

function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
    // echo $result;
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function update($data){
    global $koneksi;
    $id = $data['id'];
    $name = htmlspecialchars($data['name']);
    $birth_date = htmlspecialchars($data['birth_date']);
    $address = htmlspecialchars($data['address']);
    $gender = htmlspecialchars($data['gender']);
    $age = htmlspecialchars($data['age']);

    // validation for the age
    if ($age > 0){
        $query_update = "UPDATE biodata set
        name = '$name',
        birth_date = '$birth_date',
        address = '$address',
        gender = '$gender',
        age = '$age'
        WHERE id = $id
    ";
    
    mysqli_query($koneksi, $query_update);
    return mysqli_affected_rows($koneksi);
    } else {
        echo "<script>Harap masukkan tanggal lahir yang sesuai</script>";
    };

}

function delete($id){
	global $koneksi;
	$query_delete = ("DELETE FROM biodata WHERE id=$id");
	mysqli_query($koneksi, $query_delete);

	return mysqli_affected_rows($koneksi);
}
?>