<?php
if($_POST){
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['pasword'];

    if(empty($nama_pelanggan)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    }elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } 
    
    else {
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama_pelanggan,tanggal_lahir,telp,alamat,username,pasword) value ('".$nama_pelanggan."','".$tanggal_lahir."','".$telp."','".$alamat."','".$username."','".md5($password)."')");

        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='/toko_m/login/login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>
