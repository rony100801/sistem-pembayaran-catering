<?php
require 'koneksi.php';

if (isset($_POST['simpan'])) {
  $nis = $_POST['nis'];
  $id_kelas = $_POST['id_kelas'];
  $nama_siswa = $_POST['nama_siswa'];
  $alamat_siswa = $_POST['alamat_siswa'];
  $no_hp_siswa = $_POST['no_hp_siswa'];

  $query = "INSERT INTO tbl_siswa VALUES('$nis', '$id_kelas', '$nama_siswa', '$alamat_siswa', '$no_hp_siswa')";
  $result = mysqli_query($koneksi, $query);

  if ($result) {
    echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'siswa.php';
        </script>";
  } else {
    echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'siswa.php';
        </script>";
  }
}
