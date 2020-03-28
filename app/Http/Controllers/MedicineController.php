<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Http\Resources\MedicineResource;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Medicine::all();
        $data = array(
            'products' => $products,
        );
        return view('products.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Medicine::create([
            'druge_name' => $request->input('druge_name'),
            'druge_type'=> $request->input('druge_type'),
            'made_in'=> $request->input('made_in'),
            'company_name'=> $request->input('company_name'),
            'type'=> $request->input('type'),
            'description'=> $request->input('description'),
            'expire_date'=> $request->input('expire_date'),

        ]);

        return redirect('products/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Medicine::find($id);
        return view('products.detail')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drug= Medicine::find($id);
        // $data= new MedicineResource($drug);
        return view('products.edit')->with("drug",$drug);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id= $request->input('id');
        $data = Medicine::find($id);
        $data ->druge_name = $request->input('druge_name');
        $data ->druge_type= $request->input('druge_type');
        $data ->made_in= $request->input('made_in');
        $data ->company_name= $request->input('company_name');
        $data ->type= $request->input('type');
        $data ->description= $request->input('description');
        $data ->expire_date= $request->input('expire_date');
        if ($data->save()){
            return redirect('/products');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Medicine::find($id);
        $product->destroy();
        return redirect('/products');
    }
}
