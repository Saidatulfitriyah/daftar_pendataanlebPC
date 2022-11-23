<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
    $email=$_POST['email'];
    $nama_lengkap=$_POST['nama_lengkap'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $umur=$_POST['umur'];

    $sql = "INSERT INTO tb_login (email, nama_lengkap, username, password, umur) VALUES ('$email', '$nl', '$username', '$password', '$umur')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:index.php?status=sukses');
    }else{
        header('location:index.php?status=gagal');
    }
}
?>