<nav class="border-b border-gray-200">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- Logo / Nom du site --}}
        <a href="{{ route('accueil') }}" class="text-lg font-semibold text-gray-900">
            Collège Protestant
        </a>

        {{-- Liens de navigation --}}
        <div class="flex gap-6 text-sm text-gray-700">
            <a href="{{ route('accueil') }}" class="hover:text-gray-900">
                Accueil
            </a>
            <a href="{{ route('accueil') }}#about" class="hover:text-gray-900">
                À propos
            </a>
            <a href="{{ route('accueil') }}#formations" class="hover:text-gray-900">
                Formations
            </a>
            <a href="{{ route('accueil') }}#campus" class="hover:text-gray-900">
                Campus
            </a>
            <a href="{{ route('accueil') }}#temoignages" class="hover:text-gray-900">
                Témoignages
            </a>
            <a href="{{ route('contact') }}" class="hover:text-gray-900">
                Contact
            </a>
        </div>

    </div>
</nav>