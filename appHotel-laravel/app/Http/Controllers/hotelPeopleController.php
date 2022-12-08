<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelPeople;
use App\Http\Requests\CreatePeopleRequest;

class hotelPeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePeopleRequest $request)
    {
        $input = $request -> all();
        
        return \response()->json(['res' => true, 'message' => ' correctamente'],200);
    }

    public function register(CreatePeopleRequest $request){
        
        $hotelPeople = HotelPeople::create($request->all());
        auth()->login($hotelPeople);
        //return redirect('/')->with('success', "Account successfully registered.");
        return \response()->json(['res' => true, 'message' => ' correctamente'],200);
        /*
        $user = new User;
         $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->setPassword($request->password);
        $user->save();
        return redirect('/asdasd')->with('success', "Account successfully registered."); */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotelPeople = hotelPeople::find($id);
        return \response()->json($hotelPeople,200);
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
