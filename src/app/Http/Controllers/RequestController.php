<?php

namespace App\Http\Controllers;

use App\Models\Request;
use Illuminate\Support\Facades\Hash;

class RequestController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $requests = Request::all();
        
        return view('requests.index', ['requests' => $requests]);
    }
}
