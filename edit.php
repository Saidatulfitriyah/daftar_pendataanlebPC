<?php
include("koneksi.php");
if (!isset($_GET['id'])){
    header("Location:tampil.php?");
}
$kode =$_GET['id'];
$sql ="SELECT * FROM tb_fitri9nov WHERE id=$kode";
$query =mysqli_query($koneksi,$sql);
$pendataan = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data Tidak Ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h2>APLIKASI PENDATAAN PC LAB RPL</h2>
    <form action="proses-edit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id" value=" <?php echo $pendataan['id'] ?>"/>
<p>
    <label for="no_seri">No seri:</label>
    <input type="number" name="no_seri" value="<?php echo $pendataan['no_seri']?>" />
</p>
<p>
    <label for="merek">Merek:</label>
    <radio name="merek" value="<?php echo $pendataan['merek']?>" >
    <input type="radio" name="merek" value="asus"/>Asus
    <input type="radio" name="merek" value="lenovo"/>Lenovo
    <input type="radio" name="merek" value="hp"/>Hp
    <input type="radio" name="merek" value="acer"/>Acer

</p>
<p>
    <label for="jumlah">Jumlah:</label>
    <input type="number" name="jumlah" value="<?php echo $pendataan['kondisi']?>" />
</p>
<p>
    <input type="submit" value="Kirim" name="tambah" />
</p>

</fieldset>
</body>
</html>