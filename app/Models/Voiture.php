<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = [
        'marque', 'modele', 'years', 'carburant', 'kilometrage',
        'category', 'transmission', 'prix', 'etat', 'place', 'bestseller', 'image',
        'image1', 'image2', 'image3',
        'image4',
        'image5', 'image6', 'gamme', 'withdriver', 'tarifday', 'tarifhour', 'disponible'
    ];
}
