@extends('layout.app')
@section('content')
    <div class="flex h-screen bg-gray-200 items-center justify-center my-64">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
            <div class="flex justify-center py-4">
                <div class="flex bg-purple-200 rounded-full md:p-4 p-2 border-2 border-purple-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Tailwind Form</h1>
                </div>
            </div>
            <form action="{{ route('voiture.ajout') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Marque</label>
                    <div
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        <select class="livesearch form-control p-3" name="livesearch"></select>
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Modele</label>
                        {{-- <select
                            class="livesearchmodele py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            name="livesearchmodele"></select> --}}
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Modele" name="modele" />
                    </div>
                    <div class=" grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Année</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Année" name="annee" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Carburant</label>
                        <select name="carburant"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="essence">Essence</option>
                            <option value="diesel">Diesel</option>
                            <option value="hybride">Hybride</option>
                            <option value="gpl">GPl</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Kilometrage</label>
                        <input name="kilometrage"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Kilometrage" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Catégorie</label>
                        <select name="categorie"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="berline">berline</option>
                            <option value="suv">SUV</option>
                            <option value="citadine">Citadine</option>
                            <option value="pickup">Pick-up</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">transmission</label>
                        <select name="transmission"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value="manuelle">Manuelle</option>
                            <option value="automatique">Automatique</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Prix</label>
                        <input name="prix"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Input 2" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Etat</label>
                        <select name="etat"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option>Neuf</option>
                            <option>Occasion</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Places</label>
                        <input name="place"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" placeholder="Place" />
                    </div>
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500  font-semibold">Best
                            Seller</label>
                        <select name="best"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                            <option value=""></option>
                            <option value="1">OUI</option>
                            <option value="0">NON</option>
                        </select>
                    </div>
                </div>
                {{-- IMAGE --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                    Select a photo</p>
                                {{-- <img id="blah" src="#" alt="your image" /> --}}
                            </div>
                            <input type='file' class="hidden" onchange="readURL(this);" name="image" />
                        </label>
                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                    Select a photo</p>
                                {{-- <img id="blah" src="#" alt="your image" /> --}}
                            </div>
                            <input type='file' class="hidden" onchange="readURL(this);" name="image1" />
                        </label>
                    </div>
                </div>
                {{-- IMAGE --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                    Select a photo</p>
                                {{-- <img id="blah" src="#" alt="your image" /> --}}
                            </div>
                            <input type='file' class="hidden" onchange="readURL(this);" name="image2" />
                        </label>
                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                    Select a photo</p>
                                {{-- <img id="blah" src="#" alt="your image" /> --}}
                            </div>
                            <input type='file' class="hidden" onchange="readURL(this);" name="image3" />
                        </label>
                    </div>
                </div>
                {{-- IMAGE --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label
                            class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                    Select a photo</p>
                                {{-- <img id="blah" src="#" alt="your image" /> --}}
                            </div>
                            <input type='file' class="hidden" onchange="readURL(this);" name="image4" />
                        </label>
                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                    Select a photo</p>
                                {{-- <img id="blah" src="#" alt="your image" /> --}}
                            </div>
                            <input type='file' class="hidden" onchange="readURL(this);" name="image5" />
                        </label>
                    </div>
                    <div class="grid grid-cols-1">
                        <label
                            class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                    Select a photo</p>
                                {{-- <img id="blah" src="#" alt="your image" /> --}}
                            </div>
                            <input type='file' class="hidden" onchange="readURL(this);" name="image6" />
                        </label>
                    </div>
                </div>
                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button
                        class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancel</button>
                    <button type="submit"
                        class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
