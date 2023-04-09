<?php
require 'koneksi.php';

if (isset($_POST['simpan'])) {
    $tingkat_kelas = $_POST['tingkat_kelas'];
    $nama_kelas = strtoupper($_POST['nama_kelas']);

    $query = "INSERT INTO tbl_kelas VALUES('', '$tingkat_kelas', '$nama_kelas')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'kelas.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'kelas.php';
        </script>";
    }
}
