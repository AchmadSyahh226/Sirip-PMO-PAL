<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        $data = category::query();

        if($query){
            $data = category::where('name_category', 'LIKE', '%' .$request->search. '%')
            ->orWhere('code_category', 'LIKE', '%' .$request->search. '%')
            ->orWhere('ket_category', 'LIKE', '%' .$request->search. '%'); //return query not collection
        }
        $data = $data->paginate(5); //return query not collection

        return view('category')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create.c-category');
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
            'code_category'=>'required',
            'name_category'=>'required'
        ]);
        $data_category = [
            'code_category'=>$request->code_category,
            'name_category'=>$request->name_category,
            'ket_category'=>$request->ket_category
        ];
        category::create($data_category);
        return redirect('/category-master')->with('success','Masukkan data kategori berhasil!');
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
        $data = category::find($id);
        return view('update.u-category')->with('data', $data);

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
        $data = category::find($id);
        $data->update($request->all());
        return redirect('/category-master')->with('success','Edit Data berhasil!');
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
        try{
            $data = category::find($id);
            $title = 'Delete User!';
            $text = "Are you sure you want to delete?";
            confirmDelete($title, $text);
            $data->delete();
            return redirect('/category-master')->with('success','Hapus data kategori berhasil!');
        }catch (QueryException $e){
            return redirect('/category-master')->with('error','Gagal hapus kategori: ' .$e);
        }


    }
}
