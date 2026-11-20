<?php
$page_title = "Home";
include "config.php";
include "header.php";
?>
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-text">
            <span class="eyebrow">INFO KESEHATAN</span>
            <h1>Kenali Asam Urat,<br><span>Cegah Sejak Dini!</span></h1>
            <p>Pahami gejala, penyebab, dan cara mencegah asam urat agar sendi tetap sehat dan tubuh tetap aktif.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="profil.php">Pelajari Selengkapnya</a>
                <a class="btn btn-light" href="pencegahan.php">Cara Pencegahan</a>
            </div>
            <div class="small-note">Informasi sederhana untuk membantu kita lebih peduli terhadap kesehatan.</div>
        </div>
        <div class="hero-art">
            <div class="art-circle">
                <div class="joint-emoji">🦶</div>
                <div class="art-label"><strong>Kenali gejalanya</strong><br><small>Jangan abaikan nyeri sendi</small></div>
            </div>
            <div class="floating-card"><span>💧</span><div><b>Cukupi cairan</b><small>Biasakan minum air putih</small></div></div>
        </div>
    </div>
</section>
<section class="container section">
    <div class="section-heading">
        <span class="eyebrow">MENGENAL LEBIH DEKAT</span>
        <h2>Apa yang perlu diketahui?</h2>
        <p>Asam urat bukan sekadar rasa pegal. Kondisi ini perlu dipahami agar dapat ditangani dengan tepat.</p>
    </div>
    <div class="info-grid">
        <article class="info-card"><div class="card-icon">📖</div><h3>Kenali penyakitnya</h3><p>Pahami pengertian dan bagaimana penumpukan kristal urat dapat memengaruhi sendi.</p><a href="profil.php">Baca profil →</a></article>
        <article class="info-card"><div class="card-icon">🔎</div><h3>Perhatikan gejala</h3><p>Nyeri mendadak, bengkak, kemerahan, dan rasa hangat pada sendi perlu diperhatikan.</p><a href="gejala.php">Lihat gejala →</a></article>
        <article class="info-card"><div class="card-icon">🌿</div><h3>Mulai hidup sehat</h3><p>Pola makan seimbang, aktivitas fisik, dan pemeriksaan kesehatan membantu menjaga tubuh.</p><a href="pencegahan.php">Tips pencegahan →</a></article>
    </div>
</section>
<section class="container reminder">
    <div class="reminder-icon">💡</div>
    <div><h2>Jangan mendiagnosis diri sendiri</h2><p>Nyeri sendi dapat disebabkan oleh berbagai kondisi. Periksakan diri ke fasilitas kesehatan untuk mendapatkan penilaian yang tepat.</p></div>
    <a class="btn btn-primary" href="penanganan.php">Info pemeriksaan</a>
</section>
<?php include "footer.php"; ?>
