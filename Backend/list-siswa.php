<?php include("config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list-siswa.css">
    <link rel="stylesheet" href="../style/shadow.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        * {
            font-family: 'TT Norms Pro', sans-serif;
        }
        body {
            background-image: url(../images/bg.png);
        }
        .container {
            height: 80%;
            width: 80%;
            border-radius: 20px;
            overflow: auto;
            white-space: nowrap;
            margin-top: 100px;
            background-color: white;
        }
        .judul {
            margin :30px 0px 10px 145px;
        }
    </style>

</head>

<body>
    <div class="judul col-sm-8"><h2>UTS-IWP | Database User | <b>CRUD</b></h2></div>
    <div class="container shadow-dreamy">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4"><br>
                        <a href="../form-daftar.html" class="btn btn-info add-new"><i class="fa fa-plus"></i> Tambah Baru</a>
                        <a href="../index.php" class="btn btn-info add-new">HOME</a>
                    </div>
                </div>
            </div>
        <nav>
            
        </nav>
        <br>
        <table border="1" class="table table-bordered">
            <thead>
                <tr>
                    <th>Tindakan</th>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Fakultas</th>
                    <th>Semester</th>
                    <th>Hobi</th>
                    <th>Email</th>
                    <th>No Wa</th>
                    <th>Alamat</th>
                    <th>Alamat Saat ini</th>
                    <th>Kota</th>
                    <th>Tgl Lahir</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM data_diri";
                $query = mysqli_query($db, $sql);
                while($user_data = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$user_data['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$user_data['id']."' onclick='return check()' >Hapus</a>";
                    echo "</td>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nama']."</td>";
                    echo "<td>".$user_data['prodi']."</td>";
                    echo "<td>".$user_data['fakultas']."</td>";
                    echo "<td>".$user_data['semester']."</td>";
                    echo "<td>".$user_data['hobi']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['no_wa']."</td>";
                    echo "<td>".$user_data['alamat']."</td>";
                    echo "<td>".$user_data['alamat_domisili']."</td>";
                    echo "<td>".$user_data['kota']."</td>";
                    echo "<td>".$user_data['tgl_lahir']."</td>";
                    echo "<td>".$user_data['gender']."</td>";
                    echo "</tr>";
                }
                ?>

                <!-- JS : konfirmasi penghapusan data -->
                <script type='text/javascript'>
                function check()
                {
                    let text = "Apakah Kamu Yakin ?";
                    if (confirm(text) == true) {
                        return true;
                    } 
                    else {
                        return false;
                    }
                }
                </script>

                <!-- PHP & JS : alert jika edit data berhasil -->
                <?php if(isset($_GET['status'])): ?>
                    <?php
                        $edit_berhasil = "Edit Berhasil !";
                        if($_GET['status'] == 'edit-sukses'){
                            echo "<script type='text/javascript'>alert('$edit_berhasil');</script>";
                        }
                    ?>
                <?php endif; ?>

            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>

</html>