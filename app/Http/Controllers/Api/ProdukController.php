<?php

/**
 * For the brave souls who get this far: You are the chosen ones,
 * the valiant knights of programming who toil away, without rest,
 * fixing our most awful code. To you, true saviors, kings of men,
 * I say this: never gonna give you up, never gonna let you down,
 * never gonna run around and desert you. Never gonna make you cry,
 * never gonna say goodbye. Never gonna tell a lie and hurt you.
 */

/**
 * author : Suryo Atmojo <suryoatm@gmail.com>
 * project : Belajar Laravel
 * Start-date : 1-02-2021
 */

namespace App\Http\Controllers\Api;

use App\Models\Modelproduk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProdukResource;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dengan perintah Modelproduk::all() maka akan memunculkan semua data
        return new ProdukResource(Modelproduk::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'product'   => 'required'
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //save to database
        $modelproduk = Modelproduk::create([
            'product'     => $request->product,
            'description' => $request->description,
        ]);

        return new ProdukResource($modelproduk);
    }

    /**
     * Display the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  Modelproduk $modelproduk
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Modelproduk $modelproduk)
    {
        $modelproduk = ModelProduk::find($request->produk);
        // $modelproduk = ModelProduk::where('product', "tugu buaya")->first();
        return new ProdukResource($modelproduk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Modelproduk $modelproduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelproduk $modelproduk)
    {

        //set validation
        $validator = Validator::make($request->all(), [
            'product'   => 'required'
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $modelproduk = ModelProduk::find($request->produk);
        //update to database
        $modelproduk->update([
            'product'     => $request->product,
            'description'     => $request->description
        ]);

        return new ProdukResource($modelproduk);
    }

    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  Modelproduk $modelproduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Modelproduk $modelproduk)
    {
        $modelproduk = ModelProduk::find($request->produk);
        if ($modelproduk) {
            $modelproduk->delete();
        } else {
            dd("data tidak ada");
        }

        return new ProdukResource($modelproduk);
    }
}
