<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('project')->select('project.*', 'project_category.name AS category_name')->join('project_category', 'project_category.id', '=', 'project.category_id')->get()->groupBy('project.id');
        $data = Collection::unwrap($data);
        $data = reset($data);
        return view('admin.project.main', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ProjectCategory::all();
        return view('admin.project.create', compact(['category']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = auth()->id() . '_' . time() . '.'. $request->file('image')->extension();
        $request->file('image')->move(public_path('file'), $fileName);
        try{
            Project::create([
                'image' => $fileName,
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category_id
            ]);
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/project');
        }
        Session::flash('message', 'A new record has been added!');
        Session::flash('type', 'alert-success');
        return redirect('/admin/project');
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
        $data = DB::table('project')->select('project.*', 'project_category.name AS category_name')->join('project_category', 'project_category.id', '=', 'project.category_id')->where('project.id', $id)->first();
        $category = ProjectCategory::all();
        return view('admin.project.edit', compact(['category', 'data']));
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
        $data = Project::findOrFail($id);

        if($data){
            try{
                $data->title = $request->title;
                $data->description = $request->description;
                $data->category_id = $request->category_id;

                // Check if there's a file
                $file = $request->file('image');
                if($file){
                    $fileName = auth()->id() . '_' . time() . '.'. $request->file('image')->extension();
                    $request->file('image')->move(public_path('file'), $fileName);
                    $data->image = $fileName;
                }
                $data->update();
            } catch(QueryException $e){
                Session::flash('message', $e);
                Session::flash('type', 'alert-danger');
            }
            Session::flash('message', 'A record has been updated!');
            Session::flash('type', 'alert-warning');
            return redirect('/admin/project');
        } else {
            Session::flash('message', 'Data not existed!');
            Session::flash('type', 'alert-danger');
            return redirect('/admin/project');
        }
        return redirect('/admin/project');
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
    }
}
