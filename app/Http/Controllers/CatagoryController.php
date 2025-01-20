<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Models\catagory;
use App\Models\product;
use App\Models\order;


class CatagoryController extends Controller
{





    public function addcatagory()
    {
        $data = catagory::orderBy('ID', 'DESC')->get();
        return view('backend.addcatagory')->with(['catagory' => $data]);
    }






    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
            'name_fa' => 'required',
            'img' => 'required'
        ]);

        $img = $request->file('img')->store('public');

        $data = catagory::create([
            'name_en' => $request->input('name_en'),
            'name_fa' => $request->input('name_fa'),
            'img' => $img
        ]);

        if($data){
             return redirect()->back();

        }

    }








    public function show(string $id)
    {
        if(catagory::where('id', $id)->exists()) {

            $catagory = catagory::where('id', $id)->first();
            $product = product::where('catagory_id', $catagory->id)->get();
        }

        return view('frontpages.catagory', compact('catagory', 'product'));
    }








    public function edit(string $id)
    {
        $data = catagory::find($id);
        return view('backend.editcatagory')->with(['editct' => $data]);
    }








    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_fa' => 'required'


        ]);

        $data = catagory::find($id);

        if($request->file('img')){
            $preImage = $data->img;
            storage::delete($preImage);
            $newImage = $request->file('img')->move('public');
            $data->img = $newImage;

        }
         $data->name_en = $request->input('name_en');
         $data->name_fa = $request->input('name_fa');


        $data->update();

        return redirect()->route('allct');
    }








    public function destroy(string $id)
    {
        $data = catagory::find($id);

        Storage::delete($data->img);
        $data->delete();

        return redirect()->route('allct');
    }



}
