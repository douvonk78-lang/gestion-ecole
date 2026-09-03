<div id="campus" class="bg-gray-50 scroll-mt-20">
    <div class="max-w-6xl mx-auto px-6 py-24">

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

        <div class="grid md:grid-cols-2 gap-6">

            <div class="group bg-white border border-gray-200 hover:border-gray-300 rounded-2xl overflow-hidden transition-colors duration-200">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://picsum.photos/id/1031/800/450" alt="Campus de Lomé" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Campus de Lomé</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">
                        Situé au quartier Bè, non loin du grand marché, notre campus historique accueille le premier et le second cycle.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-gray-900 group-hover:gap-2.5 transition-all duration-200">
                        En savoir plus
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="group bg-white border border-gray-200 hover:border-gray-300 rounded-2xl overflow-hidden transition-colors duration-200">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://picsum.photos/id/1039/800/450" alt="Campus de Kpalimé" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Campus de Kpalimé</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">
                        Situé à Kpégolonou, non loin du Palais de Justice, notre campus offre un cadre calme et verdoyant, propice aux études.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-gray-900 group-hover:gap-2.5 transition-all duration-200">
                        En