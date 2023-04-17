<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Poppins'/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="index.css"/>
</head>

<body>
    <div class="container">
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
    </div>

    <?php if(isset($_GET['status'])): ?>
    <p class="d-flex justify-content-center text-warning">
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

    </body>
</html>