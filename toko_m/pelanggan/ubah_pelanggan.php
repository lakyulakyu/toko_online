<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head><style>
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
    <?php
    include "../koneksi.php";
    $qry_get_plg = mysqli_query($conn, "select * from pelanggan ");
    $dt_plg = mysqli_fetch_array($qry_get_plg);
    
    ?>
    <h3>Ubah pelanggan</h3>
    <form action="proses_ubah_pelanggan.php" method="post">
        <input type="hidden" name="id_pelanggan" value="<?= $dt_plg['id_pelanggan'] ?>">
        nama pelanggan:
        <input type="text" name="nama_pelanggan" value="<?= $dt_plg['nama_pelanggan'] ?>" class="form-control">
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?= $dt_plg['alamat'] ?></textarea>
        Tanggal Lahir :
        <input type="date" name="tanggal_lahir" value="<?= $dt_plg['tanggal_lahir'] ?>" class="form-control">
       no telp:
        <input type="number" name="telp" value="<?= $dt_plg['telp'] ?>" class="form-control">
        Username :
        <input type="text" name="username" value="<?= $dt_plg['username'] ?>" class="form-control">
        Password :
        <input type="password" name="pasword" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah pelanggan" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>