<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locations;

class TrouverLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search =  $request->input('q');
        if($search!=""){
            $Members = Locations::where(function ($query) use ($search){
                $query->where('id', 'like', '%'.$search.'%')
                    ->orWhere('date', 'like', '%'.$search.'%')
                    ->orWhere('duree', 'like', '%'.$search.'%')
                    ->orWhere('prix', 'like', '%'.$search.'%')
                    ->orWhere('detailles', 'like', '%'.$search.'%')
                    ->orWhere('id_client', 'like', '%'.$search.'%');
            })
            ->paginate(2);
            $Members->appends(['q' => $search]);
        }
        else{
            $Members = Locations::paginate(2);
        }
        return View('location.search')->with('data',$Members);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
