<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevForum</title>
    <link rel="icon" href="assets/img/logo/logo-kotak-white.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
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
        .custom-blue-bg {
        background-color: #4361CE;
    }
    .custom-blue-bg:hover {
        background-color: #3651B7;
    }
    .custom-blue-ring {
        --tw-ring-color: #4361CE;
    }
    </style>
</head>
<div id="loading-overlay" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
    <div class="loader ease-linear rounded-full h-32 w-32 border-8 border-gray-300 border-t-primary animate-spin"></div>
</div>

<body class="min-h-screen bg-gray-100 font-poppins" x-data="packages()">
    <div id="cursor-follower" class="cursor-follower"></div>
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
                        <a href="#"
                            class="border-primary text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Forum</a>
                        <a href="/chat-ai"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">DevAi✨</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <div class="relative">
                        <button onclick="toggleDropdown(event, 'user-dropdown')" type="button"
                            class="flex items-center space-x-3 focus:outline-none" id="user-menu-button"
                            aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="User profile picture">
                            <span class="text-gray-700 text-sm font-medium">{{ Auth::user()->name }}</span>
                        </button>
                        <div id="user-dropdown"
                            class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                                    out</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="isOpen = !isOpen" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
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
                <a href="#"
                    class="bg-primary border-primary text-white block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Forum</a>
                <a href="/chat-ai"
                    class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">DevAi✨</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full text-left border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Sign
                        out</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4 sm:mb-0">Top Questions</h1>
            <div class="flex space-x-4 w-full sm:w-auto">
                <a href="/ask"
                    class="custom-blue-bg text-white px-4 py-2 rounded-md text-sm font-medium hover:custom-blue-bg focus:outline-none focus:ring-2 focus:ring-offset-2 custom-blue-ring transition duration-150 ease-in-out">
                    Ask Question
                </a>
            </div>
        </div>

        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul class="divide-y divide-gray-200">
                <li>
                    @foreach ($questions as $question)
                        <div class="relative">
                            <a href="{{ route('forum.index', $question->id) }}" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-xl font-semibold text-primary hover:text-blue-700">
                                            {{ $question->title }}</h2>
                            </a>

                            <div class="relative">
                                <button onclick="toggleDropdown(event, 'menu-{{ $question->id }}')"
                                    class="focus:outline-none">
                                    <svg class="w-5 h-5 text-gray-400 hover:text-gray-600" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="2" />
                                        <circle cx="12" cy="19" r="2" />
                                        <circle cx="12" cy="5" r="2" />
                                    </svg>
                                </button>
                                @if (auth()->user()->id === $question->user_id)
                                    <div id="menu-{{ $question->id }}"
                                        class="absolute right-0 z-10 hidden w-48 mt-2 bg-white rounded-md shadow-lg">
                                        <div class="py-1">
                                            <a href="{{ route('questions.edit', $question->id) }}"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                            <form action="{{ route('questions.destroy', $question->id) }}"
                                                method="POST"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="w-full text-left">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                                <p class="flex items-center text-sm text-gray-500">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $question->category->name }}
                                </p>
                                <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Asked by {{ $question->user->name }}
                                </p>
                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Asked {{ $question->created_at->diffForHumans() }}
                            </div>
                        </div>
        </div>
    </div>
    @endforeach
    </ul>
    </div>

    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 mt-4">
        <div class="flex-1 flex justify-between sm:hidden">
            {{ $questions->onEachSide(1)->links('pagination::simple-tailwind') }}
        </div>
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Showing <span class="font-medium">{{ $questions->firstItem() }}</span>
                    to <span class="font-medium">{{ $questions->lastItem() }}</span>
                    of <span class="font-medium">{{ $questions->total() }}</span> results
                </p>
            </div>
            <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="{{ $questions->previousPageUrl() }}"
                        class="relative inline-flex items-center px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-100">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    @foreach ($questions->getUrlRange(1, $questions->lastPage()) as $page => $url)
                        <a href="{{ $url }}"
                            class="{{ $page == $questions->currentPage() ? 'bg-primary text-white' : 'bg-white text-gray-500 hover:bg-gray-100' }} relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium">
                            {{ $page }}
                        </a>
                    @endforeach

                    <a href="{{ $questions->nextPageUrl() }}"
                        class="relative inline-flex items-center px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-100">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </div>
    </div>
    <?php include 'components/footer.php'; ?>
    <script>
        const loadingOverlay = document.getElementById('loading-overlay');

        loadingOverlay.style.display = 'flex';

        setTimeout(() => {
            loadingOverlay.style.opacity = '0';
            loadingOverlay.style.transition = 'opacity 0.5s ease-out';
            setTimeout(() => {
                loadingOverlay.style.display = 'none';
            }, 500);
        }, 500);

        function toggleDropdown(event, dropdownId) {
            event.stopPropagation();
            const dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }

        document.addEventListener('click', function(event) {
            const dropdowns = document.querySelectorAll('.origin-top-right');
            dropdowns.forEach(dropdown => {
                if (!dropdown.classList.contains('hidden') && !dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>
