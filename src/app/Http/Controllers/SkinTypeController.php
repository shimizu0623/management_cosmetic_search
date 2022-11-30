<?php

namespace App\Http\Controllers;

use App\Models\SkinType;
use Illuminate\Support\Facades\Hash;

class SkinTypeController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $skinTypes = SkinType::all();
        
        return view('skinTypes.index', [
            'skinTypes' => $skinTypes
        ]);
    }
}
