<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<style>
    body{
padding: 5% 30%;
background-image: url(pict-1.jpg);
    }
    .button{
        margin-top: 30px;
        padding: 10px 44%;
        color: gainsboro;
        border-radius: 8px;
        background-color: gainsboro;  
        border-style: none;
        font-weight:500;
        font-size: 30px;
}
.button:hover{
    background-color:green;
    color: white;
}
form {
    font-size: 20px;
    font-weight: 500;
    color: whitesmoke;
    padding-top: 10px;
}
    
</style>
<body>
        <h3>Tambah petugas</h3>
    <form action="proses_tambah_petugas.php" method="post">
        nama petugas :
        <input type="text" name="nama_petugas" value="" class="form-control">
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah pelanggan" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
