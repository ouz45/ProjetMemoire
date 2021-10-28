<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voitures = Voiture::paginate(5);
        return view('voiture.index', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voiture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'matricule'    =>  'required',
            'marque'     =>  'required',
            'modele'    =>  'required'
            

        ]);
        $voiture = new Voiture([
            'matricule'    =>  $request->get('matricule'),
            'marque'     =>  $request->get('marque'),
            'modele'    =>  $request->get('modele')
            
            

        ]);
        $voiture->save();
        return redirect('/voitures')->with('success', 'voiture ajoutée avec succés!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voiture = Voiture::find($id);
        return view('voiture.edit', compact('voiture', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'matricule'    =>  'required',
            'marque'     =>  'required',
            'modele'    =>  'required'
        ]);
        $voiture = Voiture::find($id);
        $voiture->matricule = $request->get('matricule');
        $voiture->marque = $request->get('marque');
        $voiture->modele = $request->get('modele');
        $voiture->save();
       

        return redirect('/voitures')->with('success', 'Données voiture mise à jours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voiture = Voiture::find($id);
        $voiture->delete();
        return redirect('/voitures')->with('success', 'voiture supprimée');
    }
}
