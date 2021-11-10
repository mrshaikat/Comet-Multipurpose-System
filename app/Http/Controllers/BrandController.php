<?php

namespace App\Http\Controllers;

use datatables;
use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(Brand::latest()->get())->addColumn('action', function ($data) {
                $output = '<a href="#" edit_brand_id="' . $data['id'] . '" class="btn btn-sm bg-success-light brand_edit" data-toggle="modal" href="#">
                <i class="fe fe-pencil"></i> Edit
            </a>';
                $output .= '<a class="btn btn-sm bg-danger-light ml-1 brand_del" delete_brand_id="' . $data['id'] . '" href="#"><i class="fe fe-trash"></i> Delete</a>';
                return $output;
            })->rawColumns(['action'])->make(true);
        }
        return view('admin.product.brand.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('view.name');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->hasFile('logo')) {
            $img = $request->file('logo');
            $file_name = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/products/brands/'), $file_name);
        } else {
            $file_name = '';
        }
        Brand::create([
            'name' => $request->name,
            'slug' => $this->getSlug($request->name),
            'logo' => $file_name,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        if ($request->hasFile('logo')) {
            $img = $request->file('logo');
            $file_name = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/products/brands/'), $file_name);
            unlink('media/products/brands/' . $request->old_photo);
        } else {
            $file_name = $request->old_photo;
        }
        $brand->name =  $request->name;
        $brand->slug =  $this->getSlug($request->name);
        $brand->logo =  $file_name;
        $brand->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }

    public function statusUpdate($id)
    {
        $data = Brand::find($id);

        if ($data->status == true) {
            $data->status = false;
        } else {
            $data->status = true;
        }

        $data->update();
    }

    /**
     * Brand Delete
     */

    public function brandDelete($id)
    {
        try {
            $data = Brand::find($id);
            $brand_logo = $data->logo;
            $brand_name = $data->name;
            $data->delete();
            if (file_exists('media/products/brands/' . $brand_logo)) {

                unlink('media/products/brands/' . $brand_logo);
            }
            return $brand_name . ' Data Delete successfull';
        } catch (Exception $err) {
            return "Brand Failed";
        }
    }

    public function brandEdit($id)
    {
        $edit_data  =  Brand::find($id);

        return [
            'id' => $edit_data->id,
            'name' => $edit_data->name,
            'logo' => $edit_data->logo,
        ];
    }
}