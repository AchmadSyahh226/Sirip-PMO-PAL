<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\material;
use Illuminate\Http\Request;

class materialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = category::all();
        $query = $request->input('search');
        $data = material::query();

        if($query){
            $data = material::where('name_material', 'LIKE', '%' .$request->search. '%')
            ->orWhere('code_material', 'LIKE', '%' .$request->search. '%')
            ->orWhere('unit_material', 'LIKE', '%' .$request->search. '%')
            ->orWhere('ket_material', 'LIKE', '%' .$request->search. '%'); //return query not collection
        }
        $data = $data->paginate(10); //return query not collection

        return view('material', compact('data', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = category::all();
        return view('create.c-material', compact('data'));
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
        $request->validate([
            'code_material'=>'required',
            'name_material'=>'required',
            'unit_material'=>'required'
        ]);
        $data_material = [
            'code_material'=>$request->code_material,
            'name_material'=>$request->name_material,
            'category_id'=>$request->category_id,
            'unit_material'=>$request->unit_material,
            'ket_material'=>$request->ket_material
        ];
        material::create($data_material);
        return redirect('material-master')->with('success','Masukkan data berhasil!');
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
        $category = category::all();
        $data = material::find($id);
        return view('update.u-material', compact('data', 'category'));
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
        $data = material::find($id);
        $data->update($request->all());
        return redirect('material-master')->with('success','Edit Data berhasil!');
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
        $data = material::find($id);
        $data->delete();
        return redirect('material-master')->with('success','Hapus data berhasil!');
    }
}
