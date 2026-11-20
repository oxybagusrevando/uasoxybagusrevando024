<?php
$page_title = "Konsultasi";
include "config.php"; include "header.php";
$success = false;
$errors = [];
$name = $email = $phone = $message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["telepon"] ?? "");
    $message = trim($_POST["pesan"] ?? "");
    if ($name === "") $errors[] = "Nama wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Format email belum benar.";
    if ($phone === "") $errors[] = "Nomor telepon wajib diisi.";
    if ($message === "") $errors[] = "Pesan wajib diisi.";
    if (!$errors) $success = true;
}
?>
<section class="page-banner"><div class="container"><span class="eyebrow">HUBUNGI KAMI</span><h1>Form Konsultasi</h1><p>Kirim pertanyaan atau permintaan informasi melalui formulir berikut.</p></div></section>
<section class="container content-section form-layout">
    <div class="form-intro"><h2>Ada yang ingin ditanyakan?</h2><p>Silakan isi data dengan benar. Formulir ini merupakan contoh fitur website pembelajaran dan belum terhubung ke database atau layanan konsultasi medis.</p><div class="form-side-note">💬<span><b>Butuh bantuan medis?</b><br>Hubungi fasilitas kesehatan atau tenaga medis secara langsung.</span></div></div>
    <div class="form-card">
        <?php if ($success): ?>
            <div class="success-box"><h3>Pesan berhasil diperiksa!</h3><p>Terima kasih, <?php echo htmlspecialchars($name); ?>. Formulir contoh berhasil divalidasi. Pada versi ini pesan belum disimpan atau dikirim ke email.</p><a class="btn btn-primary" href="../../../Users/HP/AppData/Local/Temp/Rar$DIa7256.20124/konsultasi.php">Isi lagi</a></div>
        <?php else: ?>
            <?php if ($errors): ?><div class="error-box"><?php foreach ($errors as $error): ?><p><?php echo htmlspecialchars($error); ?></p><?php endforeach; ?></div><?php endif; ?>
            <form id="consultForm" method="POST" action="../../../Users/HP/AppData/Local/Temp/Rar$DIa7256.20124/konsultasi.php" novalidate>
                <label for="nama">Nama lengkap</label><input type="text" id="nama" name="nama" placeholder="Masukkan nama" value="<?php echo htmlspecialchars($name); ?>">
                <label for="email">Email</label><input type="email" id="email" name="email" placeholder="nama@email.com" value="<?php echo htmlspecialchars($email); ?>">
                <label for="telepon">Nomor telepon</label><input type="tel" id="telepon" name="telepon" placeholder="Contoh: 08xxxxxxxxxx" value="<?php echo htmlspecialchars($phone); ?>">
                <label for="pesan">Pesan</label><textarea id="pesan" name="pesan" rows="5" placeholder="Tuliskan pertanyaan Anda"><?php echo htmlspecialchars($message); ?></textarea>
                <div id="formMessage" class="form-message"></div>
                <button type="submit" class="btn btn-primary full-btn">Kirim Pesan</button>
            </form>
        <?php endif; ?>
    </div>
</section>
<?php include "footer.php"; ?>
