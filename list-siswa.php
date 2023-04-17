<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Poppins'/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="list-siswa.css"/>
</head>

<body>
    <header class="d-flex justify-content-center">
        <h1>Siswa yang sudah mendaftar</h1>
    </header>

    <div class="container">
        <br>
        <div class="d-flex justify-content-center">
            <table border="1">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td class='text-center col-md-1'>".$siswa['id']."</td>";
                    echo "<td class='col-md-2'>".$siswa['nama']."</td>";
                    echo "<td class='col-md-2'>".$siswa['alamat']."</td>";
                    echo "<td class='col-md-2'>".$siswa['jenis_kelamin']."</td>";
                    echo "<td class='col-md-2'>".$siswa['agama']."</td>";
                    echo "<td class='col-md-2'>".$siswa['sekolah_asal']."</td>";

                    echo "<td class='text-center col-md-2'>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn-sm btn-info mx-1'>Edit</a>";
                    echo "<a href='hapus.php?id=".$siswa['id']."' class='btn-sm btn-danger mx-1'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>

            </tbody>
            </table>
        </div>
        <p class="d-flex justify-content-center mt-4">Total: <?php echo mysqli_num_rows($query) ?> siswa</p>
        <nav>
            <ul>
                <a href="index.php" class="btn btn-primary">Back</a>
                <a href="form-daftar.php" class="btn btn-success">Tambah</a>
            </ul>
        </nav>
    </div>
    </body>
</html>