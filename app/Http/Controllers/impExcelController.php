<?php

namespace App\Http\Controllers;

use App\Exports\DetailProjectExport;
use App\Exports\MaterialExport;
use App\Imports\DetailProjectImport;
use App\Imports\MaterialImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class impExcelController extends Controller
{
    // IMPORT EXCEL MATERIAL
    public function impMatExcel(Request $request)
    {
        $request->validate([
            'file'=>'required|mimes:xlsx,xls,csv'
        ]);
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataMaterial', $namaFile);

        // Excel::import(new MaterialImport, $file);
        Excel::import(new MaterialImport, public_path('/DataMaterial/'.$namaFile));
        return redirect()->back()->with('success','Import Excel berhasil!');
    }

    // EXPORT EXCEL MATERIAL
    public function expMatExcel(){
        return Excel::download(new MaterialExport, 'material.xlsx');
    }

    // IMPORT EXCEL DETAIL PROJECT
    public function impDetProExcel(Request $request)
    {
        $request->validate([
            'file'=>'required|mimes:xlsx,xls,csv'
        ]);
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataDetailProject', $namaFile);

        // Excel::import(new MaterialImport, $file);
        Excel::import(new DetailProjectImport, public_path('/DataDetailProject/'.$namaFile));
        return redirect()->back()->with('success','Import Excel berhasil!');
    }

    // EXPORT EXCEL DETAIL PROJECT
    public function expDetProExcel(){
        return Excel::download(new DetailProjectExport, 'detail-project.xlsx');
    }
}
