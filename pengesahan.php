<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
    $nama = $_POST['nama'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefon = $_POST['telefon'] ?? '';
    $kategori = $_POST['kategori'] ?? '';
    $slot = intval($_POST['slot'] ?? 0); 
    
    // Nama fail bukti pembayaran
    $bukti_nama = $_FILES['bukti']['name'] ?? 'Tiada Fail';

    // 2. Tugas Tambahan: Pengiraan Jumlah Yuran
    $harga_seunit = 150; // Harga seunit (RM)
    $jumlah_bayaran = $slot * $harga_seunit;

} else {
    // Jika user cuba buka fail ini tanpa isi borang, hantar balik ke index
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengesahan Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>STATUS PENDAFTARAN</h1>
    </div>

    <div class="container">
        
        <div class="success-box">
            <h3>Terima Kasih!</h3>
            <p>Pendaftaran anda telah berjaya diterima.</p>
        </div>

        <h2>Butiran Peserta</h2>
        <table class="info-table">
            <tr>
                <td>Nama Penuh</td>
                <td><?php echo htmlspecialchars($nama); ?></td>
            </tr>
            <tr>
                <td>E-mel</td>
                <td><?php echo htmlspecialchars($email); ?></td>
            </tr>
            <tr>
                <td>No. Telefon</td>
                <td><?php echo htmlspecialchars($telefon); ?></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><?php echo htmlspecialchars($kategori); ?></td>
            </tr>
            <tr>
                <td>Bilangan Slot</td>
                <td><?php echo htmlspecialchars($slot); ?></td>
            </tr>
            <tr>
                <td>Bukti Pembayaran</td>
                <td><?php echo htmlspecialchars($bukti_nama); ?> (Diterima)</td>
            </tr>
            
            <tr class="total-row">
                <td>JUMLAH BAYARAN</td>
                <td>RM <?php echo number_format($jumlah_bayaran, 2); ?></td>
            </tr>
        </table>

        <div class="action-container">
            <button onclick="window.print()">Cetak Resit</button>
            <br>
            <a href="index.php">Kembali ke Halaman Utama</a>
        </div>

    </div>

</body>
</html>