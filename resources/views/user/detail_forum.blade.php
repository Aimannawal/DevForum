<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevEdu - Question Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="assets/img/logo/logo-kotak-white.png">
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
</head>

<body class="bg-gray-100 font-poppins">
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/forum"
                            class="flex items-center text-primary hover:text-primary-dark transition duration-150 ease-in-out">
                            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-xl font-semibold">Back to Forum</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
            <div class="px-4 py-5 sm:px-6">
                <h1 class="text-3xl font-bold text-gray-900">{{ $question->title }}</h1>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Asked by {{ $question->user->name }}
                    <span class="mx-2">•</span>
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                            clip-rule="evenodd"></path>
                    </svg>
                    {{ $question->created_at->diffForHumans() }}
                </div>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <p class="text-gray-700">{{ $question->body }}</p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <span
                    class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800 mr-2">
                    {{ $question->category->name }}
                </span>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ $question->answers->count() }} Answers</h2>

        @foreach ($question->answers as $answer)
            <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6 relative">
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="User profile picture">
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-gray-900">{{ $answer->user->name }}</h3>
                                <p class="text-sm text-gray-500">Answered {{ $answer->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="relative">
                            <button type="button" class="text-gray-500 hover:text-gray-700 focus:outline-none"
                                onclick="toggleMenu(this)">
                                &#x22EE;
                            </button>
                            <div
                                class="options-menu hidden absolute right-0 mt-2 w-24 bg-white border border-gray-200 rounded-md shadow-lg">
                                @if (auth()->user()->id === $answer->user_id)
                                    <a href="{{ route('answers.edit', $answer->id) }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Edit
                                    </a>
                                    <form action="{{ route('answers.destroy', $answer->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Delete
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-5 sm:px-6">
                    <p class="text-gray-700 mb-4">{{ $answer->body }}</p>
                </div>
            </div>
        @endforeach

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Your Answer</h2>
                <form action="{{ route('answers.store', $question->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="answer" class="block text-sm font-medium text-gray-700 mb-2">Write your
                            answer</label>
                        <textarea id="answer" name="body" rows="6"
                            class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md"
                            placeholder="Type your answer here..."></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Post Your Answer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function toggleMenu(button) {
            let menu = button.nextElementSibling;
            menu.classList.toggle("hidden");
        }
    </script>
</body>

</html>
