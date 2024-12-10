<?php
require_once 'classes/Page.php';

$page = new Page('Merchandise Kobo Kanaeru');
$page->renderHeader();
?>
<main class="container">
    <!-- Hero Section -->
    <section class="hero">
        <h2>Selamat Datang di Marketplace Kami</h2>
        <p>Temukan produk terbaik dengan penawaran menarik setiap hari!</p>
        <a href="available.php" class="btn-primary">Belanja Sekarang</a>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products">
        <h2>Produk Unggulan</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="assets/1k.jpeg" alt="T-Shirt Kobo">
                <h3>T-Shirt Kobo</h3>
                <p>Rp 120.000</p>
                <button class="btn-secondary">Tambahkan ke Keranjang</button>
            </div>
            <div class="product-card">
                <img src="assets/3k.jpg" alt="Pin Kobo">
                <h3>Pin Koleksi</h3>
                <p>Rp 50.000</p>
                <button class="btn-secondary">Tambahkan ke Keranjang</button>
            </div>
            <div class="product-card">
                <img src="assets/2k.jpeg" alt="Fankit Kobo">
                <h3>Fankit Eksklusif</h3>
                <p>Rp 250.000</p>
                <button class="btn-secondary">Tambahkan ke Keranjang</button>
            </div>
        </div>
    </section>

    <!-- Promotional Banner -->
    <section class="promo-banner">
        <h2>Promo Spesial Hari Ini!</h2>
        <p>Diskon hingga 50% untuk produk tertentu. Jangan lewatkan kesempatan ini!</p>
        <a href="available.php" class="btn-primary">Lihat Promo</a>
    </section>

    </section>
</main>
<?php
$page->renderFooter();
?>
