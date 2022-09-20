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
        color: brown;
        border-radius: 8px;
        background-color: gainsboro;  
        border-style: none;
        font-weight:500;
        font-size: 30px;
        
}
.button:hover{
    background-color:burlywood;
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
      <center>  <h3>Daftar</h3></center>
    <form action="proses_tambah_pelanggan.php" method="post">
        nama pelanggan :
        <input type="text" name="nama_pelanggan" value="" class="form-control">
        Tanggal Lahir :
        <input  type="date" name="tanggal_lahir" value="" class="form-control">
        no telpon
        <input type="number" name="telp" value="" class="form-control">
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="pasword" value="" class="form-control">
        
      
       <center> <input  class="button" type="submit" name="simpan" value="submit" class="btn btn-primary"></center>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
