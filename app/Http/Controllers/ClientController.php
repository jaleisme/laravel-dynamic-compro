<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Client::all();
        return view('admin.client.main', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
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
        $name = $request->name;
        $request->file('image')->move(public_path('file'), $fileName);
        try{
            Client::create([
                'image' => $fileName,
                'name' => $name,
                'is_active' => filter_var($request->is_active, FILTER_VALIDATE_BOOLEAN)
            ]);
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/client');
        }
        Session::flash('message', 'A new record has been added!');
        Session::flash('type', 'alert-success');
        return redirect('/admin/client');
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
            $data = Client::findOrFail($id);
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/client');
        }
        return view('admin.client.edit', compact(['data']));
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
        $data = Client::findOrFail($id);

        if($data){
            try{
                $data->name = $request->name;
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
            return redirect('/admin/client');
        } else {
            Session::flash('message', 'Data not existed!');
            Session::flash('type', 'alert-danger');
            return redirect('/admin/client');
        }
        return redirect('/admin/client');
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
            $data = Client::findOrFail($id);
            $image_path = "/file/".$data->image;  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $data->delete();
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/client');
        }
        Session::flash('message', 'A record has been deleted!');
        Session::flash('type', 'alert-danger');
        return redirect('/admin/client');
    }
}
