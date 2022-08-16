<?php

namespace App\Http\Controllers;

use App\Models\Make;
use App\Models\Modele;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store(Request $request)
    {

        // dd($request->livesearch);
        $brand_image = $request->file('image');
        $image = "";
        if ($brand_image) {
            $name_gen = hexdec(uniqid()) . '.' . $brand_image->getClientOriginalExtension();
            Image::make($brand_image)->resize(800, 600)->save('storage/' . $name_gen);
            $image = 'storage/' . $name_gen;
        }

        // Image 1
        $image1 = "";
        if ($request->file('image1')) {
            $name_gen1 = hexdec(uniqid()) . '.' . $request->file('image1')->getClientOriginalExtension();
            Image::make($request->file('image1'))->resize(800, 600)->save('storage/' . $name_gen1);
            $image1 = 'storage/' . $name_gen1;
        }


        // Image 2
        $image2 = "";
        if ($request->file('image2')) {
            $name_gen2 = hexdec(uniqid()) . '.' . $request->file('image2')->getClientOriginalExtension();
            Image::make($request->file('image2'))->resize(800, 600)->save('storage/' . $name_gen2);
            $image2 = 'storage/' . $name_gen2;
        }


        // Image 3
        $image3 = "";
        if ($request->file('image3')) {
            $name_gen3 = hexdec(uniqid()) . '.' . $request->file('image3')->getClientOriginalExtension();
            Image::make($request->file('image3'))->resize(800, 600)->save('storage/' . $name_gen3);
            $image3 = 'storage/' . $name_gen3;
        }


        // Image 4
        $image4 = "";
        if ($request->file('image4')) {
            $name_gen4 = hexdec(uniqid()) . '.' . $request->file('image4')->getClientOriginalExtension();
            Image::make($request->file('image4'))->resize(800, 600)->save('storage/' . $name_gen4);
            $image4 = 'storage/' . $name_gen4;
        }


        // Image 5
        $image5 = "";
        if ($request->file('image5')) {
            $name_gen5 = hexdec(uniqid()) . '.' . $request->file('image5')->getClientOriginalExtension();
            Image::make($request->file('image5'))->resize(800, 600)->save('storage/' . $name_gen5);
            $image5 = 'storage/' . $name_gen5;
        }

        // Image 6
        $image6 = "";
        if ($request->file('image6')) {
            $name_gen6 = hexdec(uniqid()) . '.' . $request->file('image6')->getClientOriginalExtension();
            Image::make($request->file('image6'))->resize(800, 600)->save('storage/' . $name_gen6);
            $image6 = 'storage/' . $name_gen6;
        }




        $query = Voiture::create([
            'marque' => $request->livesearch,
            'modele' => $request->modele,
            'years' => $request->annee,
            'carburant' => $request->carburant,
            'category' => $request->categorie,
            'transmission' => $request->transmission,
            'prix' => $request->prixvente,
            'tarifday' => (int)$request->prixlocation,
            'tarifhour' => 5000,
            'etat' => $request->etat,
            'gamme' => $request->gamme,
            'place' => $request->place,
            'disponible' => $request->best,
            'kilometrage' => $request->kilometrage,
            'image' => $image,
            'image1' => $image1,
            'image2' => $image2,
            'image3' => $image3,
            'image4' => $image4,
            'image5' => $image5,
            'image6' => $image6,
            'withdriver' => 5000,
            'tarifhour' => 5000
        ]);

        if ($query) {
            return back();
        };
    }
    public function selectSearch(Request $request)
    {
        $makes = [];

        if ($request->has('q')) {
            $search = $request->q;
            $makes = Make::select("id", "code", "title")
                ->where('title', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($makes);
    }

    public function selectSearchModele(Request $request)
    {
        //$id_make = Make::select('id')->where('title', '=', $request->title)->get();
        $modeles = [];
        if ($request->has('q')) {
            $search = $request->q;
            $modeles = Modele::select("id", "code", "title")
                ->where('title', 'LIKE', "%$search%")
                ->get();
        }
        return response()->json($modeles);
    }
}
