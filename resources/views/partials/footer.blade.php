<footer class="border-t border-gray-200 mt-20">
    <div class="max-w-6xl mx-auto px-6 py-8 flex flex-col sm:flex-row items-center justify-between gap-4">

        <p class="text-sm text-gray-500">
            &copy; {{ date('Y') }} Collège Protestant Kpalimé. Tous droits réservés.
        </p>

        <div class="flex gap-6 text-sm text-gray-500">
            <a href="{{ route('accueil') }}" class="hover:text-gray-900">
                Accueil
            </a>
            <a href="{{ route('contact') }}" class="hover:text-gray-900">
                Contact
            </a>
        </div>

    </div>
</footer>
