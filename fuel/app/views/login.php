<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
<div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
    <h2 class="text-2xl font-semibold text-center text-gray-700">Login</h2>

    <form action="#" method="POST" class="mt-6">
        <div>
            <label class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" name="email" required
                   class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" name="password" required
                   class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div class="flex items-center justify-between mt-4">
            <label class="flex items-center">
                <input type="checkbox" class="text-blue-500">
                <span class="ml-2 text-sm text-gray-600">Remember me</span>
            </label>
            <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
        </div>

        <button type="submit"
                class="w-full px-4 py-2 mt-4 font-semibold text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
            Login
        </button>
    </form>

    <p class="mt-4 text-sm text-center text-gray-600">
        Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign up</a>
    </p>
</div>
</body>
</html>
