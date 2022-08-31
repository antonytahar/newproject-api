<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCountries = Country::all();
        return response()->json(['error' => false, 'message' => '', 'data' => $allCountries], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request = $request->all();
        $country = new Country();
        $country->{'name'} = $request['name'];
        $country->save();
        return response()->json(['error' => false, 'message' => 'Données enregistrées', 'data' => $country], 200);
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
        $country = Country::find($id);
        return response()->json(['error' => false, 'message' => '', 'data' => $country], 200);
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
            Country::where('id', $id)->delete();
            return response()->json(['error' => false, 'message' => 'Données supprimées', 'data' => $id], 200);    
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => 'Erreur lors de la suppression', 'data' => $id], 200);    
        }
    }

    public function save(Request $request) {
        $request = $request->all();
        $country = Country::find($request['no']);
        $country->{'name'} = $request['data']['name'];
        $country->save();
        return response()->json(['error' => false, 'message' => 'Données enregistrées', 'data' => $country], 200);
    }

}
