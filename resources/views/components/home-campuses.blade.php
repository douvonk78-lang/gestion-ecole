<div id="campus" class="bg-gray-50 scroll-mt-20">
    <div class="max-w-6xl mx-auto px-6 py-24">

        {{-- En-tête de section --}}
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 text-xs font-medium text-gray-500 uppercase tracking-wider mb-4">
                <span class="w-6 h-px bg-gray-400"></span>
                Nos campus
                <span class="w-6 h-px bg-gray-400"></span>
            </div>
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-900 mb-4">
                Deux campus, une même exigence
            </h2>
            <p class="text-gray-500">
                Le Collège Protestant accueille ses élèves sur deux sites, à Lomé et à Kpalimé.
            </p>
        </div>

        {{-- Cartes campus --}}
        <div class="grid md:grid-cols-2 gap-6">

            {{-- Campus Lomé --}}
            <div class="group bg-white border border-gray-200 hover:border-gray-300 rounded-2xl overflow-hidden transition-colors duration-200">
                <div class="aspect-[16/9] bg-gray-100 flex items-center justify-center">
                    <div class="text-center text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <p class="text-sm">Image à ajouter</p>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Campus de Lomé
                    </h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">
                        [Description à compléter — présentez ce campus en 1 à 2 phrases]
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-gray-900 group-hover:gap-2.5 transition-all duration-200">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Campus Kpalimé --}}
            <div class="group bg-white border border-gray-200 hover:border-gray-300 rounded-2xl overflow-hidden transition-colors duration-200">
                <div class="aspect-[16/9] bg-gray-100 flex items-center justify-center">
                    <div class="text-center text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <p class="text-sm">Image à ajouter</p>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Campus de Kpalimé
                    </h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">
                        [Description à compléter — présentez ce campus en 1 à 2 phrases]
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-gray-900 group-hover:gap-2.5 transition-all duration-200">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>