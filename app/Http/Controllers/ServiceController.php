<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = service::orderBy('ID', 'DESC')->get();
        return view('backend.service')->with(['service' => $data]);
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
            'detail_en' => 'required',
            'detail_fa' => 'required',

        ]);


        $data = service::create([
            'name_en' => $request->input('name_en'),
            'name_fa' => $request->input('name_fa'),
            'detail_en' => $request->input('detail_en'),
            'detail_fa' => $request->input('detail_fa'),
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
        $data = service::find($id);
        return view('backend.editservice')->with(['service' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_en' => 'required',
            'name_fa' => 'required',
            'detail_en' => 'required',
            'detail_fa' => 'required'

        ]);

        $data = service::find($id);


         $data->name_en = $request->input('name_en');
         $data->name_fa = $request->input('name_fa');

         $data->detail_en = $request->input('detail_en');
         $data->detail_fa = $request->input('detail_fa');

        $data->update();

        return redirect()->route('service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = service::find($id);

        $data->delete();

        return redirect()->route('service');
    }
}
