<footer class="border-t border-gray-200 mt-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-10">

        <div>
            <p class="text-lg font-semibold text-gray-900 mb-3">Collège Protestant Kpalimé</p>
            <p class="text-sm text-gray-500 leading-relaxed">
                Un enseignement de qualité, un encadrement bienveillant, au service de la réussite de chaque élève.
            </p>
        </div>

        <div>
            <p class="text-sm font-semibold text-gray-900 mb-3">Navigation</p>
            <div class="flex flex-col gap-2 text-sm text-gray-500">
                <a href="{{ route('accueil') }}" class="hover:text-gray-900">Accueil</a>
                <a href="{{ route('accueil') }}#formations" class="hover:text-gray-900">Formations</a>
                <a href="{{ route('accueil') }}#campus" class="hover:text-gray-900">Campus</a>
                <a href="{{ route('contact') }}" class="hover:text-gray-900">Contact</a>
            </div>
        </div>

        <div>
            <p class="text-sm font-semibold text-gray-900 mb-3">Contact</p>
            <div class="flex flex-col gap-2 text-sm text-gray-500">
                <a href="tel:0022898441631" class="hover:text-gray-900">+228 98 44 16 31</a>
                <a href="mailto:douvonk78@gmail.com" class="hover:text-gray-900">douvonk78@gmail.com</a>
                <span>Kpégolonou, Kpalimé, Togo</span>
            </div>
        </div>

    </div>

    <div class="border-t border-gray-200">
        <div class="max-w-6xl mx-auto px-6 py-6">
            <p class="text-sm text-gray-500 text-center">
                &copy; {{ date('Y') }} Collège Protestant Kpalimé. Tous droits réservés.
            </p>
        </div>
    </div>
</footer>
