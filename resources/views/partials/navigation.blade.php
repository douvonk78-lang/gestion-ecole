<nav class="border-b border-gray-200 relative">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        <a href="{{ route('accueil') }}" class="text-lg font-semibold text-gray-900">
            Collège Protestant Kpalimé
        </a>

        <div class="hidden md:flex gap-6 text-sm text-gray-700">
            <a href="{{ route('accueil') }}" class="hover:text-gray-900">Accueil</a>
            <a href="{{ route('accueil') }}#about" class="hover:text-gray-900">À propos</a>
            <a href="{{ route('accueil') }}#formations" class="hover:text-gray-900">Formations</a>
            <a href="{{ route('accueil') }}#campus" class="hover:text-gray-900">Campus</a>
            <a href="{{ route('accueil') }}#temoignages" class="hover:text-gray-900">Témoignages</a>
            <a href="{{ route('contact') }}" class="hover:text-gray-900">Contact</a>
        </div>

        <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="md:hidden flex items-center justify-center w-9 h-9 rounded-lg border border-gray-200 text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

    </div>

    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 px-6 py-4 flex flex-col gap-3 text-sm text-gray-700 bg-white">
        <a href="{{ route('accueil') }}" class="hover:text-gray-900">Accueil</a>
        <a href="{{ route('accueil') }}#about" class="hover:text-gray-900">À propos</a>
        <a href="{{ route('accueil') }}#formations" class="hover:text-gray-900">Formations</a>
        <a href="{{ route('accueil') }}#campus" class="hover:text-gray-900">Campus</a>
        <a href="{{ route('accueil') }}#temoignages" class="hover:text-gray-900">Témoignages</a>
        <a href="{{ route('contact') }}" class="hover:text-gray-900">Contact</a>
    </div>
</nav>
