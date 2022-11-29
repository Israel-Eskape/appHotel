<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotelRoomCategory;

class hotelRoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotelRoomCategorys = hotelRoomCategory::with(['hotelStatusEntity:id,name'])->get();
        return $hotelRoomCategorys;
        #return 'hola hotelRoomCategoryController';
    }
    public function indexActivate (){
        $hotelRoomCategorys = hotelRoomCategory::with(['hotelStatusEntity:id,name'])
                                                        ->where('id','like','%{}%')
                                                        ->get();
        return $hotelRoomCategorys;
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
