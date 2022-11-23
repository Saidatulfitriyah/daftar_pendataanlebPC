<html>
    <head>
</head>
<body>

    <h2>APLIKASI PENDATAAN PC LAB RPL</h2>
    <h4> <a href="logout.php">Back</a></h4>
    <form action="proses-tambah.php" method="POST">
    <fieldset>
<p>
    <label for="no_seri">No seri:</label>
    <input type="number" name="no_seri">
</p>
<p>
    <label for="merek">Merek:</label>
    
    <input type="radio" name="merek" value="asus"/>Asus
    <input type="radio" name="merek" value="lenovo"/>Lenovo
    <input type="radio" name="merek" value="hp"/>Hp
    <input type="radio" name="merek" value="acer"/>Acer
</p>
<p>
    <label for="jumlah">Jumlah:</label>
    <input type="number" name="jumlah">
</p>
<p>
    <input type="submit" value="Kirim" name="tambah" />
</p>

</fieldset>
</body>
</html>