<?php
require 'functions.php';

$id=$_GET[id];
//var_dump($id);

$mhs=query("SELECT*FORM mahasiswa WHERE id=$id")[0];
//var_dump($mhs[0]["Nama"]);

if(isset($_POST['submit']))
{
    if(isset($_POST['submit']))
    {
        if(edit($_POST)>0)
        {
            echo "
            <script>
            alert('data berhasil disimpan');
            document.location.href='index.php';
            </script>

            ";
        }else{
            echo"
            <script>
            alert('data gagal disimpan');
            document.location.href='edit.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        } 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sclae=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update data</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <form action="" method="post">
    <ul>
    <li> <!-- for pada label terhubung id jadi jika label nama diklik maka textfield nama akan aktif juga -->
        <label for="Nama">Nama :</label>
        <!-- untuk pengisian name besar kecilnya harus sesuai dengan fieldnya -->
        <input type="text" name="Nama" id="Nama " required>
    </li>
    <li>
        <label for="Nim">Nim :</label>
        <input type="text" name="Nim" id="Nim" required>
    </li>
    <li>
        <label for="Email">Email :</label>
        <input type="text" name="Email" id="Email" required>
    </li>
    <li>
        <label for="Jurusan">Jurusan :</label>
        <input type="text" name="Jurusan" id="Jurusan" required>
    </li>
    <li>
        <label for="Gambar">Gambar :</label>
        <input type="text" name="Gambar" id="Gambar " required>
    </li>
    <li>
        <button type="submit" name="submit"> edit </button>
    </li>
    </ul>

    </form>

    <form action="" method="post">
    <li>
        <input type="hiden" name="id" value="<?=$mhs[id] ?>">
    </li>

    <ul>
        <li>
            <label for="Nama">Nama :</label>
            <input type="text" name="Nama" id="Nama" value="<? $mhs [Nama]; ?>">
        </li>
    </form>
</body>
</html>
