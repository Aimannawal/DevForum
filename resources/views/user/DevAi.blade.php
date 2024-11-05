<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevForum</title>
    <link rel="icon" href="assets/img/logo/logo-kotak-white.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        @keyframes wave {

            0%,
            100% {
                transform: translateY(0);
            }

            25% {
                transform: translateY(-5px);
            }

            75% {
                transform: translateY(5px);
            }
        }

        .animate-wave {
            animation: wave 1.5s infinite;
        }

        .loader {
            border-top-color: #3B82F6;
            -webkit-animation: spinner 1.5s linear infinite;
            animation: spinner 1.5s linear infinite;
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .logo-img {
            width: 70%;
            max-width: 200px;
            height: auto;
            object-fit: contain;
        }
    </style>
</head>

<body class="bg-gray-100 h-screen flex flex-col">

    <div id="loading-overlay" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <div class="loader ease-linear rounded-full h-32 w-32 border-8 border-gray-300 border-t-primary animate-spin">
        </div>
    </div>

    <nav class="bg-white shadow-md" x-data="{ isOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <img src="assets/img/logo/logo.png" alt="DevForum Logo" class="logo-img">
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="/dashboard"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Dashboard</a>
                        <a href="/forum"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Forum</a>
                        <a href="#"
                            class="border-primary text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">DevAi✨</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <div class="relative" x-data="{ open: false }">
                        <button type="button" class="flex items-center space-x-3 focus:outline-none"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click="open = !open">
                            <span class="sr-only">Buka menu pengguna</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="Foto profil pengguna">
                            <span class="text-gray-700 text-sm font-medium">{{ Auth::user()->name }}</span>
                        </button>
                        <div x-show="open" @click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                                    out</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="isOpen = !isOpen" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Buka menu utama</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="sm:hidden" id="mobile-menu" x-show="isOpen" @click.away="isOpen = false">
            <div class="pt-2 pb-3 space-y-1">
                <a href="/dashboard"
                    class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Dashboard</a>
                <a href="/forum"
                    class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Forum</a>
                <a href="#"
                    class="bg-primary border-primary text-white block pl-3 pr-4 py-2 border-l-4 text-base font-medium">DevAi✨</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Sign
                        out</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="flex-1 overflow-hidden flex flex-col max-w-4xl mx-auto w-full bg-white shadow-xl rounded-lg my-8">
        <div id="chat-container" class="flex-1 overflow-y-auto p-6 space-y-6 scrollbar-hide">
            <div class="flex justify-center mb-8">
                <div class="max-w-[75%] text-center">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Selamat datang di DevAi</h2>
                    <p class="text-gray-600 mb-4">Saya di sini untuk membantu Anda menemukan paket atau framework yang
                        tepat untuk kebutuhan pengembangan Anda. Silakan tanyakan apa saja!</p>
                    <div class="flex justify-center space-x-4">
                        <button
                            class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-blue-200 transition duration-300"
                            onclick="suggestQuestion('Apa framework frontend terbaik untuk aplikasi web skala besar?')">
                            Framework frontend
                        </button>
                        <button
                            class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-green-200 transition duration-300"
                            onclick="suggestQuestion('Bisakah Anda merekomendasikan ORM yang bagus untuk Node.js?')">
                            ORM backend
                        </button>
                        <button
                            class="bg-purple-100 text-purple-700 px-4 py-2 rounded-full text-sm font-medium hover:bg-purple-200 transition duration-300"
                            onclick="suggestQuestion('Apa saja library manajemen state yang populer untuk React?')">
                            Manajemen state
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 p-6">
            <div class="flex items-center space-x-4">
                <input type="text" id="user-input"
                    class="flex-1 border-2 border-gray-300 rounded-full px-6 py-3 text-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition duration-300"
                    placeholder="Ketik pesan Anda...">
                <button id="send-button"
                    class="bg-blue-500 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 transition duration-300">
                    Kirim
                </button>
            </div>
        </div>
    </main>

    <script>
        const chatContainer = document.getElementById('chat-container');
        const userInput = document.getElementById('user-input');
        const sendButton = document.getElementById('send-button');
        const loadingOverlay = document.getElementById('loading-overlay');

        loadingOverlay.style.display = 'flex';

        setTimeout(() => {
            loadingOverlay.style.opacity = '0';
            loadingOverlay.style.transition = 'opacity 0.5s ease-out';
            setTimeout(() => {
                loadingOverlay.style.display = 'none';
            }, 500);
        }, 500);

        function addMessage(content, isUser) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `flex ${isUser ? 'justify-end' : 'justify-start'}`;

            const innerDiv = document.createElement('div');
            innerDiv.className =
                `max-w-[75%] rounded-2xl p-4 ${isUser ? 'bg-blue-500 text-white' : 'bg-gray-100 text-gray-800'}`;

            const textDiv = document.createElement('div');
            textDiv.className = 'text-lg';
            textDiv.textContent = content;

            innerDiv.appendChild(textDiv);
            messageDiv.appendChild(innerDiv);
            chatContainer.appendChild(messageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        function typeOutMessage(content, isUser) {
            let index = 0;
            const interval = 30;

            const messageDiv = document.createElement('div');
            messageDiv.className = `flex ${isUser ? 'justify-end' : 'justify-start'}`;

            const innerDiv = document.createElement('div');
            innerDiv.className =
                `max-w-[75%] rounded-2xl p-4 ${isUser ? 'bg-blue-500 text-white' : 'bg-gray-100 text-gray-800'}`;

            const textDiv = document.createElement('div');
            textDiv.className = 'text-lg';

            innerDiv.appendChild(textDiv);
            messageDiv.appendChild(innerDiv);
            chatContainer.appendChild(messageDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;

            const typingInterval = setInterval(() => {
                if (index < content.length) {
                    textDiv.textContent += content.charAt(index);
                    index++;
                    chatContainer.scrollTop = chatContainer.scrollHeight;
                } else {
                    clearInterval(typingInterval);
                }
            }, interval);
        }

        function handleSendMessage() {
            const message = userInput.value.trim();
            if (message === '') return;

            const cleanedMessage = message.replace(/\*/g, '');

            const context =
                "Kamu adalah DevAi (Developer Ai), kamu akan membantu orang untuk mencari package atau framework sesuai kebutuhan mereka, jawab semua pertanyaan yang diajukan dengan singkat namun to the point. buat kalau ada pertanyaan diluar devai bisa bilang kami tidak dapat membantu anda dalam menjawab ini";

            addMessage(cleanedMessage, true);
            userInput.value = '';

            const fullMessage = `${context} ${cleanedMessage}`;
            generateResponse(fullMessage);
        }

        function generateResponse(text) {
            const loadingDiv = document.createElement('div');
            loadingDiv.className = 'flex justify-start';
            loadingDiv.innerHTML = `
                <div class="max-w-[75%] rounded-2xl p-4 bg-gray-100">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-gray-400 rounded-full animate-wave"></div>
                        <div class="w-3 h-3 bg-gray-400 rounded-full animate-wave" style="animation-delay: 0.2s"></div>
                        <div class="w-3 h-3 bg-gray-400 rounded-full animate-wave" style="animation-delay: 0.4s"></div>
                    </div>
                </div>
            `;
            chatContainer.appendChild(loadingDiv);
            chatContainer.scrollTop = chatContainer.scrollHeight;

            fetch("response.php", {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        text: text
                    })
                })
                .then(res => res.text())
                .then(res => {
                    chatContainer.removeChild(loadingDiv);

                    const filteredResponse = res
                        .replace(/ini/g, '')
                        .replace(/Apa itu AOS\?/g, '')
                        .replace(/\*\*(.*?)\*\*/g, '$1')
                        .replace(/\*(.*?)\*/g, '$1')
                        .replace(/```/g, '')
                        .replace(/\*/g, '')
                        .trim();

                    typeOutMessage(filteredResponse, false);
                });
        }

        function suggestQuestion(question) {
            userInput.value = question;
            userInput.focus();
        }

        sendButton.addEventListener('click', handleSendMessage);
        userInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                handleSendMessage();
            }
        });
    </script>
</body>

</html>
