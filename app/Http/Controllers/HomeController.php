<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\bgimg;
use App\Models\catagory;
use App\Models\member;
use App\Models\service;
use App\Models\product;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showhome(Request $request)
    {

        $catagory = [];

        $data = bgimg::orderBy('ID', 'DESC')->paginate(1);
        $catagory = catagory::orderBy('ID', 'DESC')->get();
        $service = service::orderBy('ID', 'DESC')->get();
        $featured = product::orderBy('ID', 'DESC')->where('productType', 'featured')->paginate(12);


        $search = $request->input('search');

        if ($search){
            $catagory = catagory::where('name_en', 'LIKE', "%$search%")
            ->orwhere('name_fa', 'LIKE', "%$search%")
                        ->get();

        }

        return view('frontpages.index')->with(['bgimg' =>$data, 'allct' =>$catagory, 'service'=>$service, 'featured'=>$featured]);
    }



    public function showmember()
    {

        $data = member::orderBy('ID', 'DESC')->get();
        return view('backend.member')->with(['member' =>$data]);
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
            'email'
        ]);

        $data = member::create([
            'email' => $request->input('email')
        ]);

        if($data){
            session()->flash("member");
            return redirect()->back();
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
        $data = member::find($id);

        $data->delete();

        return redirect()->back();
    }
}
