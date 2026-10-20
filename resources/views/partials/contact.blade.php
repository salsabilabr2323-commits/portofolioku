<!-- CONTACT -->
<section id="contact" class="py-24 border-t border-white/5">
    <div class="max-w-6xl mx-auto px-5 sm:px-6">

        <div class="grid lg:grid-cols-2 gap-12 items-start">

            <!-- CONTACT INFORMATION -->
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

                <!-- EMAIL -->
                <div class="mt-8 space-y-4">

                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-xl bg-indigo-500/10
                                    text-indigo-400 flex items-center justify-center">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>
                            <p class="text-xs text-slate-500">Email</p>
                            <p class="text-sm font-medium text-slate-200">
                                Salsabila_beatris_sarahmadani@teknokrat.ac.id
                            </p>
                        </div>
                    </div>

                    <!-- INSTAGRAM -->
                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-xl bg-pink-500/10
                                    text-pink-400 flex items-center justify-center">
                            <i class="fa-brands fa-instagram"></i>
                        </div>

                        <a href="https://www.instagram.com/archie.el?utm_source=ig_web_button_share_sheet&dlrf=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" class="block hover:opacity-80 transition">
                            <p class="text-xs text-slate-500">Instagram</p>
                            <p class="text-sm font-medium text-slate-200">
                                @archie.el
                            </p>
                        </a>
                    </div>

                </div>
            </div>

            <!-- CONTACT FORM -->
            <div class="rounded-2xl border border-slate-800
                        bg-slate-900/80 p-6 sm:p-8">

                <form action="#" method="POST" class="space-y-5">
                    @csrf

                    <!-- NAME -->
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

                    <!-- EMAIL -->
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

                    <!-- MESSAGE -->
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

                    <!-- SUBMIT BUTTON -->
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