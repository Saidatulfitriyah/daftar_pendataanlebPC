
<?php
include 'koneksi.php';
?>
<Body background="sip.webp" width="2700" height="200" style="border-radius: 50%;">
<center>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<br/>

<!-- cek apakah sudah login -->
<?php
session_start();
if($_SESSION['status']!="login"){ 
    header("location:../index.php?pesan=belum_login");
}
?>
<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

<br/>
<br/>   
 <h1> PENDATAAN PC LAB RPL </h1>
 <h4> <a href=index.php> Pencarian Data Leb PC</a></h4>
<Form action="tampil.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>

<?php
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil Pencarian : ".$cari."</b>";
}
?>
<?php
include("koneksi.php");
?>
<html>
    <head>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table border="1">
    <tr>
    <th>ID</th>
        <th>No Seri</th>
        <th>Merek</th>
        <th>Jumlah</th>
</tr>

<?php
include("koneksi.php");
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql = "SELECT * FROM tb_fitri9nov WHERE merek LIKE '%".$cari."%'";
    $query = mysqli_query($koneksi, $sql);
}else{
$sql= "SELECT * FROM tb_fitri9nov";
$query= mysqli_query($koneksi,$sql);
}
while($pendataan=mysqli_fetch_array($query)){  
    echo "<tr>";
    echo "<td>" .$pendataan['id']."</td>";
    echo "<td>" .$pendataan['no_seri']."</td>";
    echo "<td>" .$pendataan['merek']."</td>";
    echo "<td>" .$pendataan['jumlah']."</td>";
    echo"<td>";
    echo "<a href='edit.php?id=".$pendataan['id']."'>Edit</a>|";
    echo "<a href='hapus.php?id=".$pendataan['id']."'>Hapus</a>|";
    echo"</td>";
    echo "</tr>";
}
?>
</table>
<tr>
    <td></td>
    <td></td>
    <a href="logout.php"><input type="button" value="BACK" name="BACK"/><a></td>
    <a href="tambah.php"><input type="button" value="TAMBAH" name="TAMBAH"/><a></td>
</tr>
</body>
</html>