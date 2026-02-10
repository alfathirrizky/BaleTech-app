<nav x-data="{ open: false }" class="fixed top-8 left-1/2 -translate-x-1/2 z-50 w-[95%] md:w-auto">
    <div class="backdrop-blur-md bg-white/30 border border-white/40 shadow-md rounded-2xl md:rounded-full px-4 md:px-8 py-3 flex items-center justify-between md:gap-10 transition-all duration-300 hover:bg-white/40">
        <div class="flex items-center gap-2 font-bold text-blue-400">
            <img src="{{ asset('icons/logo.jpeg') }}" alt="BaleTech Logo" class="h-8 w-8 rounded-full">
            <span class="hidden md:inline">{{ $brand }}</span>
        </div>
        <ul class="hidden md:flex gap-6 text-sm font-semibold text-gray-700">
            <li><a href="/" class="hover:text-blue-600 transition">Home</a></li>
            <li><a href="/about" class="hover:text-blue-600 transition">About</a></li>
            <li><a href="/contact" class="hover:text-blue-600 transition">Contact</a></li>
        </ul>
        <div class="hidden md:flex gap-3 items-center text-sm font-semibold">
            <a href="/login" class="text-blue-600 hover:underline">Login</a>
            <a href="/register"
                class="px-4 py-1.5 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition shadow">
                Register
            </a>
        </div>
        {{-- Mobile Hamburger --}}
        <button @click="open = !open" class="md:hidden text-gray-700 focus:outline-none" aria-label="Toggle Menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
    <div x-show="open" x-transition @click.outside="open = false"
        class="md:hidden mt-3 backdrop-blur-md bg-white/40 border border-white/40 shadow-lg rounded-2xl p-4">
        <ul class="flex flex-col gap-3 text-sm font-semibold text-gray-700">
            <li><a href="/" class="block hover:text-blue-600">Home</a></li>
            <li><a href="/about" class="block hover:text-blue-600">About</a></li>
            <li><a href="/contact" class="block hover:text-blue-600">Contact</a></li>
        </ul>
        <div class="mt-4 flex flex-col gap-2 text-sm font-semibold">
            <a href="/login" class="text-blue-600 hover:underline">Login</a>
            <a href="/register"
                class="text-center px-4 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition shadow">
                Register
            </a>
        </div>
    </div>
</nav>
