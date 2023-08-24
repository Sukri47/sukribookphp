<?php
$servername = "localhost";
$username = "sukri";
$password = "SMKN01Makassar";
$dbname = "sukribook";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$judulBuku = $_POST['judulBuku'];
$sinopsisBuku = $_POST['sinopsisBuku'];
$kategoriBuku = $_POST['kategoriBuku'];

$gambar_name = $_FILES['sampulBuku']['name'];
$gambar_tmp = $_FILES['sampulBuku']['tmp_name'];
$gambar_path = "uploads/" . $gambar_name;

move_uploaded_file($gambar_tmp, $gambar_path);

$sql = "INSERT INTO table_book (judul_buku, sinopsis_buku, kategori_buku, sampul_buku) VALUES ('$judulBuku', '$sinopsisBuku', '$kategoriBuku', '$gambar_path')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
