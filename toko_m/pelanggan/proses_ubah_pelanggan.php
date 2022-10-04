<?php
if ($_POST) {
    $id_plg = $_POST['id_pelanggan'];
    $nama_plg= $_POST['nama_pelanggan'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $telp= $_POST['telp'];
    $username = $_POST['username'];
    $pasword = $_POST['pasword'];

    if (empty($nama_plg)) {
        echo "<script>alert('nama pelan ggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "../koneksi.php";
        if (empty($password)) {
            $query = "update pelanggan set 
            nama_pelanggan='" . $nama_plg. "',
            tanggal_lahir='" . $tanggal_lahir . "',
            telp='" . $telp . "',
            alamat='" . $alamat . "',
            username='" . $username . "',
            id_pelanggan='" . $id_plg. "' where id_pelanggan='$id_plg'";

            $update = mysqli_query($conn, $query);

            if ($update) {
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=" . $id_pelanggan . "';</script>";
            }
        } else {
            $query = "update pelanggan set 
               nama_pelanggan='" . $nama_plg. "',
            tanggal_lahir='" . $tanggal_lahir . "',
            telp='" . $telp . "',
            alamat='" . $alamat . "',
            username='" . $username . "',
            pasword='" . md5($pasword) . "', 
            id_pelanggan='" . $id_plg . "' where id_pelanggan='$id_plg'";
            $update = mysqli_query($conn, $query);
            if ($update) {
                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=" . $id_pelanggan. "';</script>";
            }
        }
    }
}
