<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $fakultas = $_POST["fakultas"];
    $semester = $_POST["semester"];
    $hobi = $_POST["hobi"];
    $email = $_POST["email"];
    $whatsapp = $_POST["no_wa"];
    $alamat = $_POST["alamat"];
    $domisili = $_POST["domisili"];
    $kota = $_POST["kota"];
    // $kota = filter_input(INPUT_POST, "kota", FILTER_VALIDATE_INT);
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST["gender"];
    // $gender = filter_input(INPUT_POST, "gender", FILTER_VALIDATE_INT);

    // buat query update data
    $sql = "UPDATE data_diri SET 
    nama='$nama', 
    prodi='$prodi', 
    fakultas='$fakultas', 
    semester='$semester', 
    hobi='$hobi', 
    email='$email', 
    no_wa='$whatsapp', 
    alamat='$alamat', 
    alamat_domisili='$domisili', 
    kota='$kota', 
    tgl_lahir='$tgl_lahir', 
    gender='$gender' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php?status=edit-sukses');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>