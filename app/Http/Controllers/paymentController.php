<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        $data = payment::query();

        if($query){
            $data = payment::where('code_payment', 'LIKE', '%' .$request->search. '%')
            ->orWhere('type_payment', 'LIKE', '%' .$request->search. '%'); //return query
        }
        $data = $data->paginate(5); //return query
        return view('payment', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create.c-payment');
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
            'code_payment'=>'required',
            'type_payment'=>'required'
        ]);
        $data_payment = [
            'code_payment'=>$request->code_payment,
            'type_payment'=>$request->type_payment
        ];
        payment::create($data_payment);
        return redirect('/payment-master')->with('success','Masukkan data berhasil!');
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
        $data = payment::find($id);
        return view('update.u-payment')->with('data', $data);
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
        $data = payment::find($id);
        $data->update($request->all());
        return redirect('/payment-master')->with('success','Edit data berhasil!');
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
            $data = payment::find($id);
            $data->delete();
            return redirect('/payment-master')->with('success','Hapus data berhasil!');
        }catch (QueryException $e){
            return redirect('/payment-master')->with('error','Gagal hapus data: ' .$e);
        }
    }
}
