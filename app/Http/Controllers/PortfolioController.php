<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class PortfolioController extends Controller
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
        // return view('portfolio');
        $data['portfolios'] = Portfolio::all();
        return view('portfolio', $data);
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
        // $request->validate([
        //     'Firstname' => 'required',
        //     'Lastname' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $input = $request->all();

        if ($image = $request->file('Project_Screenshot')) {
            $destinationPath = 'image/Portfolio/';
            $picture = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $picture);
            $input['Project_Screenshot'] = "$picture";
        }

        Portfolio::create($input);
        return Redirect(route('portfolio.index'))->with('success','User created successfully.');
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
    public function update(Request $request, Portfolio $portfolio)
    {
        $input = $request->all();
  
        if ($image = $request->file('Project_Screenshot')) {
            $destinationPath = 'image/Portfolio/';
            $profileImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['Project_Screenshot'] = "$profileImage";
        } else{
            unset($input['image']);
        }
          
        $portfolio->update($input);
        
        return redirect()->route('portfolio.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
 
        return Redirect(route('portfolio.index'));
    }
}
