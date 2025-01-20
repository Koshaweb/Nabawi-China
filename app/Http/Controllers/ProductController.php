<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use App\Models\catagory;
use App\Models\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = catagory::orderBy('ID', 'DESC')->get();
        return view('backend.addproduct')->with(['catagory' => $data]);
    }



    public function showproducts()
    {
        $catagory = catagory::orderBy('ID', 'DESC')->get();
        $product = product::orderBy('ID', 'DESC')->get();
        return view('backend.products', compact('catagory', 'product'));
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
        $request->validate([
            'name_en' => 'required',
            'name_fa' => 'required',

            'catagory_id' => 'required',

            'detail_en' => 'required',
            'detail_fa' => 'required',

            'price' => 'required',
            'img' => 'required'

        ]);

        $img = $request->file('img')->store('public');

        $data = product::create([
            'name_en' => $request->input('name_en'),
            'name_fa' => $request->input('name_fa'),

            'catagory_id' => $request->input('catagory_id'),

            'detail_en' => $request->input('detail_en'),
            'detail_fa' => $request->input('detail_fa'),

            'price' => $request->input('price'),
            'img' => $img
        ]);

        if($data){
            return redirect()->route('allproducts');
        }else {
         return redirect()->back()->error_log();
        }
    }



    public function feature(Request $request, string $id)
    {
        $data = product::where('id', $id)->update(['productType' => 'featured']);

        if($data){
            return redirect()->route('allproducts');
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('backend.editpro')->with(['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_fa' => 'required',
            'catagory_id' => 'required',
            'detail_en' => 'required',
            'detail_fa' => 'required',
            'price' => 'required'
        ]);

        $data = product::find($id);

        if (!$data) {
            return redirect()->back()->withErrors(['error' => 'Product not found!']);
        }

        if ($request->file('img')) {
            $preImage = $data->img;

            if ($preImage) {
                Storage::delete($preImage);
            }

            $newImage = $request->file('img')->store('public');
            $data->img = $newImage;
        }

        $data->name_en = $request->input('name_en');
        $data->name_fa = $request->input('name_fa');
        $data->catagory_id = $request->input('catagory_id');
        $data->detail_en = $request->input('detail_en');
        $data->detail_fa = $request->input('detail_fa');
        $data->price = $request->input('price');

        $data->save();

        return redirect()->route('allproducts')->with('success', 'Product updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = product::find($id);

        Storage::delete($data->img);
        $data->delete();

        return redirect()->back();
    }
}
