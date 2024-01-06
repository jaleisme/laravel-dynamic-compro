<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProjectCategory::all();
        return view ('admin.project-category.main', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.project-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            ProjectCategory::create([
                'name' => $request->name
            ]);
        } catch (QueryException $q){
            Session::flash('message', $q);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/project-category');
        }
        Session::flash('message', 'A new record has been added!');
        Session::flash('type', 'alert-success');
        return redirect('/admin/project-category');
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
        $data = ProjectCategory::where('id', $id)->first();
        return view ('admin.project-category.edit', compact(['data']));
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
        try{
            ProjectCategory::where('id', $id)
                ->first()
                ->update([
                    'name' => $request->name
                ]);
        } catch (QueryException $q){
            Session::flash('message', $q);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/project-category');
        }
        Session::flash('message', 'A record has been updated!');
        Session::flash('type', 'alert-warning');
        return redirect('/admin/project-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            ProjectCategory::destroy($id);
        } catch(QueryException $q){
            Session::flash('message', $q);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/project-category');
        }
        Session::flash('message', 'A record has been deleted!');
        Session::flash('type', 'alert-danger');
        return redirect('/admin/project-category');
    }
}
