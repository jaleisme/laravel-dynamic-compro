<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\FooterLink;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Footer::first();
        $links = FooterLink::all();
        return view('admin.footer.main', compact(['data', 'links']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footer.create-link');
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
        $footer = Footer::first();
        try{
            FooterLink::create([
                'image' => $fileName,
                'title' => $request->title,
                'link' => $request->link,
                'footer_id' => $footer->id
            ]);
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/footer');
        }
        Session::flash('message', 'A new record has been added!');
        Session::flash('type', 'alert-success');
        return redirect('/admin/footer');
    }

    public function editLink(Request $request, $id)
    {
        $data = FooterLink::where('id', $id)->first();
        try{                // Check if there's a file
            $file = $request->file('image');
            if($file){
                $fileName = auth()->id() . '_' . time() . '.'. $request->file('image')->extension();
                $request->file('image')->move(public_path('file'), $fileName);
                $data->image = $fileName;
            }

            $data->title = $request->title;
            $data->link = $request->link;
            $data->update();
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/footer');
        }
        Session::flash('message', 'A link record has been updated!');
        Session::flash('type', 'alert-warning');
        return redirect('/admin/footer');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = FooterLink::where('id', $id)->first();
        return view('admin.footer.edit-link', compact(['data']));
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
            Footer::where('id', $id)->first()->update([
                'contact_detail' => $request->contact_detail
            ]);
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/footer');
        }
        Session::flash('message', 'Footer detail has been updated!');
        Session::flash('type', 'alert-warning');
        return redirect('/admin/footer');
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
            FooterLink::findOrFail($id)->delete();
        } catch (QueryException $e) {
            Session::flash('message', $e);
            Session::flash('type', 'alert-danger');
            return redirect('/admin/footer');
        }
        Session::flash('message', 'Footer link has been removed!');
        Session::flash('type', 'alert-danger');
        return redirect('/admin/footer');
    }
}
