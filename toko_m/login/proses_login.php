<?php
session_start();
include "../koneksi.php";
$username = $_POST['username'];
$password = $_POST['pasword'];

$q = mysqli_query($conn, "select * from pelanggan where username='".$username."' and pasword='".md5($password)."'");
$r = mysqli_fetch_array ($q);

$q2 = mysqli_query($conn,"select * from petugas where username='".$username."' and pasword='".md5($password)."'");
$row = mysqli_fetch_array ($q2);


if (mysqli_num_rows($q) > 0) {
    $_SESSION['nama_pelanggan'] = $r['nama_pelanggan'];
    $_SESSION['id_pelanggan'] = $r['id_pelanggan'];
    $_SESSION['username'] = $r['username'];
    $_SESSION['pasword'] = $r['pasword'];
    $_SESSION['status_login']=true;
    header('location:home_plg.php');
}
else if (mysqli_num_rows($q2) > 0 ) {
    $_SESSION['nama_petugas'] = $row['nama_petugas'];
    $_SESSION['id_petugas'] = $r['id_petugas'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['pasword'] = $row['pasword'];
    $_SESSION['status_login']=true;
    header('location:home.php');

}else {
    echo "<script>alert('coba cek lagi');location.href='login.php';</script>"; 
}
