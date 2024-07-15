<?php

namespace App\Http\Controllers;

use App\Models\buyTransaction;
use App\Models\material;
use App\Models\project;
use Illuminate\Http\Request;


class reportController extends Controller
{
    public function index()
    {
        //
        $project = project::all();
        $material = material::all();
        return view('report', compact('project','material'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function generatePDF(Request $request)
    {

        // Ambil hasil input dari user
        $project = $request->input('project_id');
        $material = $request->input('material_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Mulai dengan query dasar
        $query = buyTransaction::query();

        // Filter berdasarkan proyek jika input proyek diberikan
        if ($request->filled('project_id')) {
            $query->where('project_id', $project)->with(['payment']);
        }

        // Filter berdasarkan material jika input material diberikan
        if ($request->filled('material_id')) {
            $query->where('material_id', $material)->with('payment');
        }

        // Filter berdasarkan project dan material jika input project dan material diberikan
        if ($request->filled('project_id') && $request->filled('material_id')) {
            $query->where('project_id', $project)->where('material_id', $material)->with('payment');
        }

        // Filter berdasarkan tanggal awal jika input tanggal awal diberikan
        if ($request->filled('start_date')) {
            $query->whereDate('date_transaction', '>=', $startDate)->with('payment');
        }

        // Filter berdasarkan tanggal akhir jika input tanggal akhir diberikan
        if ($request->filled('end_date')) {
            $query->whereDate('date_transaction', '<=', $endDate)->with('payment');
        }

        // Ambil data yang sesuai dengan query yang dibuat
        $transaction = $query->get();

        if (!$request->filled('project_id') && !$request->filled('material_id') &&
        !$request->filled('start_date') && !$request->filled('end_date')) {
        $transaction = buyTransaction::all();
        }

        $transactions = buyTransaction::with('projects')->first();
        // $diff = buyTransaction::selectRaw('SUM(usd_price_material - usd_budget) as difference')
        // ->where('project_id', $project)
        // ->where('material_id', $project)
        // ->first();
        // $totalDifference = $diff->difference;

        return view('report-pdf', compact('transaction', 'transactions'));
    }
}
