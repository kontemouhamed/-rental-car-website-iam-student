<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Voiture;
use Livewire\Component;



class ShowCars extends Component
{
    public $voiture, $debut = 42, $fin, $jour;
    public $nom, $prenom, $tel, $address, $naiss, $cin, $permis, $obtention;
    public $showModal = false;
    protected $listeners = ['checkPeriode'];
    public function render()
    {
        return view('livewire.show-cars')->extends('layout.app');
    }

    public function mount($id)
    {
        $this->voiture = Voiture::find($id);
    }

    public function checkPeriode($element)
    {
        $now  = new Carbon($element['dateFin']);
        $end  = new Carbon($element['dateDebut']);
        $this->jour = $now->diffInDays($end);
        //dd($now->diffInDays($end));
    }

    public function reservation()
    {
        $now  = new Carbon($this->fin);
        $end  = new Carbon($this->debut);
        // dd($now->diffInDays($end));
        // $this->jour = $now->diffInDays($end);
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
    public function validForm()
    {
        $this->showModal = true;
    }
}
