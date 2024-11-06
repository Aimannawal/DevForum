<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevForum - Platform Pembelajaran Developer</title>
    <link rel="icon" href="assets/img/logo/logo-kotak-white.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #2563eb;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }

            to {
                transform: translateY(0);
            }
        }

        .menu-open {
            animation: slideDown 0.3s ease forwards;
        }

        .logo-img {
            width: 70%;
            max-width: 200px;
            height: auto;
            object-fit: contain;
        }
    </style>
</head>
<div id="splash-screen" class="fixed inset-0 bg-white z-50 flex items-center justify-center transition-opacity duration-500 ease-in-out">
    <div class="transition-opacity duration-500 ease-in-out">
        <img src="assets/img/logo/logo.png" alt="DevForum Logo" class="w-48 h-48 object-contain animate-pulse">
    </div>
</div>
<body class="bg-gray-50 text-gray-800">
    <header class="bg-white/95 backdrop-blur-sm shadow-sm fixed top-0 left-0 right-0 z-50 transition-all duration-300" data-aos="fade-down" data-aos="fade-down" data-aos-duration="3000">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <img src="assets/img/logo/logo.png" alt="DevForum Logo" class="logo-img">
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#dokumentasi"
                        class="nav-link text-gray-600 hover:text-blue-600 transition-colors duration-300">
                        Documentation
                    </a>
                    <a href="#paket" class="nav-link text-gray-600 hover:text-blue-600 transition-colors duration-300">
                        Packages
                    </a>
                    <a href="#komunitas"
                        class="nav-link text-gray-600 hover:text-blue-600 transition-colors duration-300">
                        Community
                    </a>
                    <div class="flex items-center space-x-4">
                        <a href="/login"
                            class="bg-gray-100 text-blue-600 font-semibold py-2 px-6 rounded-lg hover:bg-gray-200 transform hover:scale-105 transition-all duration-300">
                            Login
                        </a>
                        <a href="/register"
                            class="bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-700 transform hover:scale-105 transition-all duration-300">
                            Register
                        </a>
                    </div>
                </div>

                <button id="menu-toggle"
                    class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <div id="mobile-menu" class="hidden md:hidden transition-all duration-300 ease-in-out">
                <div class="pt-4 pb-3 space-y-3">
                    <a href="#dokumentasi"
                        class="block px-4 py-2 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors duration-200">
                        Documentation
                    </a>
                    <a href="#paket"
                        class="block px-4 py-2 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors duration-200">
                        Packages
                    </a>
                    <a href="#komunitas"
                        class="block px-4 py-2 text-gray-600 hover:bg-gray-50 rounded-lg transition-colors duration-200">
                        Community
                    </a>
                    <div class="pt-2 space-y-2">
                        <a href="/login"
                             class="block px-4 py-2 text-center bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
                            Login
                        </a>
                        <a href="/register"
                            class="block px-4 py-2 text-center bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-16 space-y-24 mt-20">
        <section class="text-center py-16 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg shadow-xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Develop Your Developer Potential</h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Belajar, bangun, dan terhubung dengan platform edukasi developer
                terlengkap.</p>
            <a href="/login"
                class="bg-white text-blue-600 font-bold py-3 px-8 rounded-full hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 text-lg">
                Mulai Sekarang
            </a>
        </section>

        <section id="dokumentasi" class="text-center">
            <h2 class="text-3xl font-bold mb-12" data-aos="fade-up" data-aos-duration="600">Dokumentasi Lengkap</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-6 text-blue-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Frontend</h3>
                    <p class="text-gray-600 mb-4">Kuasai teknologi web modern</p>
                    <p>Pelajari React, Vue, Angular, dan lainnya.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-6 text-blue-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Backend</h3>
                    <p class="text-gray-600 mb-4">Bangun aplikasi server yang handal</p>
                    <p>Eksplorasi Node.js, Django, Ruby on Rails, dll.</p>
                </div>
        
                <div class="bg-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-6 text-blue-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">DevOps</h3>
                    <p class="text-gray-600 mb-4">Optimalkan alur kerja development</p>
                    <p>Pelajari Docker, Kubernetes, CI/CD, dan cloud.</p>
                </div>
            </div>
        </section>

        <section id="paket" class="text-center">
            <h2 class="text-3xl font-bold mb-12" data-aos="fade-up" data-aos-duration="600">Paket Project</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300" 
                     data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-6 text-blue-600" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Package Siap Pakai</h3>
                    <p class="text-gray-600 mb-6">Mulai project Anda dengan mudah</p>
                    <p class="mb-6">Setup project yang telah dikonfigurasi untuk berbagai tech stack.</p>
                    <a href="/login"
                       class="inline-block bg-blue-600 text-white font-bold py-2 px-6 rounded-full hover:bg-blue-700 transform hover:scale-105 transition duration-300">
                        Jelajahi Package
                    </a>
                </div>
        
                <div class="bg-white p-8 rounded-lg shadow-md transform hover:scale-105 transition duration-300" 
                     data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-6 text-blue-600" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Library Komponen</h3>
                    <p class="text-gray-600 mb-6">Bangun lebih cepat dengan komponen siap pakai</p>
                    <p class="mb-6">Komponen UI yang dapat dikustomisasi untuk framework populer.</p>
                    <a href="/login"
                       class="inline-block bg-blue-600 text-white font-bold py-2 px-6 rounded-full hover:bg-blue-700 transform hover:scale-105 transition duration-300">
                        Lihat Komponen
                    </a>
                </div>
            </div>
        </section>
        
        <section id="komunitas" class="text-center py-16 bg-white rounded-2xl shadow-xl" data-aos="fade-up" data-aos-duration="600">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8" data-aos="fade-up" data-aos-duration="600">Bergabung dengan Komunitas Kami</h2>
                <p class="text-xl text-gray-600 mb-8" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">Terhubung dengan ribuan developer Indonesia dan internasional</p>
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="p-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                        <div class="text-4xl font-bold text-blue-600 mb-2">10K+</div>
                        <div class="text-gray-600">Developer Aktif</div>
                    </div>
                    <div class="p-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                        <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>
                        <div class="text-gray-600">Proyek Kolaborasi</div>
                    </div>
                    <div class="p-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                        <div class="text-4xl font-bold text-blue-600 mb-2">1000+</div>
                        <div class="text-gray-600">Tutorial & Artikel</div>
                    </div>
                </div>
                <a href="/login"
                   class="bg-blue-600 text-white font-bold py-4 px-8 rounded-full hover:bg-blue-700 transform hover:scale-105 transition duration-300 inline-block" 
                   data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
                    Gabung Sekarang
                </a>
            </div>
        </section>
    </main>
    <?php include 'components/footer.php'; ?>
    <script>
        AOS.init();
    </script>
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const header = document.querySelector('header');

        function closeMobileMenu() {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('menu-open');
        }

        menuToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('menu-open');
            } else {
                mobileMenu.classList.remove('menu-open');
            }
        });

        document.addEventListener('click', (e) => {
            if (!header.contains(e.target)) {
                closeMobileMenu();
            }
        });

        mobileMenu.addEventListener('click', (e) => {
            e.stopPropagation();
        });

        document.querySelectorAll('#mobile-menu a').forEach(link => {
    link.addEventListener('click', (e) => {
        closeMobileMenu();
        if (window.location.pathname.includes('/login')) {
            e.preventDefault();
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        }
    });
});


        const splashScreen = document.getElementById('splash-screen');
        setTimeout(function() {
            splashScreen.classList.add('opacity-0');
            setTimeout(function() {
                splashScreen.remove();
            }, 500);
        }, 2000);
    });
</script>
</body>
</html>
