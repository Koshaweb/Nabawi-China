<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\bgimg;

class bgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = bgimg::orderBy('id', 'DESC')->paginate(1);

        return view('backend.bgimg')->with(['bgimg' => $data]);

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

            'homebg' => 'required',
            'aboutbg' => 'required',
            'offerbg' => 'required',
            'contactbg' => 'required'
        ]);

        $homebg = $request->file('homebg')->store('public');
        $aboutbg = $request->file('aboutbg')->store('public');
        $offerbg = $request->file('offerbg')->store('public');
        $contactbg = $request->file('contactbg')->store('public');

        $data = bgimg::create([

            'homebg' => $homebg,
            'aboutbg' => $aboutbg,
            'offerbg' => $offerbg,
            'contactbg' => $contactbg
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
        $data = bgimg::find($id);

        Storage::delete($data->homebg, $data->offerbg, $data->contactbg, $data->aboutbg);
        $data->delete();

        return redirect()->back();
    }
}

