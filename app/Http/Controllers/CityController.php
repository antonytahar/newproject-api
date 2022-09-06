<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $allCities = City::all()->load('country');
        return response()->json(['error' => false, 'message' => '', 'data' => $allCities], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request = $request->all();
        $city = new City();
        $city->{'post_code'} = $request['data']['post_code'];
        $city->{'name'} = $request['data']['name'];
        $city->{'longitude'} = $request['data']['longitude'];
        $city->{'latitude'} = $request['data']['latitude'];
        $city->{'country_id'} = $request['data']['country'];
        $city->save();
        return response()->json(['error' => false, 'message' => 'Données enregistrées', 'data' => $city], 200);
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
        $city = City::find($id);
        return response()->json(['error' => false, 'message' => '', 'data' => $city], 200);
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
            City::where('id', $id)->delete();
            return response()->json(['error' => false, 'message' => 'Données supprimées', 'data' => $id], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => 'Erreur lors de la suppression', 'data' => $id], 200);
        }
    }

    public function save(Request $request) {
        $request = $request->all();
        $city = City::find($request['no']);
        $city->{'post_code'} = $request['data']['post_code'];
        $city->{'name'} = $request['data']['name'];
        $city->{'longitude'} = $request['data']['longitude'];
        $city->{'latitude'} = $request['data']['latitude'];
        $city->{'country_id'} = $request['data']['country'];
        $city->save();
        return response()->json(['error' => false, 'message' => 'Données enregistrées', 'data' => $city], 200);
    }

}
