<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Validator;

class ApicrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'cruds'=>crud::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $crud = new crud;
        $crud->country=$request->country;
        $crud->code=$request->code;

        $crud->save();
        return response()->json([
            'message' => 'country created',
            'status' => 'success',
            'data' => $crud
        ]);
    }

    /**
     * Display the specified resource.
     */

    public function show(crud $crud)
    {
        return response()->json(['crud'=>$crud]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, crud $crud)
    {
        $crud->country=$request->country;
        $crud->code= $request->code;

        $crud->save();

        return response()->json([
            'message' => 'country updated',
            'status' => 'success',
            'data' => $crud
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(crud $crud)
    {
        $crud->delete();
        return response()->json([
            'message'=>'country deleted',
            'status'=>'success',
        ]);
    }
}
