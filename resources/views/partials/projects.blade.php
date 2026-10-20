
<!-- PROJECTS -->
<section id="projects" class="py-24 border-t border-white/5 bg-slate-900/25">
    <div class="max-w-6xl mx-auto px-5 sm:px-6">

        <!-- SECTION HEADER -->
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

            <!-- PROJECT FILTERS -->
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

        <!-- PROJECT GRID -->
        <div id="projectGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

            @if(isset($projects) && count($projects) > 0)

                <!-- PROJECTS FROM LARAVEL -->
                @foreach($projects as $project)

                    <article class="card-hover project-item group rounded-2xl overflow-hidden
                                    border border-slate-800 bg-slate-900/70"
                             data-category="{{ $project->category ?? 'UI/UX Design' }}">

                        <div class="h-52 overflow-hidden bg-slate-800">
                            <img src="{{ $project->image_url ?? 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=900&q=85' }}"
                                 alt="{{ $project->title ?? 'Project' }}"
                                 loading="lazy"
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

                <!-- DEMO PROJECTS -->
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
                                 loading="lazy"
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

                            <span class="inline-flex items-center gap-2 mt-5
                                         text-sm font-semibold text-slate-600">
                                Detail segera ditambahkan
                            </span>

                        </div>
                    </article>

                @endforeach

            @endif

        </div>

        <!-- EMPTY STATE -->
        <div id="emptyProjects" class="hidden text-center py-16 text-slate-500">
            <i class="fa-solid fa-folder-open text-3xl mb-4"></i>
            <p>Tidak ada proyek pada kategori ini.</p>
        </div>

    </div>
</section>
