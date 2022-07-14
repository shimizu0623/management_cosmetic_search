<?php

namespace App\Http\Controllers;

use App\Models\LeaveReason;
use Illuminate\Support\Facades\Hash;

class LeaveReasonController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $leaveReasons = LeaveReason::all();
        
        return view('leaveReasons.index', [
            'leaveReasons' => $leaveReasons
        ]);
    }
}
