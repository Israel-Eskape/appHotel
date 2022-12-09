<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LoginRequest $request)
    {
        $input = $request -> getCredentials();
        return $input;
        #return \response()->json(['res' => true, 'message' => ' correctamente '],200);
        
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
        
        if(!Auth::validate($credentials)):
            #dd('error');
           #return redirect()->to('login')
            #    ->withErrors(trans('auth.failed'));
            return \response()->json(['res' => true, 'message' => 'NO authentificado correctamente'],500);
        endif;
        $hotelpeoples = Auth::getProvider()->retrieveByCredentials($credentials);
        

        Auth::login($hotelpeoples);

        return $this->authenticated($request, $hotelpeoples);
       /* if(auth()->attempt(request(['email','password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);

        } else {

            if(auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('/');
            }
        }*/
    
    }

    protected function authenticated(Request $request, $hotelpeoples) 
    {
        #return redirect()->route('home.index');
        return \response()->json(['res' => true, 'message' => 'authentificado correctamente'],200);
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
