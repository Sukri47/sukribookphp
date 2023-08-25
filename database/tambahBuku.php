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
$batasUmur = $_POST['batasUmur'];

$gambar_name = $_FILES['sampulBuku']['name'];
$gambar_tmp = $_FILES['sampulBuku']['tmp_name'];
$gambar_path = "uploads/" . $gambar_name;

// Validasi tipe file gambar
$allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
$file_extension = pathinfo($gambar_name, PATHINFO_EXTENSION);

if (!in_array($file_extension, $allowed_extensions)) {
    die("Error: Tipe file gambar tidak valid.");
}

// Validasi ukuran file gambar (contoh: maksimum 5MB)
$max_file_size = 5 * 1024 * 1024; // 5MB

if ($_FILES['sampulBuku']['size'] > $max_file_size) {
    die("Error: Ukuran file gambar terlalu besar.");
}

move_uploaded_file($gambar_tmp, $gambar_path);

$sql = "INSERT INTO table_book (judul_buku, sinopsis_buku, kategori_buku, sampul_buku, batas_umur) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sssss", $judulBuku, $sinopsisBuku, $kategoriBuku, $gambar_path, $batasUmur);
    if (mysqli_stmt_execute($stmt)) {
        echo "Data berhasil ditambahkan";
        header("Location: ../page/menubuku.php"); // Ganti dengan nama file halaman home yang sesuai
        exit();
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
