<nav class="w-full h-14 bg-white flex justify-between items-center uppercase">
    <div class="flex h-full  gap-10">
        <div class="bg-blue-500 h-full flex items-center px-2 text-white font-semibold">
            FreeAds
        </div>
        <ul class="h-full flex text-sm">
            <li class="h-full"><a href="{{ route('index') }}"
                    class="h-full w-full flex items-center px-2 hover:text-blue-500 text-gray-700">Accueil</a></li>
        </ul>
    </div>

    <ul class="h-full flex items-center gap-5 text-sm pr-10">
        <li class="h-full flex items-center">
            <a href="/"
                class="bg-green-500 px-4 py-2 hover:bg-green-600 text-white rounded-3xl flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                <span>annonce</span>
            </a>
        </li>
        @if (Auth::check())
            <li class="text-gray-700">
                <span class="text-blue">{{ auth()->user()->login }}</span>
                {{-- <ul class="absolute bg-white top-16 z-10 right-5 px-2 w-48 py-2 normal-case rounded">
                    <li class="">
                        <a href="#" class="block px-1 mb-1 py-2 hover:bg-gray-200 rounded">
                            Profile
                        </a>
                    </li>
                    <li>
                        <form action="" class="w-full">
                            <button class="text-left w-full px-1 py-2 hover:bg-gray-200 rounded">Se deconnecter</button>
                        </form>
                    </li>
                </ul> --}}
            </li>
        @else
            <li class="text-gray-700">
                <a href="{{ route('login.create') }}">Se connecter</a>
            </li>
        @endif
    </ul>
</nav>
