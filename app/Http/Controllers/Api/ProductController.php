<?php

namespace App\Http\Controllers\Api;

use App\Models\m_product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("test");
        $result = [];
        // $result =  DB::select('select * from m_products as p
        // JOIN m_product_categorys as pc 
        // ON 
        // p.product_category_code=pc.product_category_code ');


        $data =  DB::table('m_products')
            ->join(
                'm_product_categorys',
                'm_products.product_category_code',
                '=',
                'm_product_categorys.product_category_code'
            )
            ->get();

        for ($d = 0; $d < count($data); $d++) {
            $p = $data[$d];

            array_push($result, $p);
        }

        return response()->json(['status' => 'success', 'data' => $result, 'code' => 200]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}