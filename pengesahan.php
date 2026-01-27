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

    // 2. KIRA JUMLAH YURAN
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
        
        <div class="paper-header">
            <h1>SEMINAR PEMBANGUNAN WEB PROFESIONAL</h1>
            <p>Politeknik Tuanku Syed Sirajuddin (PTSS)</p>
        </div>

        <div class="success-message">
            <h2>Tahniah, Tempahan Berjaya!</h2>
            <p>Terima kasih kerana mendaftar. Berikut adalah butiran tempahan dan maklumat program.</p>
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

        <h2 class="section-title">Maklumat Seminar</h2>

        <div class="speaker-box">
            <img src="puan hafizah.jpg" alt="Ts. Nor Hafizah binti Md Desa" class="speaker-img-large">
            
            <div class="speaker-info">
                <h3>Ts. Nor Hafizah binti Md Desa</h3>
                <span class="speaker-role">Pensyarah & Teknologis Profesional, JTMK PTSS</span>
                <p class="speaker-bio">
                    Beliau merupakan seorang pensyarah yang berdedikasi di Jabatan Teknologi Maklumat & Komunikasi (JTMK), PTSS. Sebagai seorang <strong style="color:#003366;">Teknologis Profesional (Ts.)</strong> yang diiktiraf, beliau mempunyai kepakaran teknikal yang mendalam.
                </p>
            </div>
        </div>

        <table class="info-table">
            <tr>
                <td>Tajuk Seminar</td>
                <td><strong>Evolusi Teknologi Web: Perspektif Teknologis Profesional</strong></td>
            </tr>
            <tr>
                <td>Butiran Logistik</td>
                <td>
                    📅 <strong>Tarikh:</strong> 15 Mac 2026<br>
                    📍 <strong>Lokasi:</strong> Dewan Kuliah Utama, PTSS<br>
                    ⏰ <strong>Masa:</strong> 8:30 Pagi - 1:00 Tengahari
                </td>
            </tr>
            <tr>
                <td>Hubungan</td>
                <td>urusetia.jtmk@ptss.edu.my | 04-988 6200</td>
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