<div class=" grid grid-cols-3 gap-4 pl-40">
    <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-2 gap-2 bg-local bg-gray-100">
        {{-- MARQUE --}}
        <div class=" p-3 rounded mr-2 mb-2 col-span-2">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Adresse">
                GAMME
            </label>
            <select wire:model="gamme" autocomplete="categorie" name="categorie"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                id="duree">
                <option value="">CHOIX</option>
                <option value="haut">HAUT DE GAMME</option>
                <option value="moyen">MOYEN DE GAMME</option>
                <option value="bas">BAS DE GAMME</option>
            </select>
            <p class="h-6"></p>
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-Adresse">
                MARQUE
            </label>
            <select wire:model="marque" autocomplete="categorie" name="categorie"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                id="duree">
                <option value="">CHOIX</option>
                @foreach ($make as $item)
                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                @endforeach
            </select>
            {{-- CATEGORIE --}}
            <p class="h-6"></p>
            <label for="categorie"
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Catégorie</label>
            <select wire:model="categorie" autocomplete="categorie" name="categorie" onchange="getMarque()"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                id="duree">
                <option value="">CHOIX</option>
                <option value="suv">SUV</option>
                <option value="berline">BERLINE</option>
                <option value="citadine">CITADINE</option>
                <option value="4x4">4x4</option>
            </select>
            <p class="h-6"></p>
            <label for="compagnie"
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Transmission</label>
            <select wire:model="transmission" name="etat"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value=""></option>
                <option value="automatique">AUTOMATIQUE</option>
                <option value="manuelle">MANUELLE</option>
            </select>
            <p class="h-6"></p>
            {{-- Carburant --}}
            <label for="compagnie" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Type
                carburant</label>
            <select wire:model="carburant" name="carburant"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value=""></option>
                <option value="essence">ESSENCE</option>
                <option value="diesel">DIESEL</option>
                <option value="hybride">HYBRIDE</option>
            </select>
            <p class="h-6"></p>
            <label for="compagnie"
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PLACES</label>
            <select wire:model="place" autocomplete="compagnie" name="duree"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                id="duree">
                <option value=""></option>
                @for ($i = 2; $i <= 7; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>option value="12">12 </option>
                @endfor
            </select>
        </div>

        {{-- ANNEE DEBUT --}}
        <div class="p-3 rounded mr-2 mb-2">
            <label for="compagnie" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Année
                Min.</label>
            <input wire:model="prixmin"
                class="appearance-none block w-full border border-black rounded py-2  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-first-prenom" type="text" placeholder="Année Min" name="anneemin">
        </div>
        {{-- ANNEE FIN --}}
        <div class=" p-3 rounded mr-2 mb-2">
            <label for="compagnie" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Année
                Max.</label>
            <input wire:model="prixmax"
                class="appearance-none block w-full border border-black rounded py-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-first-prenom" type="text" placeholder="Année Max" name="anneemax">
        </div>
        {{-- Prix MIN --}}
        {{-- <div class=" p-3 rounded mr-2 mb-2">
            <label for="compagnie" class="block text-sm font-medium ">Prix Min.</label>
            <input wire:model="prixmin"
                class="appearance-none block w-full border border-black rounded py-2  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-first-prenom" type="text" placeholder="Prix Min" name="prixmin">
        </div> --}}
        {{-- Prix MAX --}}
        {{-- <div class=" p-3 rounded mr-2 mb-2">
            <label for="compagnie" class="block text-sm font-medium ">Prix Max.</label>
            <input wire:model="prixmax"
                class="appearance-none block w-full border border-black rounded py-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-first-prenom" type="text" placeholder="Prix Max" name="prixmax">
        </div> --}}
        {{-- Carburant --}}
        {{-- <div class=" p-3 rounded mr-2 mb-2 col-span-2">
            <label for="compagnie" class="block text-sm font-medium ">Type carburant</label>
            <select wire:model="carburant" name="carburant"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value=""></option>
                <option value="essence">ESSENCE</option>
                <option value="diesel">DIESEL</option>
                <option value="hybride">HYBRIDE</option>
            </select>
        </div> --}}
        {{-- Kilometrage Min --}}
        {{-- <div class=" p-3 rounded mr-2 mb-2">
            <label for="compagnie" class="block text-sm font-medium ">Kilométrage Min</label>
            <input wire:model="milemin"
                class="appearance-none block w-full border border-black rounded py-2  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-first-prenom" type="text" placeholder="Kilométrage Min" name="milemin">
        </div> --}}
        {{-- Kilometrage Max --}}
        {{-- <div class=" p-3 rounded mr-2 mb-2">
            <label for="compagnie" class="block text-sm font-medium ">Kilométrage Max</label>
            <input wire:model="milemax"
                class="appearance-none block w-full border border-black rounded py-2  leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-first-prenom" type="text" placeholder="Kilométrage Max" name="milemax">
        </div> --}}
        {{-- ETAT --}}
        {{-- <div class=" p-3 rounded mr-2 mb-2 col-span-2">
            <label for="compagnie" class="block text-sm font-medium ">Etat</label>
            <select wire:model="etat" name="etat"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value=""></option>
                <option value="neuf">NEUF</option>
                <option value="occasion">OCCASION</option>
            </select>
        </div> --}}
        {{-- Transmission --}}
        {{-- <div class=" p-3 rounded mr-2 mb-2 col-span-2">
            <label for="compagnie" class="block text-sm font-medium ">Transmission</label>
            <select wire:model="transmission" name="etat"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value=""></option>
                <option value="automatique">AUTOMATIQUE</option>
                <option value="manuelle">MANUELLE</option>
            </select>
        </div> --}}
        {{-- Place --}}
        {{-- <div class=" p-3 rounded mr-2 mb-2 col-span-2">
            <label for="compagnie" class="block text-sm font-medium ">PLACES</label>
            <select wire:model="place" autocomplete="compagnie" name="duree"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                id="duree">
                <option value=""></option>
                @for ($i = 2; $i <= 7; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>option value="12">12 </option>
                @endfor
            </select>
        </div> --}}
        {{-- <div class="w-full p-3 rounded mr-2 mb-2 col-span-2">
            <button wire:click="showCar"
                class="w-full  py-2  bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
                RECHERCHER
            </button>
        </div> --}}
    </div>

    {{-- STORE a ne pas toucher --}}
    <div class="col-span-2">

        <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($posts as $item)
                <div class="each mb-10 m-2 shadow-lg border-gray-800 bg-gray-100 relative">
                    <a href="{{ route('voiture.show', ['id' => $item->id]) }}">
                        <img class="w-full cursor-pointer" src="{{ asset($item->image) }}" alt="" />
                    </a>
                    @if (!$item->disponible)
                        <div
                            class="badge absolute top-0 right-0 bg-red-500 m-1 text-gray-200 p-1 px-2 text-xs font-bold rounded">
                            En location</div>
                    @endif

                    <div class="info-box text-xs flex p-1 font-semibold text-gray-500 bg-gray-300">
                        <span class="mr-1 p-1 px-2 border-l border-b font-bold border-gray-400">Année:
                            {{ $item->years }}</span>
                        <span
                            class="mr-2 p-1 px-3 font-bold border-l border-b border-gray-400">{{ Str::upper($item->carburant) }}</span>
                    </div>
                    <div class="desc p-4 text-gray-800 ">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cash-stack inline fill-current text-green-600" viewBox="0 0 16 16">
                                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                <path
                                    d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                            </svg>
                            <span
                                class="description text-sm block py-2 border-gray-400 mb-2 inline">{{ number_format($item->tarifday, 0, '', ' ') }}/
                                jour
                                FCA
                            </span>
                        </div>
                        <div>
                            <svg class="e3n44x b298QA inline fill-current text-green-600" viewBox="0 0 24 24"
                                focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" data-icon="true" aria-label="Kilométrage">
                                <path fill="currentColor"
                                    d="M5.632 6.632c3.509-3.51 9.219-3.51 12.728 0 3.509 3.509 3.509 9.219 0 12.728a0.748 0.748 0 01-1.06 0 0.75 0.75 0 010-1.06c2.923-2.925 2.923-7.683 0-10.608-2.925-2.924-7.683-2.924-10.608 0-2.924 2.925-2.924 7.683 0 10.607a0.75 0.75 0 11-1.06 1.06c-3.51-3.508-3.51-9.218 0-12.727z">
                                </path>
                                <path fill="currentColor"
                                    d="M11.466 8.776a0.73 0.73 0 01-0.22-0.53 0.738 0.738 0 010.127-0.418 0.79 0.79 0 010.335-0.275 0.753 0.753 0 011.037 0.693 0.738 0.738 0 01-0.127 0.417 0.754 0.754 0 01-1.04 0.205 0.79 0.79 0 01-0.112-0.092zM8.923 15.66a0.834 0.834 0 010.245 0.163 0.758 0.758 0 010.163 0.818 0.821 0.821 0 01-0.163 0.245 0.767 0.767 0 01-0.53 0.217 0.769 0.769 0 01-0.532-0.218 0.82 0.82 0 01-0.162-0.245 0.718 0.718 0 01-0.058-0.288 0.759 0.759 0 010.335-0.622 0.846 0.846 0 010.13-0.07 0.88 0.88 0 010.14-0.042 0.808 0.808 0 010.292 0 0.865 0.865 0 010.14 0.043zm8.353-2.134a0.802 0.802 0 000.162-0.243 0.739 0.739 0 00-0.162-0.817 0.751 0.751 0 00-1.28 0.53 0.753 0.753 0 000.897 0.734 0.687 0.687 0 000.268-0.112 0.703 0.703 0 000.115-0.092zm-10.56-1.06a0.774 0.774 0 011.06 0 0.754 0.754 0 010.22 0.53 0.754 0.754 0 01-0.75 0.75 0.753 0.753 0 01-0.75-0.75c0-0.198 0.08-0.39 0.22-0.53zm8.492 3.152a0.728 0.728 0 00-0.27 0.112 0.752 0.752 0 00-0.333 0.623 0.768 0.768 0 000.218 0.532 0.758 0.758 0 001.06 0 0.759 0.759 0 000.22-0.532c0-0.198-0.08-0.39-0.217-0.53a0.767 0.767 0 00-0.678-0.205zM9.26 9.22a0.811 0.811 0 010.07 0.13 0.714 0.714 0 010.057 0.285 0.77 0.77 0 01-0.219 0.533 0.767 0.767 0 01-0.53 0.218 0.76 0.76 0 01-0.532-0.218A0.77 0.77 0 017.9 9.491a0.904 0.904 0 010.042-0.14 0.83 0.83 0 010.163-0.245 0.782 0.782 0 011.062 0A1.063 1.063 0 019.261 9.22zm7.016 0.556a0.75 0.75 0 10-1.06-1.06l-0.383 0.382a0.04 0.04 0 01-0.005 0.004l-0.005 0.004-0.004 0.005a0.045 0.045 0 01-0.005 0.005l-2.024 2.025a2.002 2.002 0 00-2.794 1.835c0 1.103 0.897 2 2 2a2.002 2.002 0 001.846-2.767l2.434-2.433z">
                                </path>
                            </svg>
                            <span
                                class="description text-sm block py-2 border-gray-400 mb-2 inline">{{ number_format($item->kilometrage, 0, '', ' ') }}
                                Km
                            </span>
                        </div>
                        <div>
                            <svg class="e3n44x b298QA inline fill-current text-green-600" viewBox="0 0 24 24"
                                focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" data-icon="true" aria-label="Transmission">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M21 5a2 2 0 10-2.75 1.853v4.397h-5.5V6.853a2 2 0 10-1.5 0v4.397h-5.5V6.853a2 2 0 10-1.5 0v10.294a2 2 0 101.5 0V12.75h5.5v4.397a2 2 0 101.5 0V12.75h7V6.853A2 2 0 0021 5z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span
                                class="description text-sm block py-2 border-gray-400 mb-2 inline">{{ Str::upper($item->transmission) }}
                            </span>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
    <div class="justify-content-center"> </div>

    <div class="justify-center"> {{ $posts->links() }}</div>
    <div class="justify-content-center"> </div>

</div>
