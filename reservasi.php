<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Restoran Elegan</title>
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
    <section class="h-96 flex justify-center items-center bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1920x1080');">
        <div class="text-center">
            <h2 class="text-5xl font-semibold text-gold mb-4">Reservasi Restoran Elegan</h2>
            <p class="text-xl mb-6">Isi formulir di bawah untuk melakukan reservasi.</p>
        </div>
    </section>

    <!-- Reservasi Form -->
    <section class="container mx-auto p-6">
        <form action="reservasi.php" method="POST" class="bg-white text-black p-8 rounded-lg shadow-lg">
            <div class="mb-4">
                <label for="name" class="block text-xl font-semibold text-black">Nama:</label>
                <input type="text" id="name" name="name" required class="bg-white text-black px-4 py-2 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
            </div>

            <div class="mb-4">
                <label for="table_number" class="block text-xl font-semibold text-black">Nomor Meja:</label>
                <input type="text" id="table_number" name="table_number" required class="bg-white text-black px-4 py-2 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
            </div>

            <div class="mb-4">
                <label for="date" class="block text-xl font-semibold text-black">Tanggal Reservasi:</label>
                <input type="date" id="date" name="date" required class="bg-white text-black px-4 py-2 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
            </div>

            <div class="mb-4">
                <label for="people_count" class="block text-xl font-semibold text-black">Jumlah Orang:</label>
                <input type="number" id="people_count" name="people_count" required class="bg-white text-black px-4 py-2 w-full rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-gold">
            </div>

            <button type="submit" class="bg-black text-gold px-6 py-2 w-full rounded-lg hover:bg-gold hover:text-black hover:scale-105 transition transform duration-300 ease-in-out">
                Reservasi Sekarang
            </button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-center text-gold py-6">
        <p>&copy; 2024 Restoran Elegan. All Rights Reserved.</p>
    </footer>
</body>

</html>