<?php 
require 'koneksi.php';

if(isset($_POST['simpan']))
{

  $id_kelas = $_POST['id_kelas'];
  $tingkat_kelas = $_POST['tingkat_kelas'];
  $nama_kelas = $_POST['nama_kelas'];

  $query = "UPDATE tbl_kelas SET 
            tingkat_kelas = '$tingkat_kelas',
            nama_kelas = '$nama_kelas' WHERE id_kelas = $id_kelas
  ";

  $result = mysqli_query($koneksi, $query);

  if($result)
  {
    echo "<script>
    alert('Data berhasil diubah!')
    document.location.href = 'kelas.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal diubah!')
    document.location.href = 'kelas.php';
    </script>";
  }

}

?>