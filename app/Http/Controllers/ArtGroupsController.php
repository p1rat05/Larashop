<?php

namespace App\Http\Controllers;

use App\ArtGroup;
use Illuminate\Http\Request;

class ArtGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artGroups = ArtGroup::All();
        return view('artgroups.index', compact('artGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artgroups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
                'name' => 'required'
            ]);

        $artGroup = new ArtGroup();
        $artGroup->name = request('name');
        $artGroup->save();

        return redirect()->action('ArtGroupsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArtGroup  $articleGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ArtGroup $articleGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArtGroup  $articleGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtGroup $artGroup)
    {
//        $artGroup = ArtGroup::find($artGroup->id);
        return view('artgroups.edit', compact(request(), ['artGroup']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArtGroup  $articleGroup
     * @return \Illuminate\Http\Response
     */
    public function update(ArtGroup $artGroup)
    {
        $this->validate(request(), [
            'name' => 'required'
        ]);

        $artGroup->name = request('name');
        $artGroup->save();

        return redirect()->action('ArtGroupsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArtGroup  $articleGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtGroup $artGroup)
    {
        $artGroup->delete();
        return redirect()->action('ArtGroupsController@index');
    }
}
