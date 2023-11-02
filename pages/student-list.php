<?php
include 'templates/header.php';
include '../process/functions.php';
$siswa = query("SELECT * FROM biodata");
?>

    <section class="m-5 text-capitalize" >
        <div class="d-flex flex-column justify-content-center align-items-center mb-3">
            <span class="fw-bold" style="font-size: 30px">DATA SISWA</span>
            <p class="mt-2 text-secondary small text-center" disabled>Daftar siswa-siswi yang telah mendaftarkan dirinya ke SMA Kartajaya</p>
        </div>
        <table id="dataSiswa" class='table table-striped table-auto mt-5'>
            <thead>
            <tr>
                <th class="fw-semibold"> No </th>
                <th class="fw-semibold"> Nama Siswa </th>
                <th class="fw-semibold"> Alamat </th>
                <th class="fw-semibold"> Tanggal Lahir </th>
                <th class="fw-semibold"> Umur </th>
                <th class="fw-semibold"> Alamat </th>
                <th class="fw-semibold"> Jenis Kelamin </th>
                <th class="fw-semibold"> Aksi </th>
            </tr>
            </thead>
                <?php 
                // $siswa = mysqli_query($koneksi, "SELECT * FROM biodata");
                $number = 1;
                foreach ($siswa as $row) {
                    echo 
                    "<tr>
                        <td>".$number."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['birth_date']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['gender']."</td>
                        <td>
                            <a href='update-student.php?id=".$row['id']."' class='link-underline link-underline-opacity-0'><i class='bi bi-pencil-square'></i> <span class='ml-4'>Edit</span> | </a>
                            <a href='delete-student.php?id=".$row['id']."' class='link-danger link-underline link-underline-opacity-0' onclick='confirmDelete()' ><i class='bi bi-trash3'></i> <span class='ml-4'>Hapus</span></a>
                        </td>
                    </tr>";
                    $number++;
                }
                // include 'modal_tambah.php';
                ?>
        </table>
    </section>

<?php
include 'templates/footer.php';
?>