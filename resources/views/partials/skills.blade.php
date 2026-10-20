
<!-- SKILLS -->
<section id="skills" class="py-24 border-y border-white/5 bg-slate-900/35">
    <div class="max-w-6xl mx-auto px-5 sm:px-6">

        <!-- SECTION HEADER -->
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

        <!-- DATA SKILLS -->
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

        <!-- SKILLS GRID -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">

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
