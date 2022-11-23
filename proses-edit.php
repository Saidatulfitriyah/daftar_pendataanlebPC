<?php
include("koneksi.php");

if(isset($_POST['tambah'])){
    $kode = $_POST['id'];
    $no_seri = $_POST['no_seri'];
    $merek = $_POST['merek'];
    $jumlah =$_POST['jumlah'];

    $sql = "UPDATE tb_fitri9nov SET no_seri='$no_seri', merek='$merek' , jumlah='$jumlah' WHERE id=$kode";
    $query = mysqli_query($koneksi,$sql);

    if($query){
    header( 'Location:tampil.php');
    }else{
        die ("gagal mengedit");
    }
}
?>