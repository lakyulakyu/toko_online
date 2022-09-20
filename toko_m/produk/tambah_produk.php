<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<?php 
    include "../login/header.php";
?> 
<style>
    body h3{
        margin-top:50px;
       
    }
    
    body form {
padding: 5% 30%;
background-image: url(pict-1.jpg);
border-radius: 10px;
margin-top: 100px;
    }
    .button{
        margin-top: 30px;
        padding: 5px 10%;
        color: brown;
        border-radius: 8px; 
        border-style: none;
        font-weight:500;
        font-size: 30px;
        margin-bottom: 10px;

}
.button:hover{
    background-color:burlywood;
    color: white;
}
form {
    font-size: 20px;
    font-weight: 500;
  padding: 10px 2px;
    padding-top: 10px;
    color: whitesmoke;
}
    .foto{
        margin-top: 10px;
        background-color: whitesmoke;
        border-radius: 8px;
    }
    input[type="file"]{
        background-color: burlywood;
    }
</style>
<body>
    <center><h3>Tambah produk</h3></center>
    <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
        nama produk
        <input type="text" name="nama_produk" value="" class="form-control">
        deskripsi:
        <input type="text" name="deskripsi" value="" class="form-control">
        harga :
        <input type="number" name="harga" value="" class="form-control">
        foto : 
        <input  class="foto" type="file"  name="foto" value="" class="from-control">
        
        <input class="button" type="submit" name="simpan" value="Tambah produk" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
