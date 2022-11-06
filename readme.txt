Week 7 - Introduction to web prog (24-10-2022)
membuat sistem database input crud ( UTS semester 3)

coding LOG


link bootstrap list-siswa : https://www.tutorialrepublic.com/codelab.php?topic=bootstrap-3&file=table-with-add-and-delete-row-feature


// RESET AUTO_INCREMENT ID
SET @num := 0;

UPDATE data_diri SET id = @num := (@num+1);

ALTER TABLE categories AUTO_INCREMENT =1;





<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query
    $sql = "INSERT INTO data_diri (nama, alamat, jenis_kelamin, agama, sekolah_asal)
        VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
