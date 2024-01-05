<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile as FileUploadedFile;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hero::all();
        return view('admin.hero.main', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hero.create');
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
        $title = $request->title;
        $subtitle = $request->subtitle;
        $request->file('image')->move(public_path('file'), $fileName);
        try{
            Hero::create([
                'image' => $fileName,
                'title' => $title,
                'subtitle' => $subtitle,
                'is_active' => filter_var($request->is_active, FILTER_VALIDATE_BOOLEAN)
            ]);
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/hero');
        }
        Session::flash('message', 'A new record has been added!');
        Session::flash('type', 'alert-success');
        return redirect('/admin/hero');
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
            $data = Hero::findOrFail($id);
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/hero');
        }
        return view('admin.hero.edit', compact(['data']));
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
        $data = Hero::findOrFail($id);

        if($data){
            try{
                $data->title = $request->title;
                $data->subtitle = $request->subtitle;
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
            return redirect('/admin/hero');
        } else {
            Session::flash('message', 'Data not existed!');
            Session::flash('type', 'alert-danger');
            return redirect('/admin/hero');
        }
        return redirect('/admin/hero');
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
            $data = Hero::findOrFail($id);
            $image_path = "/file/".$data->image;  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $data->delete();
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/hero');
        }
        Session::flash('message', 'A record has been deleted!');
        Session::flash('type', 'alert-danger');
        return redirect('/admin/hero');
    }
}
