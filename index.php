<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar Pembangunan Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h1>SEMINAR TEKNOLOGI WEB MASA DEPAN</h1>
        <p>Kuasai PHP & MySQL dalam masa satu hari!</p>
    </div>

    <div class="container">
        <h2>Butiran Program</h2>
        <table class="info-table">
            <tr>
                <td>Tajuk</td>
                <td>Pembangunan Sistem Web Dinamik</td>
            </tr>
            <tr>
                <td>Penceramah</td>
                <td>
                    <strong>Dr. Ahmad Albab</strong><br>
                    <em>Pakar Keselamatan Cyber & Web</em>
                </td>
            </tr>
            <tr>
                <td>Sinopsis</td>
                <td>Bengkel ini memberi pendedahan tentang teknik membina sistem tempahan yang selamat dan efisien menggunakan PHP.</td>
            </tr>
            <tr>
                <td>Logistik</td>
                <td>25 Februari 2026 | 9:00 Pagi | Dewan Besar</td>
            </tr>
            <tr>
                <td>Yuran</td>
                <td>RM 150.00 / Peserta</td>
            </tr>
            <tr>
                <td>Hubungan</td>
                <td>urusetia@seminar.com | 012-3456789</td>
            </tr>
        </table>

        <hr>

        <h2>Pendaftaran Peserta</h2>
        
        <form action="pengesahan.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="nama">Nama Penuh:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="email">Alamat E-mel:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="telefon">Nombor Telefon:</label>
                <input type="text" id="telefon" name="telefon" required>
            </div>

            <div class="form-group">
                <label for="kategori">Kategori Peserta:</label>
                <select id="kategori" name="kategori" required>
                    <option value="">-- Sila Pilih --</option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Pensyarah">Pensyarah</option>
                    <option value="Orang Awam">Orang Awam</option>
                    <option value="Korporat">Korporat</option>
                </select>
            </div>

            <div class="form-group">
                <label for="slot">Bilangan Slot:</label>
                <input type="number" id="slot" name="slot" min="1" required>
                <p class="note">*Harga per slot: RM 150.00</p>
            </div>

            <div class="form-group">
                <label for="bukti">Bukti Pembayaran (Fail):</label>
                <input type="file" id="bukti" name="bukti" required>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="perakuan" required>
                    Saya mengesahkan semua maklumat di atas adalah benar.
                </label>
            </div>

            <button type="submit">Hantar Pendaftaran</button>
        </form>
    </div>

</body>
</html>