<?php

namespace App\Http\Livewire;

use App\Models\Make;
use App\Models\Voiture;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Store extends Component
{
    use WithPagination;
    public $make;
    public $marque, $categorie, $yearmin, $yearmax, $carburant, $prixmin, $prixmax, $milemin, $milemax, $transmission, $place, $etat, $auto, $gamme;
    public $showModal = false;
    public function render()
    {
        // $this->voiture = Voiture::paginate(10);
        // dd($this->voiture);
        $voiture = DB::table('voitures')
            ->where('marque', 'like', '%' . $this->marque);
        $voiture->where('transmission', 'like', '%' . $this->transmission);
        $voiture->where('category', 'like', '%' . $this->categorie);
        $voiture->where('gamme', 'like', '%' . $this->gamme);
        $voiture->where('place', 'like', '%' . $this->place);
        $voiture->where('carburant', 'like', '%' . $this->carburant);

        if ($this->yearmin != "") {

            $voiture->where('years', '>=', (int)$this->yearmin);
        }
        if ($this->yearmax != "") {

            $voiture->where('years', '<=', (int)$this->yearmax);
        }

        if ($this->prixmin != "") {

            $voiture->where('tarifday', '>=', (int)$this->prixmin);
        }
        if ($this->prixmax != "") {

            $voiture->where('tarifday', '<=', (int)$this->prixmax);
        }

        // if ($this->milemin != "") {

        //     $voiture->where(
        //         'kilometrage',
        //         '>=',
        //         (int)$this->milemin
        //     );
        // }
        // if ($this->milemax != "") {

        //     $voiture->where('kilometrage', '<=', (int)$this->milemax);
        // }

        // $voiture->where('carburant', 'like', '%' . $this->carburant);
        return view(
            'livewire.store',
            [
                'posts' => $voiture->paginate(12)
            ]
        )->extends('layout.app');
    }

    public function mount()
    {
        $this->make = Make::all();
    }

    public function showCar()
    {
    }
}
