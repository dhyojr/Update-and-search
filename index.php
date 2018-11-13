<?php
    require 'functions.php'
    $mahasiswa=querry("SELECT*FORM mahasiswa");

    if(isset($_POST['cari']))
{
    $mahasiswa=cari($_POST["keyword"]);
    
$conn=mysqli_connect("localhost","root","","phpdatbase");
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sclae=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Gambar</th>
        <th>Aksi</th>
</tr>
<?php $i=1 ?>
<?php while ($row=mysqli_fetch_assoc($result)):?>
    <tr>
        <td> 
        <a href="edit.php?id=<?php echo $row["id"];?>">Edit</a>
        <a href="hapus.php?id=<?php echo $row["id"];?>"onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
        <td><?= $row["id"]; ?></td>
        <td><?= $row["Nama"]; ?></td>
        <td><?= $row["Nim"]; ?></td>
        <td><?= $row["Email"]; ?></td>
        <td><?= $row["Jurusan"]; ?></td>
        <td><img src="image/<?php echo $row["Gambar"]; ?>" alt="" width="100" height="100" srcset=""></td>
        <td>
            <a href="">Edit</a>
            <a href="hapus.php?id=<?php echo $row["id"]; ?>"onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
        </td>
</tr>
<form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian" autocomplete="off">
    <button type="submit" name=cari> cari </button>
</form>
<br>
<?php $i++ ?>
<?php endwhile;?>
</table>
</body>
</html>



