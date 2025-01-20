<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\bgimg;
use App\Models\service;
use App\Models\offer;

class OfferController extends Controller
{


    public function alloffer()
    {
        $offer = offer::orderBy('ID', 'DESC')->get();
        return view('backend.alloffer')->with(['offer' => $offer]);
    }




    public function index()
    {

        return view('backend.offer');
    }


    /**
     * Display a listing of the resource.
     */
    public function showoffer()
    {
        $data = bgimg::orderBy('ID', 'DESC')->paginate(1);
        $service = service::orderBy('ID', 'DESC')->get();
        $offer = offer::orderBy('ID', 'DESC')->paginate(12);
        return view('frontpages.offer')->with(['bgimg' => $data, 'service' => $service, 'offer' => $offer]);
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
            'title_en' => 'required',
            'title_fa' => 'required',

            'content_en' => 'required',
            'content_fa' => 'required',

            'img' => 'required',
        ]);


        $img = $request->file('img')->store('public');

        $data = offer::create([
            'title_en' => $request->input('title_en'),
            'title_fa' => $request->input('title_fa'),

            'content_en' => $request->input('content_en'),
            'content_fa' => $request->input('content_fa'),
            'img' => $img
        ]);

        if($data){
            return redirect()->route('offers');
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
        $offer = offer::find($id);
        return view('backend.editoffer')->with(['offer' => $offer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_en' => 'required',
            'title_fa' => 'required',

            'content_en' => 'required',
            'content_fa' => 'required',

        ]);

        $data = offer::find($id);

        if($request->file('img')){
            $preImage = $data->img;
            storage::delete($preImage);
            $newImage = $request->file('img')->store('public');
            $data->img = $newImage;
        }
         $data->title_en = $request->input('title_en');
         $data->title_fa = $request->input('title_fa');

         $data->content_en = $request->input('content_en');
         $data->content_fa = $request->input('content_fa');

        $data->update();

        return redirect()->route('offers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = offer::find($id);

        Storage::delete($data->img);
        $data->delete();

        return redirect()->back();
    }
}
