@extends('layout.app')
@section('content')
    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            {{--  --}}
            <div class="font-sans bg-gray-100 w-full">
                <div class="min-h-screen flex justify-center items-center ">
                    <div class="">
                        <div class="text-center font-semibold">
                            <h1 class="text-5xl">
                                <span class="text-blue-700 tracking-wide">Tout ce dont vous avez besoin</span>
                                <span>et plus encore ...</span>
                            </h1>
                        </div>
                        <div class="pt-24 flex flex-row space-x-10">
                            <!-- Basic Card -->
                            <div class="w-96 p-8 bg-white text-center rounded-3xl pr-16 shadow-xl">
                                <h1 class="text-black font-semibold text-2xl">Recherche Automobile</h1>
                                <hr class="mt-4 border-1">
                                <div class="pt-8">
                                    <img class="hover:grow hover:shadow-lg"
                                        src="data:image/jpeg;base64,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">
                                    <p class="font-semibold text-gray-400 text-left py-5">
                                        <span class="material-icons align-middle">
                                            Notre puissant moteur de recherche permet de préciser et de personnaliser vos
                                            recherches. <br><br>Vous verrez donc uniquement les véhicules et les options qui
                                            vous
                                            intéressent
                                        </span>
                                    </p>
                                    {{-- <a href="#" class="">
                                        <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                            <span class="font-medium">
                                                Choose Plan
                                            </span>
                                            <span class="pl-2 material-icons align-middle text-sm">
                                                east
                                            </span>
                                        </p>
                                    </a> --}}
                                </div>
                            </div>
                            <!-- StartUp Card -->
                            <div
                                class="w-80 p-8 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white transform scale-125">
                                <h1 class="text-white font-semibold text-2xl">Des concessionnaires de confiance</h1>
                                <hr class="mt-4 border-1 border-gray-600">
                                <div class="pt-8">
                                    <img class="hover:grow hover:shadow-lg"
                                        src="https://images.unsplash.com/photo-1565043666747-69f6646db940?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80">
                                    <p class="font-semibold text-gray-400 text-left py-1">
                                    <p class="font-semibold text-gray-400 text-left">
                                        <span class="material-icons align-middle">
                                            Tout d’abord, le choix de l’achat d’une occasion via le concessionnaire est un
                                            choix rassurant. Confiance, sécurité et tranquillité d’esprit sont les maîtres
                                            mots de l’achat chez le concessionnaire.<br><br>
                                            Grâce aux évaluations et aux commentaires, vous pouvez chercher en toute
                                            confiance.

                                        </span>
                                    </p>
                                </div>
                            </div>
                            <!-- Enterprise Card -->
                            <div class="w-96 p-8 bg-white text-center rounded-3xl pl-16 shadow-xl">
                                <h1 class="text-black font-semibold text-2xl">Les meilleures offres en premier</h1>
                                <hr class="mt-4 border-1">
                                <div class="pt-8">
                                    <img class="hover:grow hover:shadow-lg"
                                        src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
                                    <p class="font-semibold text-gray-400 text-left py-2">
                                        <span class="material-icons align-middle">
                                            Nous comparons les prix, les détails des véhicules et les évaluations des
                                            concessionnaires pour attribuer une cote d’affaires à chaque auto usagée, puis
                                            nous affichons les meilleures offres en premier
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="flex py-16"><span> &nbsp;</span> </div>
            <nav id="store" class="w-full z-30 top-0 px-6">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2  ">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                        href="{{ route('voiture.store') }}">
                        Store
                    </a>

                    <div class="flex items-center" id="store-nav-content">
                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                            href="{{ route('voiture.store') }}">
                            Tout Afficher
                        </a>

                    </div>
                </div>
            </nav>

            @foreach ($make as $item)
                {{-- <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg  motion-reduce:transform-none"
                            src="{{ asset($item->image) }}">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="">{{ $item->marque . ' ' . $item->modele }}</p>
                            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                            </svg>
                        </div>
                        <p class="pt-1 text-gray-900">{{ $item->years . ' ~ ' . $item->kilometrage }} Km<br>Diesel</p>
                        <p class="pt-1 text-gray-900">F CFA {{ $item->prix }}</p>
                    </a>
                </div> --}}
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <a href="{{ route('voiture.show', ['id' => $item->id]) }}">
                            <div class="bg-cover bg-center h-56 p-4"
                                style="background-image: url({{ asset($item->image) }})">
                            </div>
                        </a>
                        <div class="p-2">
                            <p class="uppercase tracking-wide text-sm font-bold text-gray-700">
                                {{ $item->marque . ' ' . $item->modele }} • {{ $item->years }}</p>
                            <p class="text-2xl text-gray-900">F CFA 25,000 / jour</p>
                            <p class="text-gray-700"><svg class="e3n44x b298QA inline fill-current text-green-600 "
                                    viewBox="0 0 24 24" focusable="false" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" data-icon="true"
                                    aria-label="Transmission">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M21 5a2 2 0 10-2.75 1.853v4.397h-5.5V6.853a2 2 0 10-1.5 0v4.397h-5.5V6.853a2 2 0 10-1.5 0v10.294a2 2 0 101.5 0V12.75h5.5v4.397a2 2 0 101.5 0V12.75h7V6.853A2 2 0 0021 5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span
                                    class="description text-sm block py-2 border-gray-400 mb-2
                                                                                                                        inline">{{ $item->transmission }}
                                </span>
                            </p>
                            <p class="text-gray-700">
                                <svg class="e3n44x b298QA inline fill-current text-green-600" viewBox="0 0 24 24"
                                    focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" data-icon="true" aria-label="Type de carburant">
                                    <path fill="currentColor"
                                        d="M12 7.25A0.75 0.75 0 0111.25 8h-4.5a0.75 0.75 0 110-1.5h4.5A0.75 0.75 0 0112 7.25z">
                                    </path>
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M20.92 10.335L20.089 12h0.162a0.75 0.75 0 110 1.5H20V19c0 1.103-0.897 2-2 2s-2-0.897-2-2V9a1.501 1.501 0 00-1-1.412V20.25A0.75 0.75 0 0114.25 21H3.75A0.75 0.75 0 013 20.25V3.75A0.75 0.75 0 013.75 3h10.5A0.75 0.75 0 0115 3.75v2.295A3.002 3.002 0 0117.5 9v10a0.5 0.5 0 001 0v-7a0.751 0.751 0 010.079-0.335l1-2a0.751 0.751 0 011.342 0.67zM13.5 19.5h-9v-8h9v8zm0-9.5h-9V4.5h9V10z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span
                                    class="description text-sm block py-2 border-gray-400 mb-2
                                                                                                                        inline">{{ $item->carburant }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </section>

@endsection
