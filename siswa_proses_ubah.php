<?php 
require 'koneksi.php';

if(isset($_POST['simpan']))
{

  $nis = $_POST['nis'];
  $id_kelas = $_POST['id_kelas'];
  $nama_siswa = $_POST['nama_siswa'];
  $alamat_siswa = $_POST['alamat_siswa'];
  $no_hp_siswa = $_POST['no_hp_siswa'];

  $query = "UPDATE tbl_siswa SET 
            id_kelas = '$id_kelas',
            nama_siswa = '$nama_siswa',
            alamat_siswa = '$alamat_siswa',
            no_hp_siswa = '$no_hp_siswa',
            nama_siswa = '$nama_siswa' WHERE nis = $nis
  ";

  $result = mysqli_query($koneksi, $query);

  if($result)
  {
    echo "<script>
    alert('Data berhasil diubah!')
    document.location.href = 'siswa.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal diubah!')
    document.location.href = 'siswa.php';
    </script>";
  }

}
