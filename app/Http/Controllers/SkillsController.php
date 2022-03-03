<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\About;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('about')
        ->with('about', About::all())
        ->with('skills', Skill::all());;
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
        $request->validate([
            'Skill_Name' => 'required',
            'Expertise_Level' => 'required|numeric',
        ]);

        // //Shorhand Create without image
        Skill::create($request->all());
        // return Redirect(route('about.index'));
        return Redirect(route('about.index'))->with('success','Skill created successfully.');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $skill = Skill::find($id);
    	$input = $request->all();
		$skill->fill($input)->save();
        // //Shorhand Update without image
        // $skill->update($request->all());
        return Redirect(route('about.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
 
        return Redirect(route('about.index'));
    }
}