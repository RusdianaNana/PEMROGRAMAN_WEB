<?php
// Tampilkan error supaya tidak blank
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Tangkap query string ?page=
$page = isset($_GET['page']) ? $_GET['page'] : "beranda";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="2409106021_Rusdiana.css">
    <script src="2409106021_Rusdiana.js" defer></script>
</head>
<body>
    <header>
        <h1>Dashboard Website Pemain Bola BARCA</h1>
        <nav>
            <ul>
                <li><a href="dashboard.php?page=beranda">Beranda</a></li>
                <li><a href="dashboard.php?page=profil">Profil Pemain</a></li>
                <li><a href="dashboard.php?page=galeri">Galeri</a></li>
                <li><a href="dashboard.php?page=kontak">Kontak</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="card">
            <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p>Anda sedang berada di halaman <b><?php echo ucfirst($page); ?></b>.</p>
        </section>

        <?php if ($page === "beranda"): ?>
            <section class="card">
                <h2>Beranda</h2>
                <p>Website ini menampilkan informasi mengenai pemain Barcelona.</p>
                <button id="btnMode" class="btn btn-primary">Ubah ke Dark Mode</button>
            </section>

        <?php elseif ($page === "profil"): ?>
            <section class="card">
                <h2>Profil Pemain</h2>
                <div class="grid">
                    <article>
                        <h3>Lionel Messi</h3>
                        <img src="img/messi.jpg" width="200" alt="Messi">
                        <p>Legenda Barcelona dengan berbagai rekor.</p>
                    </article>
                    <article>
                        <h3>Pedri</h3>
                        <img src="img/pedri.jpg" width="200" alt="Pedri">
                        <p>Gelandang muda berbakat.</p>
                    </article>
                </div>
            </section>

        <?php elseif ($page === "galeri"): ?>
            <section class="card">
                <h2>Galeri Pemain</h2>
                <div class="grid">
                    <figure>
                        <img src="img/messi.jpg" width="200" alt="Messi">
                        <figcaption>Messi</figcaption>
                    </figure>
                    <figure>
                        <img src="img/pedri.jpg" width="200" alt="Pedri">
                        <figcaption>Pedri</figcaption>
                    </figure>
                </div>
            </section>

        <?php elseif ($page === "kontak"): ?>
            <section class="card">
                <h2>Kontak</h2>
                <form id="formKontak">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="pesan">Pesan:</label>
                    <textarea id="pesan" name="pesan"></textarea>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
                <p id="outputPesan" class="pesan"></p>
            </section>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; 2025 Website Pemain Bola BARCA</p>
    </footer>
</body>
</html>
