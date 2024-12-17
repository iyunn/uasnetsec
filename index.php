<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Elegan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">

    <!-- Navbar -->
    <header class="bg-black shadow-lg">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-3xl font-bold text-gold">Restoran Elegan</h1>
            <nav>
                <a href="index.php" class="px-4 py-2 text-gold hover:text-white">Beranda</a>
                <a href="menu.php" class="px-4 py-2 text-gold hover:text-white">Menu</a>
                <a href="reservasi.php" class="px-4 py-2 text-gold hover:text-white">Reservasi</a>
                <a href="kontak.php" class="px-4 py-2 text-gold hover:text-white">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="h-screen flex justify-center items-center bg-cover bg-center" style="background-image: url('gambar.jpg');">
        <div class="text-center">
            <h2 class="text-5xl font-semibold text-gold mb-4">Selamat Datang di Restoran Elegan</h2>
            <p class="text-xl mb-6">Nikmati pengalaman makan malam terbaik dengan suasana yang elegan.</p>
            <!-- Tombol Reservasi yang elegan dengan warna hitam dan elemen gold -->
            <a href="reservasi.php" class="px-10 py-4 text-2xl font-semibold bg-black text-gold border-2 border-gold rounded-full shadow-lg transform transition duration-300 ease-in-out hover:bg-gold hover:text-black hover:scale-105 hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-gold focus:ring-opacity-50">
                Reservasi Sekarang
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-center text-gold py-6">
        <p>&copy; 2024 Restoran Elegan. All Rights Reserved.</p>
    </footer>
</body>

</html>