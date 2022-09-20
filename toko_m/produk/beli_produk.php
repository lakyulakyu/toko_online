<?php 
    include "../login/header_plg.php";
    include "../koneksi.php";
    $qry_detail_pdk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_pdk=mysqli_fetch_array($qry_detail_pdk);
?>
<h2>Beli Barang</h2>
<div class="row">
    <div class="col-md-4">
    <img src="gambar/<?=$dt_pdk['foto']?>" class="card-img-top" width="100px"height="190px">
    </div>
    <div class="col-md-8">
        <form action="masukankeranjang.php?id_produk=<?=$dt_pdk['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                        <td
                        ><a
                         href="tampil_produk.php" class="btn btn-primary">kembali</a></td>
                    </tr>
                    <tr>
                        <td>Nama produk</td><td><?=$dt_pdk['nama_produk']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_pdk['deskripsi']?></td>
                    </tr>
                    <tr>
                    <td>Harga</td><td><?=$dt_pdk['harga']?></td>
                            </tr>
                    <tr>
                        <td>Jumlah </td><td><input type="number" name="qty" value="1"></td>
                    
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="CHECKOUT"></td>
                    </tr>
                    
                </thead>
            </table>
        </form>
    </div>
</div>



