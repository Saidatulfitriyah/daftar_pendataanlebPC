<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
   
    $no_seri=$_POST['no_seri'];
    $merek=$_POST['merek'];
    $jumlah=$_POST['jumlah'];

    $sql="INSERT INTO tb_fitri9nov(no_seri,merek,jumlah) VALUES('$no_seri','$merek',$jumlah)";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header( 'Location:tampil.php');
    }else{
    ("akses dilarang");
    }   
}
?>