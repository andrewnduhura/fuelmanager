<?php

namespace App\Http\Controllers;

use App\Models\SalesBook;
use App\Models\Pump;
use App\Models\Shift;
use App\Models\OpeningMeter;
use App\Models\ClosingMeter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arr['sales'] = DB::table('sales_books')
                    ->join('pumps','sales_books.pump_id','=','pumps.id')
                    ->join('products','sales_books.product_id','=','products.id')
                    ->join('shifts','sales_books.shift_id','=','shifts.shift_id')
                    ->select('*')
                    ->get();
        // $arr['pumps'] = Pump::all();
        // $arr['shifts'] = Shift::all();
        $arr['closing'] = ClosingMeter::all();
         return view('appviews.sales.sales')->with($arr);
       // echo $p;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $arr['sales'] = DB::table('pumps')
                        ->join('products','pumps.product_id','=','products.id')
                        ->join('prices','pumps.id','=','prices.pump_id')
                        ->select('*')
                        ->get();
        $arr['closing'] = ClosingMeter::all();
        $arr['shifts'] = Shift::all();
        return view('appviews.sales.add_sales')->with($arr);
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
        $new_sale = new SalesBook();
        
        $net_litres = $request->close - $request->open - $request->rtt;
        // $new_date = date('Y-m-d',strtotime($request->date));

        // $new_sale->sales_date = $new_date;
        // //$new_sale->

        // echo $new_date;
        $new_sale->pump_id = $request->pump;
        $new_sale->shift_id = $request->shift;
        $new_sale->product_id = $request->product;
        $new_sale->opening_meter = $request->open;
        $new_sale->closing_meter = $request->close;
        $new_sale->rtt = $request->rtt;
        $new_sale->rate = $request->price;
        $new_sale->litres = $net_litres;
        $new_sale->sales_total = $request->price * $net_litres;
        $new_sale->save();
        return redirect()->route('sales.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesBook  $salesBook
     * @return \Illuminate\Http\Response
     */
    public function show(SalesBook $salesBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesBook  $salesBook
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesBook $salesBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesBook  $salesBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesBook $salesBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesBook  $salesBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesBook $salesBook)
    {
        //
    }
}
