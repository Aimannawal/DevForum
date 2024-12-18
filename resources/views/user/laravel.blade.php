<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevForum</title>
    <link rel="icon" href="assets/img/logo/logo-kotak-white.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        accent: '#4361CE',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-gray-50 font-poppins">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/dashboard"
                            class="flex items-center text-primary hover:text-primary-dark transition duration-150 ease-in-out">
                            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-xl font-semibold">Back to Dashboard</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-8 sm:px-6 lg:px-8">
        <div class="px-4 sm:px-0">
            <div class="flex items-center mb-8">
                <h1 class="text-4xl font-bold text-gray-900">Laravel</h1>
                <span class="ml-4 px-3 py-1 text-sm font-medium bg-accent/10 text-accent rounded-full">PHP
                    Framework</span>
            </div>

            <div class="bg-white shadow-lg rounded-xl overflow-hidden mb-8">
                <div class="relative w-full" style="padding-top: 56.25%">
                    <video src="assets/vid/laravel.mp4" class="absolute top-0 left-0 w-full h-full object-cover"
                        controls></video>
                </div>
            </div>


            <div class="bg-white shadow-lg rounded-xl overflow-hidden mb-8">
                <div class="px-6 py-4 bg-accent text-white flex items-center justify-between">
                    <h2 class="text-xl font-semibold">Documentation</h2>
                    <span class="text-sm bg-white/20 px-3 py-1 rounded-full">v10.x</span>
                </div>
                <div class="divide-y divide-gray-100">
                    <div class="p-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Installation</h3>
                        <div class="relative">
                            <pre class="bg-gray-900 rounded-xl p-4 overflow-x-auto">
                                <code class="text-sm text-gray-200">composer create-project --prefer-dist laravel/laravel your-project-name</code>
                            </pre>
                            <button
                                class="absolute top-3 right-3 p-2 bg-gray-800 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition duration-150 ease-in-out">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z" />
                                    <path
                                        d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- Usage Section -->
                    <div class="p-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Usage</h3>
                        <div class="relative">
                            <pre class="bg-gray-900 rounded-xl p-4 overflow-x-auto">
                                <code class="text-sm text-gray-200">
php artisan serve

// In your browser:
http://127.0.0.1:8000
                                </code>
                            </pre>
                            <button
                                class="absolute top-3 right-3 p-2 bg-gray-800 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition duration-150 ease-in-out">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z" />
                                    <path
                                        d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- Configuration Section -->
                    <div class="p-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Configuration</h3>
                        <div class="relative">
                            <pre class="bg-gray-900 rounded-xl p-4 overflow-x-auto">
                                <code class="text-sm text-gray-200">
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:your-key
APP_DEBUG=true
APP_URL=http://localhost
                                </code>
                            </pre>
                            <button
                                class="absolute top-3 right-3 p-2 bg-gray-800 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white transition duration-150 ease-in-out">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z" />
                                    <path
                                        d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', () => {
                const code = button.parentElement.querySelector('code').innerText;
                navigator.clipboard.writeText(code);
                alert('Copied to clipboard!');
            });
        });
    </script>
</body>

</html>
