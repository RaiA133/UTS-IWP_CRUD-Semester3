<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_diri WHERE id=$id";
$query = mysqli_query($db, $sql);
$user_data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UTS | Edit Data</title>
    <link rel="stylesheet" href="../style/form-style.css">
    <link rel="stylesheet" href="style/shadow.css"/> 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
  
    <div class="form-container slide2-form">
        <!-- FORM PENDAFATARAN -->
        <div class="form-box slide2-box">
            <h2>Input Form</h2>
            <form action="proses-edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $user_data['id'] ?>" />
                <div class="field">
                    <i class="uil uil-user"></i>
                    <!-- autocomplete="off" untuk menghilangkan save data form html -->
                    <input type="text" placeholder="Nama Sesuai KTP" name="nama" autocomplete="off" required value="<?php echo $user_data['nama'] ?>">
                </div>
                <div class="field">
                    <i class="uil uil-book-open"></i>
                    <input type="text" placeholder="Program Studi" name="prodi" id="prodi" autocomplete="off" value="<?php echo $user_data['prodi'] ?>">
                </div>
                <div class="field">
                    <i class="uil uil-balance-scale"></i>
                    <input type="text" placeholder="Fakultas" name="fakultas" id="fakultas" autocomplete="off" value="<?php echo $user_data['fakultas'] ?>">
                </div>
                <div class="field">
                    <i class="uil uil-book-reader"></i>
                    <input type="text" placeholder="Semester" name="semester" id="semester" autocomplete="off" value="<?php echo $user_data['semester'] ?>">
                </div>
                <div class="field">
                    <i class="uil uil-palette"></i>
                    <input type="text" placeholder="Hobi" name="hobi" id="hobi" autocomplete="off" value="<?php echo $user_data['hobi'] ?>">
                </div>
                <div class="field">
                    <i class="uil uil-at"></i>
                    <input type="email" placeholder="Email@example.com" name="email" id="email" autosave="off" value="<?php echo $user_data['email'] ?>">
                </div>
                <div class="field">
                    <i class="uil uil-whatsapp"></i>
                    <input type="text" placeholder="Nomor Whatsapp" name="no_wa" id="no-wa" value="<?php echo $user_data['no_wa'] ?>">
                </div>
                <div class="field">
                    <i class="uil uil-home"></i>
                    <input type="text" placeholder="Alamat Sesuai KTP" name="alamat" id="alamat" value="<?php echo $user_data['alamat'] ?>">
                </div>
                <div class="field">
                    <textarea placeholder="Alamat Saat Ini" name="domisili" id="domisili" cols="24" rows="4" autocomplete="off"><?php echo $user_data['alamat_domisili'] ?></textarea>
                </div>
                <div class="field2">
                    <i class="uil uil-map-marker"></i>
                    <?php $kota = $user_data['kota']; ?>
                    <select id="kota" name="kota">
                        <option value="NULL" <?php echo ($kota == 'NULL') ? "selected": "" ?> >Kota</option>
                        <option value="Bandung Kota" <?php echo ($kota == 'Bandung Kota') ? "selected": "" ?> >Bandung Kota</option>
                        <option value="Kab. Bandung" <?php echo ($kota == 'Kab. Bandung') ? "selected": "" ?> >Kab. Bandung</option>
                        <option value="Luar Bandung" <?php echo ($kota == 'Luar Bandung') ? "selected": "" ?> >Luar Bandung</option>
                    </select>
                </div>
                <div class="field2">
                    <i class="uil uil-calendar-alt"></i>
                    <input type="date" placeholder="Tanggal Lahir" name="tgl_lahir" id="tgl-lahir" value="<?php echo $user_data['tgl_lahir']; ?>">
                </div>
                <div class="gender">
                    <?php $gender = $user_data['gender']; ?>
                    <input type="radio" name="gender" id="gender" value="Pria" <?php echo ($gender == 'Pria') ? "checked": "" ?> ><label for="gender">Pria</label>
                    <input type="radio" name="gender" id="gender" value="Wanita"><label for="gender" <?php echo ($gender == 'Wanita') ? "checked": "" ?> >Wanita</label>
                </div>
                <input class="tombol-submit shadow-dreamy" type="submit" value="Simpan" name="simpan">
                <a class="tombol-kembali shadow-dreamy" href="list-siswa.php">Batal</a>
            </form>

        </div>
    </div>
    
</body>
</html>