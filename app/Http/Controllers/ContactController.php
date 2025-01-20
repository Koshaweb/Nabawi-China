<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\bgimg;
use App\Models\contact;
use App\Models\company;
use App\Models\service;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showcontact()
    {
        $data = bgimg::orderBy('ID', 'DESC')->paginate(1);
        $company = company::orderBy('ID', 'DESC')->get();
        $service = service::orderBy('ID', 'DESC')->get();
        return view('frontpages.contact')->with(['bgimg' => $data, 'company' => $company, 'service' => $service]);
    }



    public function showmsgs()
    {

        $data = contact::orderBy('ID', 'DESC')->get();
        return view('backend.msgs')->with(['msgs' => $data]);
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
            'name',
            'email',
            'number',
            'message'

        ]);

        $data = contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'message' => $request->input('message'),

        ]);

        if($data){
            session()->flash("contact");
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
        $data = contact::find($id);
        $data->delete();

        return redirect()->back();
    }
}
