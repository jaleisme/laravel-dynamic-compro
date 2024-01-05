<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Alasan::all();
        return view('admin.alasan.main', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alasan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->is_active === "true"){
            $activeCheck = Alasan::where('is_active', 1)->first();
            $activeCheck->is_active = false;
            $activeCheck->update();

        }
        $fileName = auth()->id() . '_' . time() . '.'. $request->file('image')->extension();
        $title = $request->title;
        $description = $request->description;
        $request->file('image')->move(public_path('file'), $fileName);
        try{
            Alasan::create([
                'image' => $fileName,
                'title' => $title,
                'description' => $description,
                'is_active' => filter_var($request->is_active, FILTER_VALIDATE_BOOLEAN)
            ]);
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/alasan');
        }
        Session::flash('message', 'A new record has been added!');
        Session::flash('type', 'alert-success');
        return redirect('/admin/alasan');
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
        $data = null;
        try{
            $data = Alasan::findOrFail($id);
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/alasan');
        }
        return view('admin.alasan.edit', compact(['data']));
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
        $data = Alasan::findOrFail($id);

        if($data){
            if($request->is_active === "true"){
                $activeCheck = Alasan::where('is_active', 1)->first();
                $activeCheck->is_active = false;
                $activeCheck->update();

            }
            try{
                $data->title = $request->title;
                $data->description = $request->description;
                $data->is_active = filter_var($request->is_active, FILTER_VALIDATE_BOOLEAN);

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
            return redirect('/admin/alasan');
        } else {
            Session::flash('message', 'Data not existed!');
            Session::flash('type', 'alert-danger');
            return redirect('/admin/alasan');
        }
        return redirect('/admin/alasan');
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
            $data = Alasan::findOrFail($id);
            if($data->is_active === 1){
                $changeActive = Alasan::all()->except($id);
                $changeActive = $changeActive->first();
                $changeActive->is_active = true;
                $changeActive->update();
            }

            $image_path = "/file/".$data->image;  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $data->delete();
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/alasan');
        }
        Session::flash('message', 'A record has been deleted!');
        Session::flash('type', 'alert-danger');
        return redirect('/admin/alasan');
    }
}
