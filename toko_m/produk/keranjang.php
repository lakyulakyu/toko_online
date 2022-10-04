<?php
// session_start();
include "../login/header_plg.php";
?>
<h2>Daftar produk yang dibeli</h2>
<!-- <?= $_SESSION['id_pelanggan'] ?> -->
<table class="table table-hover striped">
    <thead>
        <tr><th>NO</th><th>Nama produk</th><th>harga</th><th>Jumlah</th><th>Aksi</th></tr>
    </thead>
    <tbody>
        <?php
        if (@$_SESSION['cart'] != null) :
            foreach (@$_SESSION['cart'] as $key_pdk => $val_pdk) :
        ?> <tr>
                    <td><?= ($key_pdk + 1) ?></td>
                    <td><?= $val_pdk['nama_produk'] ?></td>
                    <td><?= $val_pdk['harga'] * $val_pdk['qty'] ?></td>
                    <td><?= $val_pdk['qty'] ?></td>
                    
                    <td>
                        <a href="hapus_cart.php?id=<?= $key_pdk ?>" class="btn btn-danger"><strong>X</strong></a>
                    </td>
                </tr> <?php
                    endforeach;
                else :
                        ?>
            <tr>
                <td>
                    <p>Tidak ada barang dicheckout</h1>

                </td>
            </tr>
        <?php
                endif;
        ?>
    </tbody>
</table>
<?php
if (@$_SESSION['cart'] != null) :
?>
    <a href="./checkout.php" class="btn btn-primary">Check Out</a>
<?php
endif
?>

<!-- <a href="tampil_produk.php" class="btn btn-primary">tambah barang</a> -->


<!-- batas///// -->

