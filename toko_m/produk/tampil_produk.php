<?php 
    include "../login/header_plg.php";
?>
<center><h2 
style="margin: 50px;">Daftar Produk</h2></center>
<div class="row">
    <?php 
    include "../koneksi.php";
    $qry_pdk=mysqli_query($conn,"select * from produk");
    while($dt_pdk=mysqli_fetch_array($qry_pdk)){
        ?>
        <div class="col-md-3">
            <div class="card"
            style="
            margin-bottom:50px;
            " >
              <img src="gambar/<?=$dt_pdk['foto']?>" class="card-img-top" width="100px"height="190px">
              <div class="card-body">
                <h5  style="
                color:brown" 
                class="card-title"><?=$dt_pdk['nama_produk']?></h5>
                <p class="card-text"> Rp. <?=substr($dt_pdk['harga'], 0,20)?></p>
                <p class="card-text"><?=substr($dt_pdk['deskripsi'], 0,20)?></p>
                <a href="beli_produk.php?id_produk=<?=$dt_pdk['id_produk']?>" class="btn btn-primary">BELI</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
    <footer>
      <style>footer
        {padding:100px 100px;
        background-color:burlywood;}
      </style>
      <center> <h1> ------- selamat belanja------- </h1></center>
     
    </footer>
</div>

