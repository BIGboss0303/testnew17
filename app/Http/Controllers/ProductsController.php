<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category_id,Request $request)
    {

        if($request->filter){
            $products=Products::filter($category_id,$request);
        }
        else if($request->cancel){

            $products=Products::orderBy('updated_at')->where('category_id',$    category_id)->paginate(10);
        }
        else{


            $products=Products::orderBy('updated_at')->where('category_id',$category_id)->paginate(10);
        }


        return view('products.index',[
            'request'=>$request,
            'products'=>$products,
            'elements'=>$products->withQueryString()->links()->elements
        ]);
        dd($category_id);


        // $products=Product::filter($request);
        //         return view('products.index',[
        //     'products'=>$products,
        //     'elements'=>$products->links()->elements
        // ]);
    }
    public function sort(){
        $categories=Category::get();
        return view('products.sort',[
            'categories'=>$categories
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
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Products::find($id);

        return view('products.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
