<?php
// Validasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Tangkap Data 
    $nama = $_POST['nama'] ?? '-';
    $email = $_POST['email'] ?? '-';
    $telefon = $_POST['telefon'] ?? '-';
    $kategori = $_POST['kategori'] ?? '-';
    $slot = intval($_POST['slot'] ?? 0);
    
    // Nama fail 
    $bukti_nama = $_FILES['bukti']['name'] ?? 'Tiada Fail';

    // 2. KIRA JUMLAH YURAN (TUGASAN TAMBAHAN)
    $harga_seunit = 150;
    $jumlah_bayaran = $slot * $harga_seunit;

} else {
    // Redirect jika akses terus
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resit Pendaftaran - Web Summit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>STATUS PENDAFTARAN</h1>
    </div>

    <div class="container">
        
        <div class="success-message">
            <h2>Tahniah, Tempahan Berjaya!</h2>
            <p>Terima kasih kerana mendaftar untuk Global Web Summit 2026.</p>
        </div>

        <h2 class="section-title">Ringkasan Tempahan</h2>
        
        <table class="info-table">
            <tr>
                <td>Nama Peserta</td>
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
                <td>Kategori Tiket</td>
                <td><?php echo htmlspecialchars($kategori); ?></td>
            </tr>
            <tr>
                <td>Bilangan Slot</td>
                <td><?php echo htmlspecialchars($slot); ?> Orang</td>
            </tr>
            <tr>
                <td>Bukti Bayaran</td>
                <td><?php echo htmlspecialchars($bukti_nama); ?> <span class="status-verified">✔ Diterima</span></td>
            </tr>
            
            <tr class="total-row">
                <td>JUMLAH BAYARAN</td>
                <td>RM <?php echo number_format($jumlah_bayaran, 2); ?></td>
            </tr>
        </table>

        <div class="action-bar">
            <button onclick="window.print()" class="btn-print">Cetak Resit Rasmi</button>
            <br><br>
            <a href="index.php" class="link-back">Kembali ke Halaman Utama</a>
        </div>

    </div>

</body>
</html>