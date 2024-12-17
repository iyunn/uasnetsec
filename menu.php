<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Restoran Elegan</title>
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

    <!-- Menu Section -->
    <section class="container mx-auto py-12">
        <h2 class="text-center text-4xl font-semibold text-gold mb-12">Menu Makanan & Minuman</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Item Menu -->
            <div class="bg-white text-black rounded-lg p-6 shadow-lg">
                <img src="https://via.placeholder.com/300x200" alt="Makanan 1" class="w-full h-48 object-cover rounded">
                <h3 class="text-2xl font-semibold text-gold mt-4">Makanan 1</h3>
                <p class="mt-2">Deskripsi singkat makanan 1.</p>
            </div>

            <div class="bg-white text-black rounded-lg p-6 shadow-lg">
                <img src="https://via.placeholder.com/300x200" alt="Makanan 2" class="w-full h-48 object-cover rounded">
                <h3 class="text-2xl font-semibold text-gold mt-4">Makanan 2</h3>
                <p class="mt-2">Deskripsi singkat makanan 2.</p>
            </div>

            <div class="bg-white text-black rounded-lg p-6 shadow-lg">
                <img src="https://via.placeholder.com/300x200" alt="Makanan 3" class="w-full h-48 object-cover rounded">
                <h3 class="text-2xl font-semibold text-gold mt-4">Makanan 3</h3>
                <p class="mt-2">Deskripsi singkat makanan 3.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-center text-gold py-6">
        <p>&copy; 2024 Restoran Elegan. All Rights Reserved.</p>
    </footer>
</body>

</html>