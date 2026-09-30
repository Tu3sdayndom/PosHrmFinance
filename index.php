<?php
// Optional: You can add session checks here if needed later
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kain G! - Restaurant Management & POS System</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased min-h-screen flex flex-col justify-between">

    <!-- Header / Navbar -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-2xl font-black text-orange-600 tracking-wide">Kain G!</span>
                <span class="text-xs font-semibold uppercase tracking-wider bg-orange-100 text-orange-800 px-2 py-0.5 rounded-full hidden sm:inline-block">Operations Portal</span>
            </div>
            <div>
                <a href="Poslab/Auth/Login.php" class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-2.5 rounded-xl font-semibold transition duration-200 shadow-sm text-sm">
                    System Login
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="max-w-7xl mx-auto px-6 py-16 sm:py-20 flex flex-col items-center text-center my-auto">
        <div class="inline-block bg-orange-100 text-orange-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-6">
            Enterprise Restaurant Management System
        </div>
        <h1 class="text-4xl sm:text-6xl font-extrabold text-gray-900 tracking-tight mb-6 leading-tight">
            Welcome to <span class="text-orange-600">Kain G!</span>
        </h1>
        <p class="max-w-2xl text-lg sm:text-xl text-gray-600 mb-10 leading-relaxed">
            Your centralized solution for point-of-sale transactions, inventory control, human resources, and financial management.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
            <a href="Poslab/Auth/Login.php" class="bg-orange-600 hover:bg-orange-700 text-white font-bold px-8 py-4 rounded-xl shadow-lg transition duration-200 text-base">
                Access Portal & Login &rarr;
            </a>
        </div>

        <!-- System Modules Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-20 w-full text-left">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="text-orange-600 font-bold text-lg mb-2">POS & Orders</div>
                <p class="text-gray-600 text-sm">Fast order processing, table management, and seamless kitchen queues.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="text-orange-600 font-bold text-lg mb-2">Inventory Control</div>
                <p class="text-gray-600 text-sm">Track stock levels, ingredients, and supplies in real-time.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="text-orange-600 font-bold text-lg mb-2">HR & Recruitment</div>
                <p class="text-gray-600 text-sm">Manage staff profiles, schedules, contracts, and onboarding.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="text-orange-600 font-bold text-lg mb-2">Finance Hub</div>
                <p class="text-gray-600 text-sm">Monitor daily revenue, expenses, and financial calculations.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-6 text-center text-xs text-gray-500">
        <p>&copy; <?php echo date('Y'); ?> Kain G! Restaurant System. All rights reserved.</p>
    </footer>

</body>
</html>