<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="assets/img/logo/logo-kotak-white.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex items-center justify-center p-4" data-aos-easing="ease-out-cubic" data-aos-duration="500">
    <div class="w-full max-w-md" data-aos="fade-up">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-8 text-white" data-aos="fade-down">
                <h1 class="text-3xl font-bold mb-2">Register</h1>
                <p class="text-blue-100">Create your account to get started</p>
            </div>
            <div class="p-8">
                <form method="POST" action="{{ route('register') }}" class="space-y-6" data-aos="fade-in">
                    @csrf
                    <div class="space-y-2">
                        <label for="name" class="text-sm font-medium text-gray-700 flex items-center">
                            Name
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            placeholder="Your name"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-20 transition duration-200"
                            required 
                        >
                    </div>
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium text-gray-700 flex items-center">
                            Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="your@email.com"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-20 transition duration-200"
                            required 
                        >
                    </div>
                    <div class="space-y-2">
                        <label for="password" class="text-sm font-medium text-gray-700 flex items-center">
                            Password
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="••••••••"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-20 transition duration-200"
                            required 
                        >
                    </div>
                    <div class="space-y-2">
                        <label for="password_confirmation" class="text-sm font-medium text-gray-700 flex items-center">
                            Confirm Password
                        </label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            placeholder="••••••••"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-20 transition duration-200"
                            required 
                        >
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-3 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-200">
                        Register
                    </button>
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mt-4" role="alert" data-aos="fade-right">
                            <strong>{{ $errors->first() }}</strong>
                        </div>
                    @endif
                </form>
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-600 transition duration-200 ml-1">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
