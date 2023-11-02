<?php

//koneksi ke dbms : hostname, username, password, nama db
include '../process/functions.php';

//ambil data dari form
$id = $_GET['id'];

// query data siswa berdasarkan ID
$siswa = query("SELECT * FROM biodata WHERE id = $id")[0];
// print $siswa


//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])){
    // connect + query di functions
    if (update($_POST) > 0) {
        echo "<script> alert('Data siswa berhasil diubah') </script>";
        echo "<script> document.location.href='student-list.php' </script>";
    } else {
        print_r($_POST);
        echo "<script> alert('Data siswa gagal diubah') </script>";
        echo mysqli_error($koneksi);
    }
}

include 'templates/header.php';
?>

   <div class="">
        <div class="jumbotron text-center max-width-5xl mx-auto">
            <div class="d-flex justify-content-center">
                <img class="register-logo" src="../assets/images/logo.png" alt="">
            </div>
            <h4 class="fw-bold ">UPDATE DATA SISWA</h4>
            <p class="mt-2 text-secondary small text-center" disabled>Isilah Data Anda Dengan Benar</p>
        </div>
        <section class="registration-form border-dark mx-auto border rounded p-4 mx-5 my-5">
            <div class="">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
                    <div>
                        <label class="fw-semibold pt-1" for="name">Nama Siswa </label> <br>
                        <input class="form-control" type="text" name="name" value="<?=$siswa["name"];?>" id="name" placeholder="Masukkan nama anda" required>
                    </div>
                    <div class="mb-2">
                        <label  class="fw-semibold pt-3" for="birth_date">Tanggal Lahir </label> <br>
                        <input id="birth_date" onchange="setAge()" class="form-control" value="<?=$siswa["birth_date"];?>" type="date" name="birth_date" id="birth_date" required>
                    </div>
                    <div class="mb-2 ">
                        <label class="fw-semibold pt-3" for="gender" >Jenis Kelamin </label> <br>
                        <!-- <input  type="radio" name="gender" id="gender" value="Men"> Laki-laki -->
                        <?php if ($siswa["gender"]="perempuan") {
                            echo "<input type='radio' name='gender' id='gender' value='laki-laki' required > Laki-laki";
                            echo "            <input type='radio' name='gender' id='gender' value='perempuan' checked required> Perempuan";  
                        } else {
                            echo "<input type='radio' name='gender' id='gender' value='laki-laki' checked required> Laki-laki"; 
                            echo "            <input type='radio' name='gender' id='gender' value='perempuan' required > Perempuan"; 
                        }
                        
                        ; ?>
                        
                    </div>
                    <div class="mb-2">
                        <label class="fw-semibold pt-3" for="age">Umur </label> <br>
                        <input class="form-control" value="<?=$siswa["age"];?>" style="background-color:#E5E8EF" id="age" type="number" name="age" readonly   >
                    </div>
                    <div class="mb-2">
                        <label class="fw-semibold pt-3" for="address">Alamat</label>
                        <textarea  name="address" class="form-control" placeholder="Masukkan alamat anda" id="address" required ><?=$siswa["address"];?></textarea>
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

