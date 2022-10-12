<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'dbform.php';

// membuat variabel untuk menampung data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['hp'];
$alamat =  $_POST['alamat'];
$pesanan   =   $_POST['jenispesanan'];
$pembayaran =  $_POST['pembayaran'];
$warna =   $_POST['warna'];
$element =  $_POST['element'];
$text =  $_POST['text'];
$konsep = $_POST['konsep'];
$gambar_produk = $_FILES['gambar_produk']['name'];

//cek dulu jika ada gambar produk jalankan coding ini
if ($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg', 'pdf'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_produk']['tmp_name'];
  $angka_acak     = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
    $query = "INSERT INTO form (nama,gambar_produk,email,no_hp,alamat,pesanan,pembayaran,warna,element,text,konsep) VALUES ('$nama','$nama_gambar_baru', '$email','$no_hp','$alamat','$pesanan,'$pembayaran','$warna','$element','$text','$konsep')";
    $result = mysqli_query($con, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($con) .
        " - " . mysqli_error($con));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    }
  } else {
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
  }
} else {
  $query = "INSERT INTO form (nama,gambar_produk,email,no_hp,alamat,pesanan,pembayaran,warna,element,text,konsep,gambar_produk ) VALUES (('$nama', '$email','$no_hp','$alamat','$pesanan,'$pembayaran','$warna','$element','$text','$konsep', null)";
  $result = mysqli_query($con, $query);
  // periska query apakah ada error
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($con) .
      " - " . mysqli_error($con));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
  }
}