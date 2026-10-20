
<!-- HERO -->
<section id="about" class="relative min-h-screen flex items-center overflow-hidden pt-28 pb-16">

    <!-- Background Grid -->
    <div class="absolute inset-0 grid-pattern pointer-events-none"></div>

    <!-- Background Glow -->
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-indigo-600/15 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-fuchsia-600/10 rounded-full blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-5 sm:px-6 w-full grid lg:grid-cols-[1.1fr_.9fr] gap-14 items-center">

        <!-- HERO TEXT -->
        <div class="text-center lg:text-left">

            <div class="inline-flex items-center gap-2 px-3.5 py-2 rounded-full
                        bg-indigo-500/10 border border-indigo-500/20
                        text-indigo-300 text-xs font-semibold mb-6">

                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>

                Digital Artist · Visual Designer · Informatics Student
            </div>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-[1.08] tracking-tight">
                Menggabungkan seni,
                <span class="gradient-text">desain, dan teknologi.</span>
            </h1>

            <p class="mt-6 text-slate-400 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                Saya menikmati membuat ilustrasi digital, merancang visual, dan mengembangkan
                ide kreatif menjadi karya digital yang bisa digunakan dalam UI, aplikasi, maupun game.
            </p>

            <!-- BUTTON -->
            <div class="mt-8 flex flex-wrap gap-3 justify-center lg:justify-start">

                <a href="#artworks"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl
                          bg-indigo-600 hover:bg-indigo-500 font-semibold text-sm
                          transition shadow-lg shadow-indigo-600/20">

                    Lihat Karya
                    <i class="fa-solid fa-arrow-down text-xs"></i>
                </a>

                <a href="#projects"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-xl
                          border border-slate-700 hover:border-slate-600 hover:bg-slate-900
                          font-semibold text-sm text-slate-300 transition">

                    Lihat Proyek
                </a>

            </div>

            <!-- INFORMATION -->
            <div class="mt-10 flex flex-wrap justify-center lg:justify-start gap-x-7 gap-y-3 text-xs text-slate-500">

                <span>
                    <i class="fa-solid fa-location-dot mr-2 text-indigo-400"></i>
                    Indonesia
                </span>

                <span>
                    <i class="fa-solid fa-graduation-cap mr-2 text-indigo-400"></i>
                    Mahasiswa Informatika
                </span>

                <span>
                    <i class="fa-solid fa-palette mr-2 text-indigo-400"></i>
                    Art · Design · Technology
                </span>

            </div>
        </div>

        <!-- PROFILE PHOTO -->
        <div class="relative flex justify-center">

            <div class="absolute w-72 h-72 sm:w-80 sm:h-80 rounded-full bg-indigo-600/20 blur-3xl"></div>

            <div class="relative w-64 h-72 sm:w-80 sm:h-[28rem]
                        rounded-[2rem] border border-white/10
                        bg-white/[.04] backdrop-blur-xl p-3 shadow-glow">

                <div class="w-full h-full rounded-[1.5rem] overflow-hidden bg-slate-900">

                    <img src="{{ asset('images/portofolio.jpeg') }}"
                         alt="Foto profil Aca"
                         class="w-full h-full object-cover">

                </div>

                <!-- LABEL FOTO -->
                <div class="absolute -bottom-5 -left-5 px-4 py-3 rounded-2xl
                            border border-white/10 bg-slate-900/90 backdrop-blur-xl shadow-xl">

                    <p class="text-[10px] uppercase tracking-widest text-slate-500">
                        Creative Focus
                    </p>

                    <p class="text-sm font-bold mt-1">
                        Digital Art & Visual Design
                    </p>

                </div>

            </div>
        </div>

    </div>
</section>
