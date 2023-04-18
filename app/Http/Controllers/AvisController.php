<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvisRequest;
use App\Models\Avis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AvisController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Afficher les Avis
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AvisRequest $request): RedirectResponse
    {

        //dd($request->all());
        //$request->validated($data);
        // recupération des données
        $avis_valide = $request->validated();

        //  data...
        $requestData = $request->all();

        $avis = $request->safe()->only([
            'email',
            'pseudo',
            'note',
            'commentaire',
            'description',
            'produit_id']);


        $url=config('filesystems.disks.public.disk');
        if ($request->hasFile('photo')) {
            $file=$request['photo'];

                $uploadPath = public_path($url);
                if (! File::exists($uploadPath)) {
                    File::makeDirectory($uploadPath);
                }
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '_photo.' . $extension;

                $file->move($uploadPath, $fileName);

                $avis['photo'] = $url.$fileName;

        }
        $avis['status']=Avis::EN_ATTENTE;
        //creation

        $new_avis=Avis::create($avis);
        return redirect('/#avis')->with('success', 'Avis ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Avis $avis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Avis $avis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avis $avis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avis $avis)
    {
        //
    }
}
