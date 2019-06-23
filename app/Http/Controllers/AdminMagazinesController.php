<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magazine;
use App\Sponsor;

class AdminMagazinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {   
        $this->middleware('auth');
        $this->middleware('Admin');
    }
    public function index()
    {
        //
        $magazines = Magazine::all();
        return view('admin.magazines.index')->with('magazines', $magazines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
    public function addSponsor($magazine_id){
        $sponsors = Sponsor::all();
        $magazine = Magazine::findOrFail($magazine_id);
        return view('admin.magazines.sponsors', compact('sponsors', 'magazine'));
    }
    public function attachSponsor(Request $request,$magazine_id, $sponsor_id){
        $sponsor = Sponsor::findOrFail($sponsor_id);
        $magazine = Magazine::findOrFail($magazine_id);
        //Attach the sponsor to the magazine only if it doesn't have it
        if (! $magazine->sponsors->contains($sponsor_id)) {
            $magazine->sponsors()->attach($sponsor);
        }
        return redirect('/admin/magazines/'.$magazine_id.'/sponsors');
    }
    public function detachSponsor(Request $request,$magazine_id, $sponsor_id){
        $sponsor = Sponsor::findOrFail($sponsor_id);
        $magazine = Magazine::findOrFail($magazine_id);
        $magazine->sponsors()->detach($sponsor);
        return redirect('/admin/magazines/'.$magazine_id.'/sponsors');
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
        //
        $magazine = Magazine::findOrFail($id);
        //check activation status and reverse it
        $magazine->is_active == 0 ? $magazine->is_active = 1 : $magazine->is_active = 0;
        $magazine->save();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $magazine = Magazine::findOrFail($id);
        $magazine->articles()->delete();
        $magazine->delete();
        return back();
    }
}
