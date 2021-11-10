<?php

namespace App\Http\Controllers;

use App\Models\Productcategory;
use Illuminate\Http\Request;

class ProductcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Productcategory::orderby('name', 'ASC')->get();
        $first_level_cat = Productcategory::where('parent', null)->orderby('name', 'ASC')->get();
        return view('admin.product.category.index', [
            'all_data' => $data,
            'all_first_cat' => $first_level_cat
        ]);
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

        $this->validate($request, [
            'name' => 'required|unique:productcategories',
        ]);
        // Category Image Upload
        $image = $this->imageUpload($request, 'image', 'media/products/category/');



        Productcategory::create([
            'name' => $request->name,
            'slug' => $this->getSlug($request->name),
            'image' => $image,
            'icon' => $request->icon,
            'parent' => (!empty($request->parent)) ? $request->parent : null,

        ]);


        return redirect()->back()->with('success', 'Product Category create successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Productcategory $productcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Productcategory $productcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productcategory $productcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function categoryDelete($id)
    {

        $delete_cat = Productcategory::find($id);

        $data_id = $delete_cat->id;
        $parent_id = $delete_cat->parent;

        $this->catMnage($data_id, $parent_id);

        $delete_cat->delete();
        return redirect()->back()->with('success', 'Category Delete successfull');
    }

    /**
     * Category Level Manage
     */

    public function catMnage($id, $parent)
    {
        $data = Productcategory::where('parent', $id)->get();
        foreach ($data as $cat) {
            $cat->parent = $parent;
            $cat->update();
        }
    }

    /**
     * Category Edit with AJAX
     */
    public function categoryEdit($id)
    {
        $data = Productcategory::find($id);

        $all_cat = Productcategory::all();



        $cat_list = '<option style="display:none !important;" value="">-No parent selected-</option>';
        foreach ($all_cat as $cat) {
            $selected = '';
            if ($cat->id == $data->parent) {
                $selected = 'selected="selected"';
            }
            $cat_list .= "<option {$selected} value=\"{$cat->id}\">{$cat->name}</option>";
        }


        return [
            'name' => $data->name,
            'id' => $data->id,
            'image' => $data->image,
            'icon' => $data->icon,
            'parent' => $data->parent,
            'cat_list' => $cat_list,
        ];
    }

    /**
     * Update Product Category
     */
    public function categoryUpdate(Request $request)
    {


        if ($request->hasFile('image')) {
            $image = $this->imageUpload($request, 'image', 'media/products/category/');
            unlink('media/products/category/' . $request->old_image);
        } else {
            $image = $request->old_image;
        }

        $update_data = Productcategory::find($request->edit_id);
        $this->catMnage($update_data->id, $update_data->parent);

        $update_data->name = $request->name;
        $update_data->slug = $this->getSlug($request->name);
        $update_data->icon = $request->icon;
        $update_data->image = $image;
        $update_data->parent = $request->parent;
        $update_data->update();

        return back();
    }
}