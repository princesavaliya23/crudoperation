<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\Support\Facades\DB;


class countrycontroller extends Controller
{
    public function index(){
        return view('countrys.index',
        ['cruds'=> Crud::get()]);
    }

    public function user(){
        return view('countrys.user');
    }
    
    public function newuser(){
        return view('countrys.newuser');
    }
    
    public function create(){
        return view('countrys.create');
    }
    public function store(Request $request){

        //validate data
        $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);


        // dd($request->all());
        $crud = new Crud; 
        $crud->country = $request->name;
        $crud->code = $request->code;

        $crud->save();

        // return back()->withsuccess('product created !!!!!!');
        if($crud){
            return redirect()->route('countrys.index');
        }else{
            echo "<h1>Data Not added.<h1/>";
        }

    }

    public function edit($id){
        $crud = Crud::where('id',$id)->first();
        
        return view('countrys.edit',['crud' => $crud]);
    }

    public function update(Request $request, $id){
        //validate data
        $request->validate([
            'name' => 'required',
            'code' => 'required'
        ]);

        $crud = Crud::where('id',$id)->first();

        // dd($request->all());
        // $crud = new Crud; 
        $crud->country = $request->name;
        $crud->code = $request->code;

        $crud->save();

        // return back('countrys.index')->withsuccess('product updated !!!!!!');
        if($crud){
            return redirect()->route('countrys.index');
        }else{
            echo "<h1>Data Not Updated.<h1/>";
        }
    }

    public function destroy($id){
        $crud = crud::where('id', $id)->first();
        $crud->delete();
        // return back()->withSuccess('product deleted !!!!');

        if($crud){
            return redirect()->route('countrys.index');
        }else{
            echo "<h1>Data Not deleted.<h1/>";
        }
    }

    public function show($id){
        $crud = crud::where('id', $id)->first();
        
        return view('countrys.show',['crud'=>$crud]);
    }
}
