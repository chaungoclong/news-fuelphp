<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

<!-- Sidebar -->
<aside class="w-64 bg-white shadow-lg min-h-screen">
    <div class="p-4 text-center border-b">
        <h1 class="text-xl font-semibold text-gray-700">Dashboard</h1>
    </div>
    <nav class="mt-4">
        <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-blue-500 hover:text-white">Home</a>
        <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-blue-500 hover:text-white">Profile</a>
        <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-blue-500 hover:text-white">Settings</a>
    </nav>
</aside>

<!-- Main Content -->
<div class="flex-1">
    <!-- Navbar -->
    <nav class="bg-white shadow flex justify-between items-center px-6 py-4">
        <h2 class="text-2xl font-semibold text-gray-700">Dashboard</h2>

        <!-- Logout Form với FuelPHP -->
        <?= Form::open(array('action' => Uri::create('logout'), 'method' => 'post')); ?>
        <input type="hidden" name="<?= \Config::get('security.csrf_token_key') ?>"
               value="<?= Security::fetch_token() ?>">
        <button type="submit"
                class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
            Logout
        </button>
        <?= Form::close() ?>
    </nav>

    <!-- Content -->
    <main class="p-6">
        <p class="text-gray-600">This is your dashboard where you can manage everything.</p>

        <!-- Example Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
            <div class="p-6 bg-white rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-700">Total Users</h3>
                <p class="text-2xl font-bold text-blue-500">1,234</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-700">Total Sales</h3>
                <p class="text-2xl font-bold text-green-500">$50,000</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-700">New Messages</h3>
                <p class="text-2xl font-bold text-red-500">23</p>
            </div>
        </div>
    </main>
</div>

</body>
</html>
