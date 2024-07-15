<?php

namespace App\Http\Controllers;

use App\Models\milestone;
use App\Models\project;
use Illuminate\Http\Request;

class milesProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $projectId)
    {
        //
        $data_project = project::all();
        $data_milestone = milestone::all();
        $project = project::find($projectId);
        $data = $project->transaction()->paginate(10);
        return view('milestone', compact('data','data_project','data_milestone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data_project = project::all();
        $data_milestone = milestone::all();
        return view('create.c-milestone', compact('data_project','data_milestone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name_milestone'=>'required',
        //     'date_milestone'=>'required',
        //     'date_real'=>'required'
        // ]);
        $projectId = $request->input('project_id');
        $milestoneId = $request->input('milestone_id');
        $dateMilestone = $request->input('date_milestone');
        $dateReal = $request->input('date_real');

        $project = project::find($projectId);
        $project->milestones()->attach($milestoneId, ['date_milestone'=>$dateMilestone, 'date_real'=>$dateReal]);

        return redirect()->back()->with('success','Masukkan data berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($projectId)
    {
        //
        $projects = project::all();
        $milestones = milestone::all();
        $project = project::find($projectId);
        $data = $project->milestones;
        return view('update.u-milestone-project', compact('projects', 'milestones','project','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $projectId, $milestoneId)
    {
        //
        $project = project::findOrFail($projectId);
        $project->milestones()->updateExistingPivot($milestoneId, [
        'date_milestone' => $request->input('date_milestone'),
        'date_real' => $request->input('date_real')
        ]);
        return redirect('milestone-project')->with('success','Edit Data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($milestoneId)
    {
        $milestone = milestone::find($milestoneId);
        $milestone->projects()->detach();
        return redirect()->back()->with('success','Hapus data berhasil!');
    }
}
