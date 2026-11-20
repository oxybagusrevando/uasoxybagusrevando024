<?php
if (!isset($page_title)) { $page_title = "Kenali Asam Urat"; }
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?> | Kenali Asam Urat</title>
    <link rel="stylesheet" href="assets/style.css">
<style type="text/css">
.brand.style3 {
    color: #FFFFFF !important;
    font-size: 30px;
    font-weight: bold;
    letter-spacing: 1px;
    font-family: Arial, sans-serif;
}

.brand.style3:hover {
    color: #FFFFFF !important;
}
/* HEADER GRADASI MERAH BIRU */
.topbar {
    background: linear-gradient(90deg, #e51e2a, #a52b55, #293f87) !important;
}

/* WARNA MENU */
.navigation a {
    color:#000000 !important;
}

/* MENU AKTIF */
.navigation a.active {
    background: rgba(255,255,255,0.25);
    color: #000000 !important;
    border-radius: 8px;
    padding: 10px;
}

/* LOGO UDB */
.logo-udb {
    width: 65px;
    height: 65px;
    object-fit: contain;
    background: white;
    padding: 3px;
    border-radius: 10px;
	vertical-align:middle;
}
/* MEMPERBAIKI WARNA TULISAN HEADER */
.topbar .brand,
.topbar .brand span,
.topbar .brand-accent {
    color: #FFFFFF !important;
}
.style3 {font-size: xx-large}
/* WARNA HITAM UNTUK SEMUA TULISAN MENU */
#mainNav a,
#mainNav a:link,
#mainNav a:visited,
#mainNav a:hover,
#mainNav a.active {
    color: #000000 !important;
}
</style>
</head>
<body>
<header class="topbar">
    <div class="container nav-wrap">
        <a class="brand" href="index.php">
<img src="logo-udb.jpg" 
class="logo-udb" alt="Logo UDB">
<span class="style3">URATCARE</span></a>
        <button class="menu-toggle" id="menuToggle" aria-label="Buka menu">☰</button>
        <nav class="navigation" id="mainNav">
            <a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a>
            <a href="profil.php" class="<?php echo $current_page == 'profil.php' ? 'active' : ''; ?>">Profil</a>
            <a href="gejala.php" class="<?php echo $current_page == 'gejala.php' ? 'active' : ''; ?>">Gejala</a>
            <a href="penyebab.php" class="<?php echo $current_page == 'penyebab.php' ? 'active' : ''; ?>">Penyebab</a>
            <a href="pencegahan.php" class="<?php echo $current_page == 'pencegahan.php' ? 'active' : ''; ?>">Pencegahan</a>
            <a href="penanganan.php" class="<?php echo $current_page == 'penanganan.php' ? 'active' : ''; ?>">Penanganan</a>
            <a href="konsultasi.php" class="<?php echo $current_page == 'konsultasi.php' ? 'active' : ''; ?>">Konsultasi</a>
            <a href="kontak.php" class="<?php echo $current_page == 'kontak.php' ? 'active' : ''; ?>">Kontak</a>
        </nav>
  </div>
</header>
<main>
