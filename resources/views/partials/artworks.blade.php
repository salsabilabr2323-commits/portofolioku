<!-- ARTWORKS -->
<section id="artworks" class="py-24">
    <div class="max-w-6xl mx-auto px-5 sm:px-6">

        <!-- SECTION HEADER -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
            <div>
                <p class="text-fuchsia-400 text-xs font-bold uppercase tracking-[.2em]">
                    Selected Artworks
                </p>

                <h2 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight">
                    Karya
                </h2>

                <p class="mt-4 text-slate-400 max-w-xl leading-relaxed">
                    Kumpulan ilustrasi dan karya visual yang saya buat
                    untuk mengeksplorasi karakter, warna, cerita,
                    dan gaya visual.
                </p>
            </div>

            <a href="https://www.instagram.com/"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 self-start px-5 py-3 rounded-xl
                      border border-pink-500/20 bg-pink-500/5 text-pink-300
                      hover:bg-pink-500/10 text-sm font-semibold transition">
                <i class="fa-brands fa-instagram"></i>
                Lihat Instagram
            </a>
        </div>

        <!-- DATA ARTWORKS -->
        @php
        $artworks = [
        [
        'title' => 'Visual Story',
        'category' => 'Digital Art',
        'description' => 'Animasi ilustrasi bergaya anime yang menggabungkan ekspresi karakter dan cerita singkat dalam bentuk visual kreatif',
        'type' => 'video',
        'file' => 'video1.mp4',
        'instagram_url' => 'https://www.instagram.com/reel/DN0dNAyQtvi/?utm_source=ig_web_copy_link&srtk=MzRlODBiNWFlZA=='
        ],
        [
        'title' => 'Visual Story',
        'category' => 'Character Design',
        'description' => 'Animasi ilustrasi bergaya anime yang menggabungkan ekspresi karakter dan cerita singkat dalam bentuk visual kreatif.',
        'type' => 'video',
        'file' => 'video2.mp4',
        'instagram_url' => 'https://www.instagram.com/reel/DOdgdhygd3N/?utm_source=ig_web_copy_link&cplk=MzRlODBiNWFlZA==&srtk=MzRlODBiNWFlZA=='
        ],
        [
        'title' => 'Visual Story',
        'category' => 'Visual Storytelling',
        'description' => 'Animasi ilustrasi bergaya anime yang menggabungkan ekspresi karakter dan cerita singkat dalam bentuk visual kreatif.',
        'type' => 'video',
        'file' => 'video3.mp4',
        'instagram_url' => 'https://www.instagram.com/reel/DYmqCgDBq-M/?utm_source=ig_web_copy_link&srtk=MzRlODBiNWFlZA=='
        ],
        [
        'title' => 'Chibi Illustration',
        'category' => 'Digital Art',
        'description' => 'Eksplorasi ilustrasi bergaya chibi.',
        'type' => 'image',
        'file' => 'karya1.png',
        'instagram_url' => 'https://www.instagram.com/p/DBA7fs0TArn/?utm_source=ig_web_copy_link&cplk=MzRlODBiNWFlZA==&srtk=MzRlODBiNWFlZA=='
        ],
        [
        'title' => 'Color Study',
        'category' => 'Visual Design',
        'description' => 'Eksplorasi warna, komposisi, dan mood.',
        'type' => 'image',
        'file' => 'karya2.png',
        'instagram_url' => 'https://www.instagram.com/p/DQrCFHjAelz/?utm_source=ig_web_copy_link&cplk=MzRlODBiNWFlZA==&srtk=MzRlODBiNWFlZA=='
        ],
        [
        'title' => 'Creative Artwork',
        'category' => 'Digital Art',
        'description' => 'Eksperimen visual dan pengembangan gaya pribadi.',
        'type' => 'image',
        'file' => 'karya3.png',
        'instagram_url' => 'https://www.instagram.com/p/C75sXxgyjfR/?utm_source=ig_web_copy_link&vrfl=MzRlODBiNWFlZA==&srtk=MzRlODBiNWFlZA=='
        ],
        ];
        @endphp

        <!-- ARTWORKS GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">

            @foreach($artworks as $art)
            <article class="card-hover min-w-0 rounded-2xl overflow-hidden
                                border border-slate-800 bg-slate-900/70 flex flex-col">

                <!-- MEDIA PREVIEW -->
                <div class="aspect-[4/5] w-full overflow-hidden bg-slate-950">
                    @if($art['type'] === 'video')

                    <video
                        class="w-full h-full object-cover"
                        autoplay
                        muted
                        playsinline
                        preload="metadata"
                        ontimeupdate="if (this.currentTime >= 5) {
        this.pause();
        this.currentTime = 5;
    }">
                        <source
                            src="{{ asset('videos/' . $art['file']) }}"
                            type="video/mp4">
                        Browser kamu tidak mendukung pemutaran video.
                    </video>

                    @else
                    <a href="{{ $art['instagram_url'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="block w-full h-full">
                        <img
                            src="{{ asset('artworks/' . $art['file']) }}"
                            alt="{{ $art['title'] }}"
                            loading="lazy"
                            class="w-full h-full object-cover transition duration-500 hover:scale-105">
                    </a>
                    @endif
                </div>

                <!-- ARTWORK INFORMATION -->
                <div class="p-5 flex flex-col flex-1">
                    <span class="text-[11px] font-bold uppercase tracking-widest text-fuchsia-400">
                        {{ $art['category'] }}
                    </span>

                    <h3 class="mt-2 text-lg font-bold">
                        {{ $art['title'] }}
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-slate-400 flex-1">
                        {{ $art['description'] }}
                    </p>

                    <a href="{{ $art['instagram_url'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 mt-4 text-sm font-semibold
                                  text-pink-300 hover:text-pink-200">
                        Lihat postingan
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                    </a>
                </div>
            </article>
            @endforeach

        </div>
    </div>
</section>