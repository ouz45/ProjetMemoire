<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(5);
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
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
            'prenom'    =>  'required',
            'nom'     =>  'required',
            'email'    =>  'required',
            'phone'     =>  'required',
            'add'     =>  'required'

        ]);
        $client = new Client([
            'prenom'    =>  $request->get('prenom'),
            'nom'     =>  $request->get('nom'),
            'email'    =>  $request->get('email'),
            'phone'     =>  $request->get('phone'),
            'add'    =>  $request->get('add')
            

        ]);
        $client->save();
        return redirect('/clients')->with('success', 'client ajouté avec succés!!!');
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
        $client = Client::find($id);
        return view('client.edit', compact('client', 'id'));
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
            'prenom'    =>  'required',
            'nom'     =>  'required',
            'email'    =>  'required',
            'phone'     =>  'required',
            'add'     =>  'required'
        ]);
        $client = Client::find($id);
        $client->prenom = $request->get('prenom');
        $client->nom = $request->get('nom');
        $client->email = $request->get('email');
        $client->phone = $request->get('phone');
        $client->add = $request->get('add');
        $client->save();
       

        return redirect('/clients')->with('success', 'Données client mise à jours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients')->with('success', 'Client supprimé');
    }
}
