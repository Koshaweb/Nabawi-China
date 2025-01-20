<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test = testimonial::orderBy('ID', 'DESC')->get();
        return view('backend.review')->with(['test' => $test]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'image' => 'required',
            'review' => 'required'

        ]);

        $img = $request->file('image')->store('public');

        $data = testimonial::create([
            'name' => $request->input('name'),
            'job' => $request->input('job'),
            'review' => $request->input('review'),
            'image' => $img
        ]);

        if($data){
            session()->flash("test");
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
        $data = testimonial::where('id', $id)->update(['status' => 'approved']);

        if($data){
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = testimonial::find($id);

        Storage::delete($data->image);
        $data->delete();

        return redirect()->back();
    }
}
