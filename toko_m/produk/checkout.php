
<?php
session_start();
include "../koneksi.php";
$cart = @$_SESSION['cart'];
$idPel = @$_SESSION['id_pelanggan'];
$date = date("Y/m/d");
if (count($cart) > 0) {

    foreach ($cart as $key_pdk => $val_pdk); {
        $idProd = $val_pdk['id_produk'];
        $insert = "INSERT INTO transaksi(id_pelanggan, id_produk, tgl_transaksi) VALUE ('$idPel', '$idProd', '$date')";
        
        mysqli_query($conn, $insert);
        $id = mysqli_insert_id($conn);
        $val_pdk['qty'] ;
        $subtotal = $val_pdk['qty'] * $val_pdk['harga'];

        $id = mysqli_insert_id($conn);
        mysqli_query($conn, "insert into detail_transaksi(id_transaksi,qty,subtotal) value('" . $id . "','" . $val_pdk['qty'] . "','" . $subtotal . "')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
}
?>


<!-- batas////////// -->
