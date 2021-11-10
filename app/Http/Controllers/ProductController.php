<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Productcategory;
use App\Models\Producttag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->get();
        return view('admin.product.index', [
            'all_data' => $data

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_cat = Productcategory::where('status', true)->where('parent', null)->orderby('name', 'ASC')->get();
        $all_tag_data = Producttag::where('status', true)->orderby('name', 'ASC')->get();
        $all_brand_data = Brand::where('status', true)->orderby('name', 'ASC')->get();
        return view('admin.product.create', [
            'all_category' => $all_cat,
            'all_tag' => $all_tag_data,
            'all_brand' => $all_brand_data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'regular_price' => 'required',
            'quantity' => 'required',
        ]);
        //Product size manage

        if (isset($request->sizename)) {
            $size = [];
            $i = 0;
            foreach ($request->sizename as $name) {
                array_push($size, [
                    'size' => $name,
                    'price' => $request->sizeprice[$i],
                    'sale_price' => $request->sizesaleprice[$i],

                ]);

                $i++;
            }
            $p_size = json_encode($size);
        }

        Product::create([
            'name' => $request->name,
            'slug' => $this->getSlug($request->name),
            'regular_price' => $request->regular_price,
            'sale_price' => $request->sale_price,
            'stock' => $request->quantity,
            'desc' => $request->desc,
            'short_desc' => $request->short_desc,
            'trending' => $request->trending,
            'size' => $p_size,
        ]);

        return redirect()->back()->with('success', 'Product added successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
