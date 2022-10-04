<?php
include "header_plg.php";
?>
<center>
    <style>
        body
        {background-image: url(pict-1.jpg);}
      h2{color:red;
    margin-top: 200px;
}
        h2{
            color: green;
            margin-top: 200px;
            padding: 200px;
        }
    </style>

<h2>Selamat datang <span style="color:white;
background-color:brown;
padding:0 20px;
border-radius:8px;
"> <?= $_SESSION['nama_pelanggan'] ?> </span>  makanlah jajan sepuasnya/tapi bayar!!</h2>
<!-- <?= $_SESSION['id_pelanggan'] ?> -->
</center>