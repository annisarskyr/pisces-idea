<?php
include('db.php');

if (isset($_SESSION['username'])) header('Location:index.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$pesanan = $_POST['pesanan'];
$pembayaran = $_POST['pembayaran'];
$warna = $_POST['warna'];
$element = $_POST['element'];
$text_ = $_POST['text_'];
$konsep = $_POST['konsep'];
$gambar = $_FILES['gambar']['name'];


if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
        // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
        $query = "INSERT INTO form (nama,gambar,email,no_hp,alamat,pesanan,pembayaran,warna,element,text_,konsep) VALUES ('$nama', '$nama_gambar_baru','$email','$no_hp','$alamat','$pesanan','$pembayaran','$warna','$element','$text_','$konsep')";
        $result = mysqli_query($con, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($con) .
                " - " . mysqli_error($con));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>
    alert('Data berhasil ditambah.');
    window.location = 'login.php';
</script>";
        }
    } else {
        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
        echo "<script>
    alert('Ekstensi gambar yang boleh hanya jpg atau png.');
    window.location = 'form.php';
</script>";
    }
} else {
    $query = "INSERT INTO form (nama, gambar, email,no_hp,alamat,pesanan,pembayaran,warna,element,text_,konsep) VALUES ('$nama', null,'$email','$no_hp','$alamat','$pesanan','$pembayaran','$warna','$element','$text_','$konsep')";
    $result = mysqli_query($con, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($con) .
            " - " . mysqli_error($con));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>
    alert('Data berhasil ditambah.');window.location = 'form.php';
</script>";
    }
}
