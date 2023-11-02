<?php
include 'templates/header.php';
include '../koneksi.php';


if (isset($_POST["submit"])) {

	// ambil data dari tiap elemen dalam form
	$name = $_POST["name"];
	$birth_date = $_POST["birth_date"];
	$address = $_POST["address"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];

	$query_insert = ("INSERT INTO biodata VALUES ('', '$name', '$birth_date', '$address', '$gender', '$age')");
	//connect + query!
	mysqli_query($koneksi, $query_insert);

    //cek apakah data berhasil ditambahkan atau tidak
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script> alert('Data siswa berhasil ditambahkan') </script>";
        echo "<script> document.location.href='student-list.php' </script>";
    } else {
        echo "<script> alert('Data siswa gagal ditambahkan') </script>";
        echo mysqli_error($koneksi);
    }
}
?>

    <div class="">
        <div class="jumbotron text-center max-width-5xl mx-auto">
            <div class="d-flex justify-content-center">
                <img class="register-logo" src="../assets/images/logo.png" alt="">
            </div>
            <h4 class="fw-bold ">PENDAFTARAN SISWA</h4>
            <p class="mt-2 text-secondary small text-center" disabled>Isilah Data Anda Dengan Benar</p>
        </div>
        <section class="registration-form border-dark mx-auto border rounded p-4 mx-5 my-5">
            <div class="">
                <form action="" method="post">
                    <div>
                        <label class="fw-semibold pt-1" for="name">Nama Siswa </label> <br>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Masukkan nama anda" required>
                    </div>
                    <div class="mb-2">
                        <label  class="fw-semibold pt-3" for="birth_date">Tanggal Lahir </label> <br>
                        <input id="birth_date" onchange="setAge()" class="form-control" type="date" name="birth_date" id="birth_date" min="1" required>
                    </div>
                    <div class="mb-2 ">
                        <label class="fw-semibold pt-3" for="gender" >Jenis Kelamin </label> <br>
                        <input  type="radio" name="gender" id="gender" value="laki-laki" required> Laki-laki
                        <input  type="radio" name="gender" id="gender" value="perempuan" required> Perempuan
                    </div>
                    <div class="mb-2">
                        <label class="fw-semibold pt-3" for="age">Umur </label> <br>
                        <input class="form-control" style="background-color:#E5E8EF" id="age" type="number" required name="age" readonly  value="0" >
                    </div>
                    <div class="mb-2">
                        <label class="fw-semibold pt-3" for="address">Alamat</label>
                        <textarea required name="address" class="form-control" placeholder="Masukkan alamat anda" id="address"></textarea>
                    </div>
                    <div class="my-3">
                        <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>


<?php
include 'templates/footer.php';
?>