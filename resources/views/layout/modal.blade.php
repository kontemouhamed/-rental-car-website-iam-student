<div
    class="flex flex-col bg-gray-50 space-y-4 min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none ">
    <div class="flex flex-col p-8 bg-white shadow-md hover:shodow-lg rounded-2xl">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="flex flex-col col-span-2">
                    <div class="flex flex-col col-span-2">

                        <div class="flex flex-wrap -mx-3 mb-6" wire:target="step1"
                            wire:loading.class="animate-pulse opacity-10">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-prenom">
                                    Prenom
                                </label>
                                <input
                                    class="appearance-none block w-full border border-black rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                    id="grid-first-prenom" type="text" placeholder="Prenom" wire:model='prenom'
                                    name="prenom">
                                @error('prenom')
                                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                @enderror

                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    NOM
                                </label>
                                <input
                                    class="appearance-none block w-full border border-black rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-last-name" type="text" placeholder="Nom" wire:model="nom" name="nom">
                                @error('nom')
                                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6" wire:target="step1"
                            wire:loading.class="animate-pulse opacity-10">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-Adresse">
                                    Adresse
                                </label>
                                <input
                                    class="appearance-none block w-full border border-black rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-password" type="text" placeholder="Adresse" wire:model="address">
                                @error('address')
                                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6" wire:target="step1"
                            wire:loading.class="animate-pulse opacity-10">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-tel">
                                    TELEPHONE
                                </label>
                                <input wire:model="tel"
                                    class="appearance-none block w-full  border border-black rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:ring-indigo-500 focus:border-indigo-500"
                                    id="grid-tel" type="text" placeholder="Télephone">
                                @error('tel')
                                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                @enderror

                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    DATE DE NAISSANCE
                                </label>
                                <div class="relative">
                                    <input type="date"
                                        class="block appearance-none border border-black w-full text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state" wire:model="naiss" />
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                    @error('naiss')
                                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2 pt-6" wire:target="step1"
                            wire:loading.class="animate-pulse opacity-10">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-zip">
                                    CIN
                                </label>
                                <input
                                    class="appearance-none block w-full border border-black rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-zip" type="integer" placeholder="90210" wire:model="cin">
                                @error('cin')
                                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-zip">
                                    NUMERO DE PERMIS
                                </label>
                                <input
                                    class="appearance-none block w-full border border-black rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-zip" type="text" placeholder="90210" wire:model="permis">
                                @error('permis')
                                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-state">
                                    DATE D'OBTENTION
                                </label>
                                <div class="relative">
                                    <input type="date"
                                        class="block appearance-none border border-black w-full text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state" wire:model="obtention" />
                                    <div class=" pointer-events-none absolute inset-y-0 right-0 flex items-center px-2
                            text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                    @error('obtention')
                                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-wrap pt-10 place-content-center">
                            <div wire:loading wire:target="step1" class="z-50 static flex fixed " style="top:25%">
                                <img class="mx-9"
                                    src="https://icon-library.net/images/spinner-icon-gif/spinner-icon-gif-27.jpg"
                                    width="64" height="64">
                                <h1 class=" font-extrabold text-purple-600 ">TRAITEMENT EN COURS...</h1>
                            </div>

                            <button wire:click="closeModal"
                                class="inline-flex items-center bg-red-500  mr-8 h-10 px-5 text-indigo-100 bg-red-100  rounded-lg ">
                                <span>FERMER</span>
                            </button>
                            <button wire:click="validForm"
                                class="inline-flex items-center mr-8 h-10 px-5 text-indigo-100 bg-green-500 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                                <span>VALIDER</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
