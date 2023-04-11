<?php
require 'koneksi.php';

$query = "SELECT * FROM tbl_siswa ts INNER JOIN tbl_kelas tk ON tk.id_kelas = ts.id_kelas";
$result = mysqli_query($koneksi, $query);


?>
<?php require 'templates/header.php' ?>
<?php require 'templates/footer.php' ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Siswa</h1>
  </div>

  <div class="row my-4">
    <div class="col-md-5">
      <a href="siswa_form_tambah.php" class="btn btn-success">Tambah Data Siswa</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php while ($data = mysqli_fetch_assoc($result)) : ?>
            <tr>
              <th scope="row"><?= $no; ?></th>
              <td><?= $data['nis'] ?></td>
              <td><?= $data['nama_siswa'] ?></td>
              <td><?= $data['tingkat_kelas'] ?> <?= $data['nama_kelas'] ?></td>
              <td style="width: 25%;"><?= $data['alamat_siswa'] ?></td>
              <td><?= $data['no_hp_siswa'] ?></td>
              <td>
                <a href="siswa_form_ubah.php?id_kelas=<?= $data['id_kelas'] ?>" class="badge text-bg-primary text-decoration-none">Ubah</a>
                <a href="siswa_proses_hapus.php?id_kelas=<?= $data['id_kelas'] ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm('Yakin ingin dihapus?')">Hapus</a>
              </td>
            </tr>
            <?php $no++; ?>
          <?php endwhile; ?>
        </tbody>
      </table>

    </div>
  </div>

</main>