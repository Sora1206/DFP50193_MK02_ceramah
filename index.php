<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar Teknologi Web PTSS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>SEMINAR PEMBANGUNAN WEB PROFESIONAL</h1>
        <p>Memperkasakan Kemahiran Digital Bersama Pakar Industri & Akademik</p>
    </div>

    <div class="container">
        
        <div class="paper-header">
            <h1>SEMINAR PEMBANGUNAN WEB PROFESIONAL</h1>
            <p>Politeknik Tuanku Syed Sirajuddin (PTSS)</p>
        </div>

        <h2 class="section-title">Penceramah Jemputan</h2>
        
        <div class="speaker-box">
            <img src="puan hafizah.jpg" alt="Ts. Nor Hafizah binti Md Desa" class="speaker-img-large">
            
            <div class="speaker-info">
                <h3>Ts. Nor Hafizah binti Md Desa</h3>
                <span class="speaker-role">Pensyarah & Teknologis Profesional, JTMK PTSS</span>
                <p class="speaker-bio">
                    Beliau merupakan seorang pensyarah yang berdedikasi di Jabatan Teknologi Maklumat & Komunikasi (JTMK), PTSS. Sebagai seorang <strong style="color:#003366;">Teknologis Profesional (Ts.)</strong> yang diiktiraf oleh Lembaga Teknologis Malaysia (MBOT), beliau mempunyai kepakaran teknikal yang mendalam dalam bidang pengkomputeran dan aktif dalam memperkasakan pendidikan TVET digital kepada para pelajar.
                </p>
            </div>
        </div>

        <table class="info-table">
            <tr>
                <td>Tajuk Seminar</td>
                <td><strong>Evolusi Teknologi Web: Perspektif Teknologis Profesional</strong></td>
            </tr>
            <tr>
                <td>Sinopsis</td>
                <td>
                    Seminar ini menggabungkan teori akademik dan praktikal industri. Ts. Nor Hafizah akan berkongsi pandangan tentang standard profesional dalam pembangunan web, kepetingan pensijilan teknikal, dan teknik membina sistem web yang mematuhi piawaian industri semasa.
                </td>
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
                <td>Yuran Tiket</td>
                <td>
                    <span class="ticket-price">RM 150.00</span> / Peserta
                    <br><small>(Termasuk Sijil Penyertaan & Jamuan)</small>
                </td>
            </tr>
            <tr>
                <td>Hubungan</td>
                <td>urusetia.jtmk@ptss.edu.my | 04-988 6200</td>
            </tr>
        </table>

        <h2 class="section-title">Pendaftaran Peserta</h2>
        <p>Tempat adalah terhad. Sila lengkapkan borang di bawah.</p>
        
        <div class="form-wrapper">
            <form action="pengesahan.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="nama">Nama Penuh (Huruf Besar):</label>
                    <input type="text" id="nama" name="nama" required placeholder="Contoh: NURUL AIN BINTI AHMAD">
                </div>

                <div class="form-group">
                    <label for="email">E-mel Rasmi:</label>
                    <input type="email" id="email" name="email" required placeholder="nama@email.com">
                </div>

                <div class="form-group">
                    <label for="telefon">No. Telefon:</label>
                    <input type="text" id="telefon" name="telefon" required placeholder="+601X-XXXXXXX">
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori Peserta:</label>
                    <select id="kategori" name="kategori" required>
                        <option value="">-- Sila Pilih --</option>
                        <option value="Pelajar PTSS">Pelajar PTSS</option>
                        <option value="Pensyarah">Pensyarah / Staf</option>
                        <option value="Orang Awam">Orang Awam</option>
                        <option value="Industri">Wakil Industri</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="slot">Bilangan Slot:</label>
                    <input type="number" id="slot" name="slot" min="1" value="1" required>
                    <div class="price-display">*Harga satu slot: RM 150.00</div>
                </div>

                <div class="form-group">
                    <label for="bukti">Muat Naik Resit Pembayaran:</label>
                    <input type="file" id="bukti" name="bukti" accept=".pdf, .jpg, .png" required>
                </div>

                <div class="form-group checkbox-wrapper">
                    <input type="checkbox" id="perakuan" name="perakuan" required>
                    <label for="perakuan" class="checkbox-label">Saya mengesahkan maklumat adalah benar & bersetuju dengan syarat.</label>
                </div>

                <button type="submit" class="btn-submit">Sahkan Pendaftaran</button>
            </form>
        </div>

    </div>
</body>
</html>