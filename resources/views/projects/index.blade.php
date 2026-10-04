<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Aca - Digital Art, Visual Design, UI/UX & Creative Technology">
    <title>Portfolio — Aca | Art, Design & Technology</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    boxShadow: {
                        glow: '0 0 60px rgba(99,102,241,.16)',
                    }
                }
            }
        }
    </script>

    <style>
        ::selection {
            background: #6366f1;
            color: white;
        }

        .gradient-text {
            background: linear-gradient(135deg, #60a5fa, #818cf8, #c084fc, #f0abfc);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .grid-pattern {
            background-image:
                linear-gradient(rgba(148, 163, 184, .055) 1px, transparent 1px),
                linear-gradient(90deg, rgba(148, 163, 184, .055) 1px, transparent 1px);
            background-size: 42px 42px;
        }

        .card-hover {
            transition:
                transform .3s ease,
                border-color .3s ease,
                box-shadow .3s ease;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, .25);
        }
    </style>
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased">

    <!-- NAVBAR -->
    <header class="fixed top-0 left-0 right-0 z-50 border-b border-white/5 bg-slate-950/80 backdrop-blur-xl">
        <div class="max-w-6xl mx-auto px-5 sm:px-6 h-20 flex items-center justify-between">

            <a href="#home" class="text-xl font-extrabold tracking-tight">
                ACA<span class="text-indigo-400">.</span>
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
                    aria-label="Buka menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

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


    <main id="home">

        <!-- HERO -->
        <section id="about" class="relative min-h-screen flex items-center overflow-hidden pt-28 pb-16">
            <div class="absolute inset-0 grid-pattern pointer-events-none"></div>
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-indigo-600/15 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-fuchsia-600/10 rounded-full blur-3xl"></div>

            <div class="relative max-w-6xl mx-auto px-5 sm:px-6 w-full grid lg:grid-cols-[1.1fr_.9fr] gap-14 items-center">

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

                    <div class="mt-10 flex flex-wrap justify-center lg:justify-start gap-x-7 gap-y-3 text-xs text-slate-500">
                        <span>
                            <i class="fa-solid fa-location-dot mr-2 text-indigo-400"></i>Indonesia
                        </span>
                        <span>
                            <i class="fa-solid fa-graduation-cap mr-2 text-indigo-400"></i>Mahasiswa Informatika
                        </span>
                        <span>
                            <i class="fa-solid fa-palette mr-2 text-indigo-400"></i>Art · Design · Technology
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


        <!-- SKILLS -->
        <section id="skills" class="py-24 border-y border-white/5 bg-slate-900/35">
            <div class="max-w-6xl mx-auto px-5 sm:px-6">

                <div class="max-w-2xl mb-12">
                    <p class="text-indigo-400 text-xs font-bold uppercase tracking-[.2em]">
                        Creative Skills
                    </p>

                    <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight">
                        Keahlian utama
                    </h2>

                    <p class="mt-4 text-slate-400 leading-relaxed">
                        Hal yang paling saya nikmati: membuat visual, menyusun cerita dan tampilan,
                        lalu memakai teknologi untuk menghidupkan ide tersebut.
                    </p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

                    @php
                        $skills = [
                            [
                                'icon' => 'fa-solid fa-palette',
                                'color' => 'fuchsia',
                                'title' => 'Digital Art',
                                'desc' => 'Digital Illustration, Chibi, Character Design, Coloring'
                            ],
                            [
                                'icon' => 'fa-solid fa-pen-nib',
                                'color' => 'pink',
                                'title' => 'Visual Design',
                                'desc' => 'Composition, Color, Layout, Visual Storytelling'
                            ],
                            [
                                'icon' => 'fa-brands fa-figma',
                                'color' => 'indigo',
                                'title' => 'UI/UX Design',
                                'desc' => 'Figma, Wireframing, Mobile UI, Prototyping'
                            ],
                            [
                                'icon' => 'fa-solid fa-wand-magic-sparkles',
                                'color' => 'cyan',
                                'title' => 'Creative Technology',
                                'desc' => 'Game UI, Interactive Storytelling, Flutter & Web dasar'
                            ],
                        ];
                    @endphp

                    @foreach($skills as $skill)
                        <div class="group p-6 rounded-2xl border border-slate-800
                                    bg-slate-900/70 hover:border-indigo-500/30
                                    hover:-translate-y-1 transition duration-300">

                            <div class="w-12 h-12 rounded-xl
                                        bg-{{ $skill['color'] }}-500/10
                                        text-{{ $skill['color'] }}-400
                                        flex items-center justify-center text-xl
                                        group-hover:scale-110 transition">

                                <i class="{{ $skill['icon'] }}"></i>
                            </div>

                            <h3 class="mt-5 font-bold text-lg">
                                {{ $skill['title'] }}
                            </h3>

                            <p class="mt-2 text-sm leading-relaxed text-slate-500">
                                {{ $skill['desc'] }}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>


        <!-- =========================
             KARYA SENI
        ========================== -->
        <section id="artworks" class="py-24">
            <div class="max-w-6xl mx-auto px-5 sm:px-6">

                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
                    <div>
                        <p class="text-fuchsia-400 text-xs font-bold uppercase tracking-[.2em]">
                            Selected Artworks
                        </p>

                        <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight">
                            Karya
                        </h2>

                        <p class="mt-4 text-slate-400 max-w-xl leading-relaxed">
                            Kumpulan ilustrasi dan karya visual yang saya buat untuk mengeksplorasi
                            karakter, warna, cerita, dan gaya visual.
                        </p>
                    </div>

                    <!-- GANTI LINK INI DENGAN INSTAGRAM ACA -->
                    <a href="#"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 self-start lg:self-auto
                              px-5 py-3 rounded-xl border border-pink-500/20
                              bg-pink-500/5 text-pink-300 hover:bg-pink-500/10
                              text-sm font-semibold transition">
                        <i class="fa-brands fa-instagram"></i>
                        Lihat Instagram
                    </a>
                </div>


                @php
                    /*
                    |--------------------------------------------------------------------------
                    | KARYA INSTAGRAM
                    |--------------------------------------------------------------------------
                    | Simpan gambar di:
                    | public/images/artworks/
                    |
                    | Contoh:
                    | public/images/artworks/karya-1.jpg
                    | public/images/artworks/karya-2.jpg
                    |
                    | Untuk setiap karya, ganti:
                    | - image
                    | - title
                    | - category
                    | - description
                    | - instagram_url
                    |
                    */
                    $artworks = [
                        [
                            'image' => 'karya-1.jpg',
                            'title' => 'Digital Illustration',
                            'category' => 'Digital Art',
                            'description' => 'Ilustrasi digital dengan fokus pada karakter dan warna.',
                            'instagram_url' => '#'
                        ],
                        [
                            'image' => 'karya-2.jpg',
                            'title' => 'Character Illustration',
                            'category' => 'Character Design',
                            'description' => 'Eksplorasi desain karakter dan ekspresi visual.',
                            'instagram_url' => '#'
                        ],
                        [
                            'image' => 'karya-3.jpg',
                            'title' => 'Visual Story',
                            'category' => 'Visual Storytelling',
                            'description' => 'Karya visual yang dibuat untuk menyampaikan suasana dan cerita.',
                            'instagram_url' => '#'
                        ],
                        [
                            'image' => 'karya-4.jpg',
                            'title' => 'Chibi Illustration',
                            'category' => 'Digital Art',
                            'description' => 'Eksplorasi ilustrasi bergaya chibi.',
                            'instagram_url' => '#'
                        ],
                        [
                            'image' => 'karya-5.jpg',
                            'title' => 'Color Study',
                            'category' => 'Visual Design',
                            'description' => 'Eksplorasi warna, komposisi, dan mood.',
                            'instagram_url' => '#'
                        ],
                        [
                            'image' => 'karya-6.jpg',
                            'title' => 'Creative Artwork',
                            'category' => 'Digital Art',
                            'description' => 'Eksperimen visual dan pengembangan gaya pribadi.',
                            'instagram_url' => '#'
                        ],
                    ];
                @endphp


                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach($artworks as $art)
                        <article class="card-hover group rounded-2xl overflow-hidden
                                        border border-slate-800 bg-slate-900/70">

                            <a href="{{ $art['instagram_url'] }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="block">

                                <div class="aspect-square overflow-hidden bg-slate-900">
                                    <img src="{{ asset('images/artworks/' . $art['image']) }}"
                                         alt="{{ $art['title'] }}"
                                         class="w-full h-full object-cover
                                                group-hover:scale-105 transition duration-500">
                                </div>
                            </a>

                            <div class="p-5">
                                <span class="text-[11px] font-bold uppercase tracking-widest text-fuchsia-400">
                                    {{ $art['category'] }}
                                </span>

                                <h3 class="mt-2 text-lg font-bold">
                                    {{ $art['title'] }}
                                </h3>

                                <p class="mt-2 text-sm leading-relaxed text-slate-500">
                                    {{ $art['description'] }}
                                </p>

                                <a href="{{ $art['instagram_url'] }}"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center gap-2 mt-4
                                          text-sm font-semibold text-pink-300 hover:text-pink-200">
                                    Lihat di Instagram
                                    <i class="fa-brands fa-instagram text-xs"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach

                </div>


                <div class="mt-10 text-center">
                    <!-- GANTI LINK INI DENGAN INSTAGRAM ACA -->
                    <a href="#"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 text-sm font-semibold text-slate-400 hover:text-white transition">
                        Lihat lebih banyak karya di Instagram
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                    </a>
                </div>

            </div>
        </section>


        <!-- CREATIVE STATEMENT -->
        <section class="pb-24">
            <div class="max-w-6xl mx-auto px-5 sm:px-6">

                <div class="rounded-3xl border border-white/10
                            bg-gradient-to-br from-indigo-500/10 via-slate-900/80 to-fuchsia-500/10
                            p-7 sm:p-10">

                    <div class="max-w-3xl">
                        <p class="text-xs font-bold uppercase tracking-[.2em] text-fuchsia-300">
                            Creative Direction
                        </p>

                        <h2 class="mt-3 text-2xl sm:text-3xl font-bold">
                            Seni adalah titik awalnya. Teknologi adalah medianya.
                        </h2>

                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-slate-400">
                            Saya ingin membuat karya digital yang tidak hanya terlihat menarik,
                            tetapi juga punya cerita, karakter, dan pengalaman yang terasa personal.
                        </p>
                    </div>
                </div>

            </div>
        </section>


        <!-- =========================
             PROYEK INFORMATIKA
        ========================== -->
        <section id="projects" class="py-24 border-t border-white/5 bg-slate-900/25">
            <div class="max-w-6xl mx-auto px-5 sm:px-6">

                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
                    <div>
                        <p class="text-cyan-400 text-xs font-bold uppercase tracking-[.2em]">
                            Selected Projects
                        </p>

                        <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight">
                            Proyek
                        </h2>

                        <p class="mt-4 text-slate-400 max-w-xl leading-relaxed">
                            Proyek perkuliahan dan pengembangan aplikasi yang menunjukkan
                            bagaimana saya menggunakan teknologi untuk mewujudkan ide.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2" id="projectFilters">
                        <button data-filter="all"
                                class="filter-btn active px-4 py-2 rounded-lg text-xs font-semibold
                                       bg-indigo-600 text-white">
                            Semua
                        </button>

                        <button data-filter="UI/UX Design"
                                class="filter-btn px-4 py-2 rounded-lg text-xs font-semibold
                                       bg-slate-900 text-slate-400 hover:text-white
                                       border border-slate-800">
                            UI/UX
                        </button>

                        <button data-filter="Web & System Design"
                                class="filter-btn px-4 py-2 rounded-lg text-xs font-semibold
                                       bg-slate-900 text-slate-400 hover:text-white
                                       border border-slate-800">
                            Web
                        </button>

                        <button data-filter="Game Design & HUD"
                                class="filter-btn px-4 py-2 rounded-lg text-xs font-semibold
                                       bg-slate-900 text-slate-400 hover:text-white
                                       border border-slate-800">
                            Game
                        </button>
                    </div>
                </div>


                <div id="projectGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                    @if(isset($projects) && count($projects) > 0)

                        @foreach($projects as $project)
                            <article class="card-hover project-item group rounded-2xl overflow-hidden
                                            border border-slate-800 bg-slate-900/70"
                                     data-category="{{ $project->category ?? 'UI/UX Design' }}">

                                <div class="h-52 overflow-hidden bg-slate-800">
                                    <img src="{{ $project->image_url ?? 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=900&q=85' }}"
                                         alt="{{ $project->title ?? 'Project' }}"
                                         class="w-full h-full object-cover
                                                group-hover:scale-105 transition duration-500">
                                </div>

                                <div class="p-6">

                                    <span class="text-[11px] font-bold uppercase tracking-widest text-cyan-400">
                                        {{ $project->category ?? 'UI/UX Design' }}
                                    </span>

                                    <h3 class="mt-3 text-xl font-bold group-hover:text-cyan-300 transition">
                                        {{ $project->title ?? 'Judul Proyek' }}
                                    </h3>

                                    <p class="mt-3 text-sm leading-relaxed text-slate-500 line-clamp-3">
                                        {{ $project->description ?? 'Deskripsi singkat proyek.' }}
                                    </p>

                                    @if(!empty($project->project_url))
                                        <a href="{{ $project->project_url }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="inline-flex items-center gap-2 mt-5
                                                  text-sm font-semibold text-cyan-400 hover:text-cyan-300">
                                            Lihat proyek
                                            <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                                        </a>
                                    @endif

                                </div>
                            </article>
                        @endforeach

                    @else

                        @php
                            $demoProjects = [
                                [
                                    'category' => 'UI/UX Design',
                                    'title' => 'Waste Management App',
                                    'desc' => 'Perancangan aplikasi pemilahan sampah dengan guest mode dan kategorisasi informasi.',
                                    'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=900&q=85'
                                ],
                                [
                                    'category' => 'Web & System Design',
                                    'title' => 'TripDesa Information System',
                                    'desc' => 'Konsep platform informasi desa wisata dan sistem pelaporan warga terpadu.',
                                    'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=85'
                                ],
                                [
                                    'category' => 'Game Design & HUD',
                                    'title' => 'Life Simulation HUD',
                                    'desc' => 'Eksplorasi GDD, rancangan HUD, alur gameplay, dan state diagram mini-game.',
                                    'image' => 'https://images.unsplash.com/photo-1522542550221-31fd19575a2d?auto=format&fit=crop&w=900&q=85'
                                ],
                            ];
                        @endphp

                        @foreach($demoProjects as $project)
                            <article class="card-hover project-item group rounded-2xl overflow-hidden
                                            border border-slate-800 bg-slate-900/70"
                                     data-category="{{ $project['category'] }}">

                                <div class="h-52 overflow-hidden bg-slate-800">
                                    <img src="{{ $project['image'] }}"
                                         alt="{{ $project['title'] }}"
                                         class="w-full h-full object-cover
                                                group-hover:scale-105 transition duration-500">
                                </div>

                                <div class="p-6">
                                    <span class="text-[11px] font-bold uppercase tracking-widest text-cyan-400">
                                        {{ $project['category'] }}
                                    </span>

                                    <h3 class="mt-3 text-xl font-bold group-hover:text-cyan-300 transition">
                                        {{ $project['title'] }}
                                    </h3>

                                    <p class="mt-3 text-sm leading-relaxed text-slate-500">
                                        {{ $project['desc'] }}
                                    </p>

                                    <span class="inline-flex items-center gap-2 mt-5 text-sm font-semibold text-slate-600">
                                        Detail segera ditambahkan
                                    </span>
                                </div>

                            </article>
                        @endforeach

                    @endif

                </div>


                <div id="emptyProjects"
                     class="hidden text-center py-16 text-slate-500">
                    <i class="fa-solid fa-folder-open text-3xl mb-4"></i>
                    <p>Tidak ada proyek pada kategori ini.</p>
                </div>

            </div>
        </section>


        <!-- CONTACT -->
        <section id="contact" class="py-24 border-t border-white/5">
            <div class="max-w-6xl mx-auto px-5 sm:px-6">

                <div class="grid lg:grid-cols-2 gap-12 items-start">

                    <div>
                        <p class="text-indigo-400 text-xs font-bold uppercase tracking-[.2em]">
                            Contact
                        </p>

                        <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight">
                            Mari membuat sesuatu.
                        </h2>

                        <p class="mt-5 text-slate-400 leading-relaxed max-w-lg">
                            Terbuka untuk kolaborasi seputar ilustrasi digital, visual design,
                            UI/UX, game, maupun proyek kreatif berbasis teknologi.
                        </p>

                        <div class="mt-8 space-y-4">

                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-xl bg-indigo-500/10
                                            text-indigo-400 flex items-center justify-center">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>

                                <div>
                                    <p class="text-xs text-slate-500">Email</p>
                                    <p class="text-sm font-medium text-slate-200">
                                        contact@portfolio.com
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-xl bg-pink-500/10
                                            text-pink-400 flex items-center justify-center">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>

                                <div>
                                    <p class="text-xs text-slate-500">Instagram</p>
                                    <!-- GANTI USERNAME -->
                                    <p class="text-sm font-medium text-slate-200">
                                        @username
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="rounded-2xl border border-slate-800
                                bg-slate-900/80 p-6 sm:p-8">

                        <form action="#" method="POST" class="space-y-5">
                            @csrf

                            <div>
                                <label for="name"
                                       class="block text-xs font-semibold text-slate-300 mb-2">
                                    Nama
                                </label>

                                <input id="name"
                                       name="name"
                                       type="text"
                                       required
                                       placeholder="Nama kamu"
                                       class="w-full px-4 py-3 rounded-xl
                                              bg-slate-950 border border-slate-800
                                              focus:border-indigo-500 focus:ring-2
                                              focus:ring-indigo-500/10 outline-none
                                              text-sm text-slate-200
                                              placeholder:text-slate-600 transition">
                            </div>

                            <div>
                                <label for="email"
                                       class="block text-xs font-semibold text-slate-300 mb-2">
                                    Email
                                </label>

                                <input id="email"
                                       name="email"
                                       type="email"
                                       required
                                       placeholder="nama@email.com"
                                       class="w-full px-4 py-3 rounded-xl
                                              bg-slate-950 border border-slate-800
                                              focus:border-indigo-500 focus:ring-2
                                              focus:ring-indigo-500/10 outline-none
                                              text-sm text-slate-200
                                              placeholder:text-slate-600 transition">
                            </div>

                            <div>
                                <label for="message"
                                       class="block text-xs font-semibold text-slate-300 mb-2">
                                    Pesan
                                </label>

                                <textarea id="message"
                                          name="message"
                                          rows="5"
                                          required
                                          placeholder="Ceritakan kebutuhan atau pesan kamu..."
                                          class="w-full px-4 py-3 rounded-xl
                                                 bg-slate-950 border border-slate-800
                                                 focus:border-indigo-500 focus:ring-2
                                                 focus:ring-indigo-500/10 outline-none
                                                 text-sm text-slate-200
                                                 placeholder:text-slate-600
                                                 transition resize-none"></textarea>
                            </div>

                            <button type="submit"
                                    class="w-full py-3 rounded-xl bg-indigo-600
                                           hover:bg-indigo-500 font-semibold text-sm
                                           transition shadow-lg shadow-indigo-600/20">
                                Kirim Pesan
                                <i class="fa-solid fa-paper-plane ml-2 text-xs"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </main>


    <!-- FOOTER -->
    <footer class="border-t border-white/5 py-8">
        <div class="max-w-6xl mx-auto px-5 sm:px-6
                    flex flex-col sm:flex-row items-center
                    justify-between gap-3 text-xs text-slate-600">

            <p>&copy; {{ date('Y') }} Aca. All rights reserved.</p>

            <p>
                Art · Design · Technology
            </p>
        </div>
    </footer>


    <script>
        // ============================
        // MOBILE MENU
        // ============================

        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });


        // ============================
        // PROJECT FILTER
        // ============================

        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectItems = document.querySelectorAll('.project-item');
        const emptyProjects = document.getElementById('emptyProjects');

        filterButtons.forEach(button => {

            button.addEventListener('click', () => {

                const filter = button.dataset.filter;
                let visible = 0;

                filterButtons.forEach(btn => {
                    btn.classList.remove(
                        'active',
                        'bg-indigo-600',
                        'text-white'
                    );

                    btn.classList.add(
                        'bg-slate-900',
                        'text-slate-400',
                        'border',
                        'border-slate-800'
                    );
                });

                button.classList.add(
                    'active',
                    'bg-indigo-600',
                    'text-white'
                );

                button.classList.remove(
                    'bg-slate-900',
                    'text-slate-400',
                    'border',
                    'border-slate-800'
                );


                projectItems.forEach(item => {

                    const category = item.dataset.category || '';

                    const show =
                        filter === 'all' ||
                        category === filter;

                    item.style.display = show ? '' : 'none';

                    if (show) {
                        visible++;
                    }
                });

                emptyProjects.classList.toggle(
                    'hidden',
                    visible > 0
                );
            });
        });
    </script>

</body>
</html>
