<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locations;
use phpDocumentor\Reflection\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Locations::paginate(5);
        return view('location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('location.create');
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
            'date'    =>  'required',
            'duree'     =>  'required',
            'prix'    =>  'required',
            'detailles'     =>  'required',
            'id_client'    =>  'required'
            

        ]);
        $location = new Locations([
            'date'    =>  $request->get('date'),
            'duree'     =>  $request->get('duree'),
            'prix'    =>  $request->get('prix'),
            'detailles'     =>  $request->get('detailles'),
            'id_client'    =>  $request->get('id_client')
            
            

        ]);
        $location->save();
        return redirect('/locations')->with('success', 'location ajoutée avec succés!!!');
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
        $location = Locations::find($id);
        return view('location.edit', compact('location', 'id'));
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
            'date'    =>  'required',
            'duree'     =>  'required',
            'prix'    =>  'required',
            'detailles'     =>  'required',
            'id_client'    =>  'required'
        ]);
        $location = Locations::find($id);
        $location->matricule = $request->get('date');
        $location->marque = $request->get('duree');
        $location->modele = $request->get('prix');
        $location->modele = $request->get('detailles');
        $location->modele = $request->get('id_client');
        $location->save();
       

        return redirect('/locations')->with('success', 'Données voiture mise à jours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Locations::find($id);
        $location->delete();
        return redirect('/$location')->with('success', 'location supprimée');
    }
}
