<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Question</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="assets/img/logo/logo-kotak-white.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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

<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen py-12 px-4 sm:px-6 lg:px-8 font-poppins">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-primary to-blue-400 p-8 text-white">
                <h1 class="text-3xl font-bold mb-2">Edit Question</h1>
                <p class="text-blue-100">Modify your question below</p>
            </div>

            <div class="p-8">
                <form action="{{ route('questions.update', $question->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Title Field -->
                    <div class="space-y-2">
                        <label for="title" class="text-sm font-medium text-gray-700 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            Edit Your Question Title
                        </label>
                        <input type="text" name="title" id="title" value="{{ old('title', $question->title) }}"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20 transition duration-200"
                            placeholder="Enter your question title..." required>
                    </div>

                    <!-- Body Field -->
                    <div class="space-y-2">
                        <label for="body" class="text-sm font-medium text-gray-700 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            Edit Your Question Body
                        </label>
                        <textarea name="body" id="body" rows="6"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20 transition duration-200"
                            placeholder="Make changes to your question..." required>{{ old('body', $question->body) }}</textarea>
                    </div>

                    <!-- Image Upload Field -->
                    <div class="space-y-2">
                        <label for="image" class="text-sm font-medium text-gray-700 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 3H3v12h12V3zm0 0l4 4M7 10h4m-2-2v4" />
                            </svg>
                            Upload New Image (Optional)
                        </label>
                        <input type="file" name="image" id="image"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20 transition duration-200">
                        
                        <!-- Show current image if exists -->
                        @if ($question->image)
                            <div class="mt-4">
                                <p class="text-gray-500 text-sm mb-2">Current Image:</p>
                                <img src="{{ asset('storage/' . $question->image) }}" alt="Question Image"
                                    class="w-48 h-auto rounded-lg shadow-md">
                            </div>
                        @endif
                    </div>

                    <!-- Form Buttons -->
                    <div class="flex items-center justify-between pt-4">
                        <a href="{{ route('questions.index') }}"
                            class="text-gray-600 hover:text-primary transition duration-200 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Forum
                        </a>
                        <button type="submit"
                            class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition duration-200 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Update Question
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-6 bg-white rounded-xl shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Editing Guidelines</h3>
            <ul class="space-y-2 text-gray-600">
                <li class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Ensure your question is clear and specific
                </li>
                <li class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Provide relevant information and examples
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
