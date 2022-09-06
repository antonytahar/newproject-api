<?php

namespace App\Http\Controllers;

use App\Pointing;
use Illuminate\Http\Request;

class PointingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPointings = Pointing::all()->load('user'); // Le load doit contenir le nom du model lié
        return response()->json(['error' => false, 'message' => '', 'data' => $allPointings], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request = $request->all();
        $pointing = new Pointing();
        $pointing->{'title'} = $request['data']['title'];
        $pointing->{'duration'} = $request['data']['duration'];
        $pointing->{'date'} = $request['data']['date'];
        $pointing->{'status'} = $request['data']['status'];
        $pointing->{'user_id'} = $request['data']['user'];
        $pointing->save();
        return response()->json(['error' => false, 'message' => 'Données enregistrées', 'data' => $pointing], 200);
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
        try {
            Pointing::where('id', $id)->delete();
            return response()->json(['error' => false, 'message' => 'Données supprimées', 'data' => $id], 200);    
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => 'Erreur lors de la suppression', 'data' => $id], 200);    
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function validatePointing(Request $request) {
        $request = $request->all();
        $pointing = Pointing::find($request['pointingid']);
        $pointing->{'status'} = 2;
        $pointing->save();
        return response()->json(['error' => false, 'message' => 'Pointage validé', 'data' => $pointing['id']], 200);
    }

}
