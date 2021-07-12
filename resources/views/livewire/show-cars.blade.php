 @if ($showModal)
     @include('layout.modal')
 @endif

 <div class="flex-1 p-10 text-2x1 font-bold pl-40">
     <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
         <div class="flex flex-col col-span-2">
             <div class="slider">
                 <div class="slides">
                     <div id="slide-1">
                         <img src="{{ asset($voiture->image) }}" alt="">
                     </div>
                     <div id="slide-2">
                         <img src="{{ asset($voiture->image1) }}" alt="">
                     </div>
                     <div id="slide-3">
                         <img src="{{ asset($voiture->image2) }}" alt="">
                     </div>
                     <div id="slide-4">
                         <img src="{{ asset($voiture->image3) }}" alt="">
                     </div>
                     <div id="slide-5">
                         <img src="{{ asset($voiture->image4) }}" alt="">
                     </div>
                     <div id="slide-6">
                         <img src="{{ asset($voiture->image5) }}" alt="">
                     </div>
                     <div id="slide-7">
                         <img src="{{ asset($voiture->image6) }}" alt="">
                     </div>
                 </div>
             </div>
             <div class="mt-10">
                 <div class="grid grid-cols-4 md:grid-cols-2 lg:grid-cols-4 grid-rows-2 gap-2 ">
                     <div class="p-3 rounded mr-2 mb-2">
                         Gamme: {{ $voiture->gamme }}
                     </div>
                     <div class="p-3 rounded mr-2 mb-2">
                         MARQUE: {{ $voiture->marque . ' ' . $voiture->modele }}
                     </div>
                     <div class="p-3 rounded mr-2 mb-2">
                         Année : {{ $voiture->years }}
                     </div>
                     <div class="p-3 rounded mr-2 mb-2">
                         Carburant : {{ $voiture->carburant }}
                     </div>
                     <div class="p-3 rounded mr-2 mb-2">
                         Transmission: {{ $voiture->transmission }}
                     </div>
                     <div class="p-3 rounded mr-2 mb-2">
                         Places: {{ $voiture->place }}
                     </div>
                     <div class="p-3 rounded mr-2 mb-2">
                         Tarif/jour: {{ $voiture->tarifday }}
                     </div>
                     <div class="p-3 rounded mr-2 mb-2">
                         Disponible: @if ($voiture->disponible)
                             <span class="text-green-700 bold text-xl">OUI</span>
                         @else
                             <span class="text-red-700 bold text-xl">NON</span>
                         @endif
                     </div>

                 </div>
             </div>
         </div>
         <div class="flex flex-col">
             <div class="flex bg-green-500">
                 <div class=" w-full text-center text-6xl bg-green-500">
                     RESERVATION
                 </div>
             </div>
             <div class="flex flex-col pt-5">
                 <div class="h-10">Date Réservation</div>
                 <div class="flex flex-wrap w-4/5 h-12 row-right" wire:loading.class="animate-pulse opacity-10">
                     <div class="flex flex-wrap  w-full mb-4 relative h-15 rounded mb-6">
                         <div class="flex -mr-px justify-center w-15 p-4 pr-18">
                             <span
                                 class="flex ileading-normal  px-3 border-0 rounded rounded-r-none text-2xl text-gray-600">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                             </span>
                         </div>
                         <input wire:change="$emit('triggerFooo')" type="text" id="dateDebut"
                             class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border border-1 h-10 border-green rounded rounded-l-none px-3 self-center relative  font-roboto text-xl outline-none"
                             placeholder="Date réservation" />
                     </div>
                 </div>
                 <div class="h-10 py-5">Date Réservation</div>
                 <div class="flex flex-wrap w-4/5 h-12 row-right" wire:loading.class="animate-pulse opacity-10 ">
                     <div class="flex flex-wrap  w-full mb-4 relative h-15 rounded mb-6">
                         <div class="flex -mr-px justify-center w-15 p-4 pr-18">
                             <span
                                 class="flex ileading-normal  px-3 border-0 rounded rounded-r-none text-2xl text-gray-600">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                             </span>
                         </div>
                         <input wire:change="$emit('triggerFooo')" type="text" id="dateFin"
                             class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border border-1 h-10 border-green rounded rounded-l-none px-3 self-center relative  font-roboto text-xl outline-none"
                             placeholder="Date Retour" />
                     </div>
                 </div>
                 <div class=" py-2"></div>
                 <div class="mt-6">
                     <span class="text-gray-700">Avec chauffeur</span>
                     <div class="mt-2">
                         <label class="inline-flex items-center">
                             <input wire:change="$emit('triggerFooo')" type="radio" class="form-radio"
                                 name="accountType" id="oui" value="5000">
                             <span class="ml-2">OUI</span>
                         </label>
                         <label class="inline-flex items-center ml-6">
                             <input wire:change="$emit('triggerFooo')" type="radio" class="form-radio"
                                 name="accountType" id="non" value="0">
                             <span class="ml-2">NON</span>
                         </label>
                     </div>
                 </div>
                 <div class=" py-5 pl-5 items-center ">
                     <h2>Détail de la réservation</h2>
                     <table class="table-fixed border border-2">
                         <thead>
                             <tr>
                                 <th class="w-1/2 ..."></th>
                                 <th class="w-1/2 right-10"></th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>Nombre de jours</td>
                                 <td></td>
                                 <td>
                                     <span id="jour"></span> <input wire:model="jour" type="hidden" id="nbrJour">
                                     <input type="hidden" id="tarif" value="{{ $voiture->tarifday }}">
                                 </td>
                             </tr>
                             <tr>
                                 <td>Montant total</td>
                                 <td></td>
                                 <td>
                                     <span id="tarifV"></span> <input type="hidden" id="tarifH">
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
                 <div class=" py-5 pl-5 items-center ">
                     <button wire:click="openModal" type="button justify-center"
                         class="bg-green-500 w-2/3 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-green-600 transition duration-200 each-in-out">Réserver</button>
                 </div>
             </div>
             <div class="flex flex-col pt-5"></div>
         </div>
     </div>
 </div>
 </div>
