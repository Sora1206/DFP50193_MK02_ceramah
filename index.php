<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Future Summit 2026</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>GLOBAL WEB SUMMIT 2026</h1>
        <p>Menemui Masa Depan Internet Bersama Penciptanya</p>
    </div>

    <div class="container">
        
        <div class="paper-header">
            <h1>GLOBAL WEB SUMMIT 2026</h1>
            <p>Menemui Masa Depan Internet Bersama Penciptanya</p>
        </div>

        <h2 class="section-title">Keynote Speaker Istimewa</h2>
        
        <div class="speaker-box">
            <img src="tim.jpg" alt="Sir Tim Berners-Lee" class="speaker-img-large">
            
            <div class="speaker-info">
                <h3>Sir Tim Berners-Lee</h3>
                <span class="speaker-role">Pencipta World Wide Web (WWW) & Pengarah W3C</span>
                <p class="speaker-bio">
                    "Internet adalah untuk semua." <br><br>
                    Beliau adalah jurutera komputer yang mencipta World Wide Web pada tahun 1989. Dinobatkan sebagai antara "100 Orang Paling Berpengaruh Abad Ke-20" oleh Majalah Time. Beliau kini mengetuai World Wide Web Consortium (W3C) dan aktif memperjuangkan Open Data dan privasi web.
                </p>
            </div>
        </div>

        <table class="info-table">
            <tr>
                <td>Tajuk Seminar</td>
                <td><strong>The Next Web: Evolusi, Privasi & Kuasa Data</strong></td>
            </tr>
            <tr>
                <td>Sinopsis</td>
                <td>
                    Ini adalah peluang sekali seumur hidup untuk mendengar sendiri visi masa depan internet daripada penciptanya. Seminar ini akan mengupas tentang Web 3.0, desentralisasi data (Solid Project), dan bagaimana pembangun muda boleh membentuk ekosistem digital yang lebih selamat.
                </td>
            </tr>
            <tr>
                <td>Butiran Logistik</td>
                <td>
                    📅 <strong>Tarikh:</strong> 20 Disember 2026<br>
                    📍 <strong>Lokasi:</strong> Kuala Lumpur Convention Centre (KLCC)<br>
                    ⏰ <strong>Masa:</strong> 9:00 Pagi - 1:00 Tengahari
                </td>
            </tr>
            <tr>
                <td>Yuran Tiket</td>
                <td>
                    <span class="ticket-price">RM 500.00</span> / Tempat Duduk
                    <br><small>(Termasuk Sesi 'Meet & Greet')</small>
                </td>
            </tr>
            <tr>
                <td>Hubungan</td>
                <td>urusetia@websummit.com | +603-8888 9999</td>
            </tr>
        </table>

        <h2 class="section-title">Tempahan Tiket VIP</h2>
        <p>Tempat adalah sangat terhad. Sila isi borang di bawah untuk pengesahan segera.</p>
        
        <div class="form-wrapper">
            <form action="pengesahan.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="nama">Nama Penuh (Seperti Dalam Kad Pengenalan):</label>
                    <input type="text" id="nama" name="nama" required placeholder="Contoh: AHMAD BIN ALBAB">
                </div>

                <div class="form-group">
                    <label for="email">E-mel Rasmi:</label>
                    <input type="email" id="email" name="email" required placeholder="nama@organisasi.com">
                </div>

                <div class="form-group">
                    <label for="telefon">No. Telefon:</label>
                    <input type="text" id="telefon" name="telefon" required placeholder="+6012-3456789">
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori Tiket:</label>
                    <select id="kategori" name="kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="Orang Awam">Orang Awam</option>
                        <option value="Korporat">Korporat</option>
                        <option value="Pensyarah">Pensyarah</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="slot">Bilangan Slot:</label>
                    <input type="number" id="slot" name="slot" min="1" value="1" required>
                    <div class="price-display">*Harga satu slot: RM 500.00</div>
                </div>

                <div class="form-group">
                    <label for="bukti">Muat Naik Bukti Pembayaran:</label>
                    <input type="file" id="bukti" name="bukti" accept=".pdf, .jpg, .png" required>
                </div>

                <div class="form-group checkbox-wrapper">
                    <input type="checkbox" id="perakuan" name="perakuan" required>
                    <label for="perakuan" class="checkbox-label">Saya bersetuju dengan terma & syarat penganjur.</label>
                </div>

                <button type="submit" class="btn-submit">Sahkan Tempahan Sekarang</button>
            </form>
        </div>

    </div>
</body>
</html>