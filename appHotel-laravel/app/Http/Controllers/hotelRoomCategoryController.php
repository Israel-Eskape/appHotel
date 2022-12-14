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
        return \response()->json($hotelRoomCategorys,200);
    }
    public function indexActivo (){
        $hotelRoomCategorys = hotelRoomCategory::with(['hotelStatusEntity:id,name'])
                                                        ->where('hotelStatusEntity_id','=','1')
                                                        ->get();
        return \response()->json($hotelRoomCategorys,200);
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
        $hotelRoomCategory = hotelRoomCategory::find($id);
        return \response()->json($hotelRoomCategory,200);
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
        try {
            hotelRoomCategory::destroy($id);
            return \response()->json(['res' => true, 'message' => 'eliminado correctamente'],200);
        } catch (\Throwable $th) {
            return \response()->json(['res' => false, 'message' => $th->getMessage()],200);
        }
        
    }
}
