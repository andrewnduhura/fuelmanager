<?php

namespace App\Http\Controllers;

use App\Models\Pump;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PumpController extends Controller
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
        //$pumps = DB::table('pumps')->where('pump_id', $id);
        $arr['pumps'] = Pump::all();
        // print_r($arr) ;
        $arr['pumps'] = DB::table('pumps')
                    ->join('products','pumps.product_id',"=",'products.id')
                    ->select('pumps.id','pumps.pump_name','products.product_alias')
                    ->get();
       return view('appviews.pumps.pumps')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $arr['products'] = Products::all();
        return view('appviews.pumps.add_pump')->with($arr);
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
        $new_pump = new Pump();
        $new_pump->pump_name = $request->pump_name;
        $new_pump->product_id = $request->product_id;
        $new_pump->save();
        return redirect()->route('pumps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function show(Pump $pump)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function edit(Pump $pump)
    {
        //$song = DB::table('songs')->where('SongID', $id)->first()
        $arr['pumps'] = $pump;
        $arr['products'] = Products::all();
        return view('appviews.pumps.edit_pump')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pump $pump)
    {
        //$product->product_name = $request->input('product_name');
        $pump->pump_name = $request->pump_name;
        $pump->product_id = $request->product_id;
        $pump->save();
        return redirect()->route('pumps.index')->with("success","Data updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pump  $pump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pump $pump)
    {
        //
    }
}
