<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\bgimg;
use App\Models\order;
use App\Models\service;
use App\Models\product;

class OrderController extends Controller
{


    public function vieworder()
    {
        $order = order::orderBy('ID', 'DESC')->get();
        return view('backend.orders')->with(['order' => $order]);
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
            'detail',
            'delivery',
            'address'

        ]);

        $data = order::create([
            'product_id' => $request->input('product_id'),
            'product_name' => $request->input('product_name'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'detail' => $request->input('detail'),
            'delivery' => $request->input('delivery'),
            'address' => $request->input('address')

        ]);

        if($data){
            session()->flash("success");
            return redirect()->route('showhome');
        }
    }

    public function order(string $id)
    {
        $pro = product::find($id);
        $service = service::orderBy('ID', 'DESC')->get();
        return view('frontpages.order')->with(['pro' => $pro, 'service' => $service]);
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }





    public function orderpro(string $id)
    {
        $order = product::find($id);
        return view('frontpages.order')->with(['pro' => $order]);
    }






    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = order::find($id);

        $data->delete();

        return redirect()->route('orders');
    }
}
