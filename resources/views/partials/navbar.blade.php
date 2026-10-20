
<!-- NAVBAR -->
<header class="fixed top-0 left-0 right-0 z-50 border-b border-white/5 bg-slate-950/80 backdrop-blur-xl">
    <div class="max-w-6xl mx-auto px-5 sm:px-6 h-20 flex items-center justify-between">

        <a href="#home" class="text-xl font-extrabold tracking-tight">
            Salsabila<span class="text-indigo-400">.</span>
        </a>

        <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-400">
            <a href="#about" class="hover:text-white transition">Tentang</a>
            <a href="#skills" class="hover:text-white transition">Keahlian</a>
            <a href="#artworks" class="hover:text-white transition">Karya</a>
            <a href="#projects" class="hover:text-white transition">Proyek</a>
            <a href="#contact" class="hover:text-white transition">Kontak</a>
        </nav>

        <a href="#contact"
           class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-sm font-semibold transition shadow-lg shadow-indigo-600/20">
            Hubungi Saya
            <i class="fa-solid fa-arrow-right text-xs"></i>
        </a>

        <button id="menuButton"
                class="md:hidden w-10 h-10 rounded-xl border border-slate-800 text-slate-300 hover:bg-slate-900"
                aria-label="Buka menu"
                aria-expanded="false"
                aria-controls="mobileMenu">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden md:hidden border-t border-white/5 bg-slate-950/95">
        <nav class="max-w-6xl mx-auto px-5 py-4 flex flex-col gap-1 text-sm">
            <a href="#about" class="mobile-link px-4 py-3 rounded-lg hover:bg-slate-900">Tentang</a>
            <a href="#skills" class="mobile-link px-4 py-3 rounded-lg hover:bg-slate-900">Keahlian</a>
            <a href="#artworks" class="mobile-link px-4 py-3 rounded-lg hover:bg-slate-900">Karya</a>
            <a href="#projects" class="mobile-link px-4 py-3 rounded-lg hover:bg-slate-900">Proyek</a>
            <a href="#contact" class="mobile-link px-4 py-3 rounded-lg hover:bg-slate-900">Kontak</a>
        </nav>
    </div>
</header>
