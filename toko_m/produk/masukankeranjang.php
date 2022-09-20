<?php 
session_start();

    if($_POST){
        include "../koneksi.php";
        
        $qry_get_pdk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
        $dt_pdk=mysqli_fetch_array($qry_get_pdk);
        $_SESSION['cart'][]=array(
            'id_produk'=>$dt_pdk['id_produk'],
            'nama_produk'=>$dt_pdk['nama_produk'],
            'harga'=>$dt_pdk['harga'],
            'qty'=>$_POST['qty']
        );
    }
    header('location: keranjang.php');
?>
