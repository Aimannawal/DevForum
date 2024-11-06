<?php include 'components/header.php'; ?>
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
                        <a href="#"
                            class="border-primary text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Dashboard</a>
                        <a href="/forum"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Forum</a>
                        <a href="/chat-ai"
                            class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">DevAi✨</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <div class="relative" x-data="{ open: false }">
                        <button type="button" class="flex items-center space-x-3 focus:outline-none"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click="open = !open">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="User profile picture">
                            <span class="text-gray-700 text-sm font-medium">{{ Auth::user()->name }}</span>
                        </button>
                        <div x-show="open" @click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <div class="bg-white rounded-md shadow-lg">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                                        out</button>
                                </form>
                            </div>
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
                <a href="#"
                    class="bg-primary border-primary text-white block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Dashboard</a>
                <a href="/forum"
                    class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Forum</a>
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

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <h1 class="text-3xl font-semibold text-gray-900 mb-6">Choose a Package</h1>

            <div class="mb-6 flex flex-col sm:flex-row gap-4">
                <div class="relative w-full sm:w-96">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" id="search" x-model="search" @input="filterPackages()"
                        class="focus:ring-primary focus:border-primary block w-full pl-10 pr-3 py-2 sm:text-sm border-gray-300 rounded-md"
                        placeholder="Search packages...">
                </div>
                <div class="relative w-full sm:w-64" x-data="{ open: false }">
                    <button @click="open = !open" type="button"
                        class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary sm:text-sm"
                        aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                        <span class="block truncate"
                            x-text="selectedCategories.length > 0 ? selectedCategories.join(', ') : 'Select categories'"></span>
                        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        class="absolute z-10 mt-1 w-full rounded-md bg-white shadow-lg max-h-60 overflow-auto">
                        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                            class="py-1 text-base ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                            <template x-for="category in categories" :key="category">
                                <li class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-primary hover:text-white"
                                    role="option" @click="toggleCategory(category)">
                                    <div class="flex items-center">
                                        <span class="font-normal block truncate" x-text="category"></span>
                                    </div>
                                    <span class="text-primary absolute inset-y-0 right-0 flex items-center pr-4"
                                        x-show="selectedCategories.includes(category)">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="package in filteredPackages" :key="package.name">
                    <div
                        class="bg-white overflow-hidden shadow-sm rounded-lg transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        <div class="p-6">
                            <div class="flex items-center justify-center mb-4">
                                <img :src="package.image" :alt="package.name"
                                    class="h-32 w-32 object-cover rounded">
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2" x-text="package.name"></h3>
                            <p class="text-sm text-gray-600 mb-4" x-text="package.description"></p>
                            <div class="flex items-center justify-between">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium"
                                    :class="{
                                        'bg-blue-100 text-blue-800': package.category === 'Frontend',
                                        'bg-green-100 text-green-800': package.category === 'Backend',
                                        'bg-purple-100 text-purple-800': package.category === 'Full Stack',
                                        'bg-yellow-100 text-yellow-800': package.category === 'Mobile',
                                        'bg-red-100 text-red-800': package.category === 'DevOps',
                                        'bg-indigo-100 text-indigo-800': package.category === 'Database',
                                    }"
                                    x-text="package.category">
                                </span>
                                <a :href="package.name" class="flex items-center text-primary">
                                    <span class="text-sm font-medium">Learn more</span>
                                    <svg class="h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </main>
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

        function packages() {
            return {
                search: '',
                selectedCategories: [],
                categories: ['Frontend', 'Backend', 'Full Stack', 'Mobile', 'DevOps', 'Database', 'AI/ML', 'Cloud',
                    'Security', 'IoT', 'Data Science', 'UI/UX', 'Game Development', 'Blockchain'
                ],
                allPackages: [
                    // {
                    //     name: "AOS",
                    //     description: "Animate on Scroll Library",
                    //     category: "Frontend",
                    //     image: "/assets/img/package/AOS.png"
                    // },
                    {
                        name: "Laravel",
                        description: "A PHP framework for web artisans",
                        category: "Backend",
                        image: "/assets/img/package/laravel.png"
                    },
                    {
                        name: "Tailwind",
                        description: "A utility-first CSS framework",
                        category: "Frontend",
                        image: "/assets/img/package/tailwind.png"
                    },
                    {
                        name: "SweetAlert2",
                        description: "A beautiful, responsive, customizable alert library",
                        category: "Frontend",
                        image: "/assets/img/package/sweetAlert2.png"
                    },
                    {
                        name: "Redux",
                        description: "A Predictable State Container for JavaScript Apps",
                        category: "Frontend",
                        image: "/assets/img/package/Redux.png"
                    }
                ],
                filteredPackages: [],
                init() {
                    this.filteredPackages = this.allPackages;
                },
                filterPackages() {
                    this.filteredPackages = this.allPackages.filter(package => {
                        const matchesSearch = package.name.toLowerCase().includes(this.search.toLowerCase()) ||
                            package.description.toLowerCase().includes(this.search.toLowerCase());
                        const matchesCategory = this.selectedCategories.length === 0 || this.selectedCategories
                            .includes(package.category);
                        return matchesSearch && matchesCategory;
                    });
                },
                toggleCategory(category) {
                    const index = this.selectedCategories.indexOf(category);
                    if (index === -1) {
                        this.selectedCategories.push(category);
                    } else {
                        this.selectedCategories.splice(index, 1);
                    }
                    this.filterPackages();
                }
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const cursorFollower = document.getElementById('cursor-follower');
            let mouseX = 0,
                mouseY = 0,
                followerX = 0,
                followerY = 0;

            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
            });

            function animate() {
                followerX += (mouseX - followerX) * 0.1;
                followerY += (mouseY - followerY) * 0.1;
                cursorFollower.style.left = `${followerX}px`;
                cursorFollower.style.top = `${followerY}px`;
                requestAnimationFrame(animate);
            }
            animate();
        });
    </script>
</body>

</html>
