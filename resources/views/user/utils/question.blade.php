 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Forum Pertanyaan</title>
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
                 <h1 class="text-3xl font-bold mb-2">Ajukan Pertanyaan</h1>
                 <p class="text-blue-100">Bagikan pertanyaan Anda dengan komunitas kami</p>
             </div>
             <div class="p-8">
                 <form action="{{ route('questions.store') }}" method="POST" class="space-y-6">
                     @csrf
                     <div class="space-y-2">
                         <label for="title" class="text-sm font-medium text-gray-700 flex items-center">
                             <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                             </svg>
                             Judul Pertanyaan
                         </label>
                         <input type="text" name="title" id="title"
                             class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20 transition duration-200"
                             placeholder="Masukkan judul pertanyaan Anda" required>
                     </div>

                     <div class="space-y-2">
                         <label for="category" class="text-sm font-medium text-gray-700 flex items-center">
                             <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                             </svg>
                             Kategori
                         </label>
                         <select name="category_id"
                             class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20 transition duration-200"
                             required>
                             @foreach ($categories as $category)
                                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                             @endforeach
                         </select>
                     </div>

                     <div class="space-y-2">
                         <label for="body" class="text-sm font-medium text-gray-700 flex items-center">
                             <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M4 6h16M4 12h16M4 18h16" />
                             </svg>
                             Detail Pertanyaan
                         </label>
                         <textarea name="body" id="body" rows="6"
                             class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary focus:ring-opacity-20 transition duration-200"
                             placeholder="Jelaskan pertanyaan Anda secara detail..." required></textarea>
                     </div>

                     <div class="flex items-center justify-between pt-4">
                         <a href="/forum"
                             class="text-gray-600 hover:text-primary transition duration-200 flex items-center">
                             <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                             </svg>
                             Kembali ke Forum
                         </a>
                         <button type="submit"
                             class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 transition duration-200 flex items-center">
                             <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                     d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                             </svg>
                             Kirim Pertanyaan
                         </button>
                     </div>
                 </form>
             </div>
         </div>

         <div class="mt-6 bg-white rounded-xl shadow-md p-6">
             <h3 class="text-lg font-semibold text-gray-800 mb-3">Panduan Bertanya</h3>
             <ul class="space-y-2 text-gray-600">
                 <li class="flex items-center">
                     <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                     </svg>
                     Pastikan pertanyaan Anda jelas dan spesifik
                 </li>
                 <li class="flex items-center">
                     <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                     </svg>
                     Berikan konteks yang cukup
                 </li>
             </ul>
         </div>
     </div>
 </body>

 </html>
