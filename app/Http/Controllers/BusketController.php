<?php

namespace App\Http\Controllers;

use App\Models\Busket;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBusketRequest;
use App\Http\Requests\UpdateBusketRequest;

class BusketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
			$buskets=DB::table('buskets')
			->join('users', 'buskets.user_id', '=', 'users.id')
			->join('products', 'buskets.product_id', '=', 'products.id')
			->select('buskets.*', 'products.*','users.*' )
            ->where('buskets.user_id',auth()->id())
			->get();
      return view('busket.index',[
				'buskets'=>$buskets
			]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Busket $busket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Busket $busket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusketRequest $request, Busket $busket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Busket $busket)
    {
        //
    }
}
