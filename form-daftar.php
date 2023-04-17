<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Poppins'/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="form.css"/>
</head>

<body>
    <!-- <div class="container"> -->
        <div class="form-box">
            <header>
                <h2>Formulir Pendaftaran Siswa Baru</h2>
            </header>

            <form action="proses-pendaftaran.php" method="POST">

                <fieldset>

                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat"></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar" />
                </p>

                </fieldset>

            </form>
        </div>
    <!-- </div> -->
    </body>
</html>