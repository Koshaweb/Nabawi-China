<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\bgimg;
use App\Models\company;
use App\Models\service;
use App\Models\testimonial;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showabout()
    {

        $data = bgimg::orderBy('ID', 'DESC')->paginate(1);
        $company = company::orderBy('ID', 'DESC')->get();
        $service = service::orderBy('ID', 'DESC')->get();
        $test = testimonial::orderBy('ID', 'DESC')->where('status', '=', 'approved')->paginate(6);
        return view('frontpages.about')->with(['bgimg' => $data, 'company' => $company, 'service' => $service, 'test' => $test]);
    }




    public function companyinfo()
    {

        $data = company::orderBy('ID', 'DESC')->get();
        return view('backend.companyinfo')->with(['info' => $data]);
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
            'number' => 'required',
            'email' => 'required',
            'address_en' => 'required',
            'address_fa' => 'required',
            'map' => 'required',
            'info_en' => 'required',
            'info_fa' => 'required',
            'img' => 'required'
        ]);

        $map = $request->file('map')->store('public');
        $img = $request->file('img')->store('public');

        $data = company::create([
            'number' => $request->input('number'),
            'email' => $request->input('email'),
            'address_en' => $request->input('address_en'),
            'address_fa' => $request->input('address_fa'),
            'info_en' => $request->input('info_en'),
            'info_fa' => $request->input('info_fa'),
            'map' => $map,
            'img' => $img
        ]);


        if($data){
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
        $data = company::find($id);
        return view('backend.editcompany')->with(['editinfo' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'number' => 'required',
            'email' => 'required',
            'address_en' => 'required',
            'address_fa' => 'required',
            'info_en' => 'required',
            'info_fa' => 'required',

        ]);

        $data = company::find($id);

        if($request->file('map')){
            $premap = $data->map;
            storage::delete($premap);
            $newmap = $request->file('map')->store('public');
            $data->map = $newmap;

        }if($request->file('img')){
            $preImage = $data->img;
            storage::delete($preImage);
            $newImage = $request->file('img')->store('public');
            $data->img = $newImage;
        }
         $data->number = $request->input('number');
         $data->email = $request->input('email');
         $data->address_en = $request->input('address_en');
         $data->address_fa = $request->input('address_fa');
         $data->info_en = $request->input('info_en');
         $data->info_fa = $request->input('info_fa');



        $data->update();

        return redirect()->route('allinfo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = company::find($id);

        Storage::delete($data->img, $data->map);
        $data->delete();

        return redirect()->route('allinfo');
    }
}
