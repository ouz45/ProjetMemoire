<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiture;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Auth::user()->role;
        if($role=='1'){
            return view('client.index');
        }
        elseif($role=='2'){
            return view('superutilisateur');
        }
        else{
            return view('dashboard');
        }

    }

}
