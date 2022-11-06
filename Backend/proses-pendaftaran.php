<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
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

    // buat query
    $sql = "INSERT INTO data_diri (nama, prodi, fakultas, semester, hobi, email, no_wa, alamat, alamat_domisili, kota, tgl_lahir, gender)
        -- mencegah sql injection
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($db);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($db));
    }

    mysqli_stmt_bind_param(
        $stmt, "ssssssssssss", 
        $nama, 
        $prodi, 
        $fakultas, 
        $semester, 
        $hobi, 
        $email, 
        $whatsapp,
        $alamat,
        $domisili,
        $kota,
        $tgl_lahir,
        $gender,
    );
    mysqli_stmt_execute($stmt);

    if( $stmt ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: ../index.php?status=daftar-sukses');
    } else {
    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    header('Location: ../index.php?status=daftar-gagal');
    }

} else {
die("Akses dilarang...");
}
?>




