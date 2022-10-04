
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>


<body>
    <div class="row" style="margin-top:100px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px;
    background-image:url(pict-1.jpg);
    color:white;
    font-weight:500;">
        <form action="proses_login.php" method="post">
          <h3  align="center">Tumbas  </h3>
          <h6 style="font-weight:100;" align="center">harus login dulu</h6>
          Username:
          <input type="text" name="username" value="" class="form-control">
          password:
          <input type="password" name="pasword" class="form-control"><br>
          <center><input 
          style="background-color:aquamarine;
          padding:8px 40%;
          font-weight:500;margin-bottom:100px;
          color:brown" type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
        
      </form><center>
      <h5  style="color:azure;
      margin-top:20px">belum punya acount?</h5>
      <li class="nav-item" style="
      list-style:none;">
            <a style="color:deepskyblue;border-radius:8px;
            padding:10px" class="nav-link" aria-current="page" href="/toko_m/pelanggan/tambah_pelanggan.php">daftar?</a>
          </li></center>
    </div>
    <div class="col-md"></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>