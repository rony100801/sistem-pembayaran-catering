<?php 
require 'koneksi.php';

$id_kelas = $_GET['id_kelas'];

$query = "DELETE FROM tbl_kelas WHERE id_kelas = $id_kelas";
$result = mysqli_query($koneksi, $query);

if($result)
{
    echo "<script>
    alert('Data berhasil dihapus!')
    document.location.href = 'kelas.php';
    </script>";
} else {
    echo "<script>
    alert('Data gagal dihapus!')
    document.location.href = 'kelas.php';
    </script>";
}

?>