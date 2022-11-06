<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/shadow.css"/> 
    <!-- https://www.cssscript.com/elegant-box-shadows/#google_vignette -->
    <link href="https://fonts.cdnfonts.com/css/tt-norms-pro" rel="stylesheet">
</head>

<body style="background-image: url(./images/bg.png)">
    <div class="container">
        <div class="pp-container">
            <div class="box-portofolio-pp shadow-dreamy">
                <div class="portofolio-pp">
                    <img class= "shadow-6" src="./images/portofolio-pp.png" alt="">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="judul">
                UTS | Introduction <span>Web</span> <b>Programming</b>
                <div class="text">
                    Assalamualaikum Wr. Wb, <br>
                    Perkenalkan Saya Raie Aswajjillah dengan NIM 41037006211028 dari kelas Teknik Informatika A1 Semester 3. Ini merupakan jawaban nomor 6 pada soal UTS mata kuliah <i>Introduction Web Programming.</i> Website ini adalah sebuah website pengimputan data, menampilkan, serta mengedit data inputan ke database atau yang biasa di sebut CRUD melalui tampilan Frontend yang dibuat dengan HTML, CSS, JS dan PHP. Klik 2 tombol dibawah Untuk mencoba.
                </div>    
            </div>
            <div class="box-tmbl-dftr shadow-dreamy">
                <ul>
                    <li><a href="form-daftar.html">Input Data</a></li>
                </ul>
            </div>
            <div class="box-tmbl-list shadow-dreamy">
                <ul>
                    <li><a href="./Backend/list-siswa.php">Edit Data</a></li>
                </ul>
            </div>
        </div>
    </div>


        
        <!-- <div class="daftar shadow-dreamy">
            <header>
                <h3>Pendaftaran Siswa Baru</h3>
                <h1>SMK Coding</h1>
            </header>
            <h4>Menu</h4>
            <nav>
                <ul>
                    <li><a href="form-daftar.php">Daftar Baru</a></li>
                    <li><a href="list-siswa.php">Pendaftar</a></li>
                </ul>
            </nav>
        </div> --> 
        <?php if(isset($_GET['status'])): ?>

            <?php
                $berhasil = "Pendaftaran Berhasil !";
                $gagal = "Pendafaran Anda Gagal :(";
                if($_GET['status'] == 'daftar-sukses'){
                    echo "<script type='text/javascript'>alert('$berhasil');</script>";
                } else {
                    echo "<script type='text/javascript'>alert('$gagal');</script>";
                }
            ?>

        <?php endif; ?>
    <footer>
        <div class="copyright">Made By Raie Aswajjillah | 41037006211028 | TIF-A1</div>
    </footer>
</body>

</html>