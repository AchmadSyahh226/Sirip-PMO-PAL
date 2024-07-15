<?php

namespace App\Http\Controllers;

use App\Models\milestone;
use Illuminate\Http\Request;

class milestoneMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        $data = milestone::query();

        if($query){
            $data = milestone::where('name_milestone', 'LIKE', '%' .$request->search. '%')
            ->orWhere('ket_milestone', 'LIKE', '%' .$request->search. '%'); //return query not collection
        }
        $data = $data->paginate(5); //return query not collection
        return view('milestonemaster', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
            'name_milestone'=>'required',
        ]);
        $data_milestone = [
            'name_milestone'=>$request->name_milestone,
            'percent_milestone'=>$request->percent_milestone,
            'ket_milestone'=>$request->ket_milestone
        ];
        milestone::create($data_milestone);
        return redirect()->back()->with('success','Tambah data berhasil!');
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
        $data = milestone::find($id);
        return view('update.u-milestone')->with('data', $data);
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
        $data = milestone::find($id);
        $data->update($request->all());
        return redirect('/milestone-master')->with('success','Edit Data berhasil!');
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
        $data = milestone::find($id);
        $data->delete();
        return redirect()->back()->with('success','Hapus data berhasil!');
    }
}
