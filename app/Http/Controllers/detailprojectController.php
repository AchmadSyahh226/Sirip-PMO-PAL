<?php

namespace App\Http\Controllers;

use App\Models\buyTransaction;
use App\Models\material;
use App\Models\payment;
use App\Models\project;
use Illuminate\Http\Request;

class detailprojectController extends Controller
{
    public function index(Request $request, $projectid)
    {
        // Index function
        $project = project::all();
        $material = material::all();
        $payment = payment::all();

        // $search = $request->input('search');
        // $data = buyTransaction::query();

        // if($search){
        //     $data = buyTransaction::with(['material','payment'])
        //         ->where('id', 'LIKE', "%$search%")
        //         ->orWhere('date_transaction', 'LIKE', "%$search%")
        //         ->orWhere('rp_budget', 'LIKE', "%$search%")
        //         ->orWhere('rp_price_material', 'LIKE', "%$search%")
        //         ->orWhereHas('material', function($query) use ($search){
        //             $query->where('name_material', 'LIKE', "%$search%");
        //         })
        //         ->orWhereHas('payment', function($query) use ($search){
        //             $query->where('type_payment', 'LIKE', "%$search%");
        //         }); //return query not collection
        // }
        // $data = $data->paginate(5);

        $projects = project::find($projectid);
        $data = $projects->transaction()->paginate(10);
        return view('detailproject', compact('data','project','material','payment','projects'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'project_id'=>'required',
            'material_id'=>'required',
        ]);
        $data = buyTransaction::create([
            'project_id'=>$request->project_id,
            'material_id'=>$request->material_id,
            'date_transaction'=>$request->date_transaction,
            'idr_budget'=>$request->idr_budget,
            'usd_budget'=>$request->usd_budget,
            'idr_price_material'=>$request->idr_price_material,
            'usd_price_material'=>$request->usd_price_material,
            'idr_down_payment'=>$request->idr_down_payment,
            'usd_down_payment'=>$request->usd_down_payment,
            'idr_lc_skbdn'=>$request->idr_lc_skbdn,
            'usd_lc_skbdn'=>$request->usd_lc_skbdn,
            'idr_price_warranty'=>$request->idr_price_warranty,
            'usd_price_warranty'=>$request->usd_price_warranty,
            'date_inquiry'=>$request->date_inquiry,
            'date_quotation'=>$request->date_quotation,
            'date_evatek'=>$request->date_evatek,
            'date_sign_contract'=>$request->date_sign_contract,
            'date_payment'=>$request->date_payment,
            'date_fob'=>$request->date_fob,
            'date_cif'=>$request->date_cif,
            'date_franco'=>$request->date_franco,
            'date_instal'=>$request->date_instal
        ]);
        // $data->payment()->attach($request->payment_id);
        return redirect()->back()->with('success','Masukkan data berhasil!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // Edit Function
        $projects = project::all();
        $materials = material::all();
        $payments = payment::all();
        $data = buyTransaction::find($id);
        return view('update.u-detail-project', compact('projects','materials','payments'))->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $data = buyTransaction::find($id);
        $data->update($request->all());
        // $data->payment()->sync($request->payment_id);
        return redirect()->back()->with('success', "Edit data berhasil!");
    }

    public function destroy($id)
    {
        //
        $data = buyTransaction::find($id);
        // $data->payment()->detach();
        $data->delete();
        return redirect()->back()->with('success','Hapus Data berhasil!');
    }
}
