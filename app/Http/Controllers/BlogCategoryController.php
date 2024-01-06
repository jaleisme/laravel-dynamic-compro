<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BlogCategory::all();
        return view ('admin.blog-category.main', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.blog-category.create');
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
            BlogCategory::create([
                'name' => $request->name
            ]);
        } catch (QueryException $q){
            Session::flash('message', $q);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/blog-category');
        }
        Session::flash('message', 'A new record has been added!');
        Session::flash('type', 'alert-success');
        return redirect('/admin/blog-category');
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
        $data = BlogCategory::where('id', $id)->first();
        return view ('admin.blog-category.edit', compact(['data']));
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
            BlogCategory::where('id', $id)
                ->first()
                ->update([
                    'name' => $request->name
                ]);
        } catch (QueryException $q){
            Session::flash('message', $q);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/blog-category');
        }
        Session::flash('message', 'A record has been updated!');
        Session::flash('type', 'alert-warning');
        return redirect('/admin/blog-category');
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
            BlogCategory::destroy($id);
        } catch(QueryException $q){
            Session::flash('message', $q);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/blog-category');
        }
        Session::flash('message', 'A record has been deleted!');
        Session::flash('type', 'alert-danger');
        return redirect('/admin/blog-category');
    }
}
