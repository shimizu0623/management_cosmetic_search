<?php

namespace App\Http\Controllers;

use App\Models\SkinType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \Symfony\Component\HttpFoundation\Response;

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

    public function create()
    {
        $skinTypes = SkinType::all();

        return view('skinTypes.create', [
            'skinTypes' => $skinTypes
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'detail' => 'required',
        ]);

        if ($validator->fails()){
            return redirect('/skin_types/create')->with('error_message', $validator->messages());
        }

        $create = SkinType::create([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);

        return redirect('/skin_types')->with('done_message', '登録が完了しました');
    }

    public function destroy($id)
    {
        $skinTypeId = SkinType::find($id);
        $skinTypeId->delete();

        return redirect('/skin_types')->with('done_message', '削除が完了しました');
    }
}
