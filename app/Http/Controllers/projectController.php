<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        $data = project::query();

        if($query){
            $data = project::where('name_project', 'LIKE', '%' .$request->search. '%')
                ->orWhere('code_project', 'LIKE', '%' .$request->search. '%')
                ->orWhere('ket_project', 'LIKE', '%' .$request->search. '%'); //return query not collection
        }
        $data = $data->paginate(5); //return query not collection
        return view('project', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.c-project');
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
            'code_project'=>'required',
            'name_project'=>'required'
        ]);
        $data_project = [
            'code_project'=>$request->code_project,
            'name_project'=>$request->name_project,
            'ket_project'=>$request->ket_project
        ];
        project::create($data_project);
        return redirect('/project-master')->with('success','Tambah data berhasil!');
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
        $data = project::find($id);
        return view('update.u-project')->with('data', $data);
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
        $data = project::find($id);
        $data->update($request->all());
        return redirect('/project-master')->with('success','Edit data berhasil!');
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
            $data = project::find($id);
            $data->delete();
            return redirect('/project-master')->with('success','Hapus data berhasil!');
        } catch (QueryException $e) {
            return redirect('/project-master')->with('error','Gagal hapus proyek: ' .$e->getMessage());
        }

    }
}
