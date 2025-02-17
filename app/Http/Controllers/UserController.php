<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User as User;

class UserController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allusers = User::all();
        return response()->json(['error' => false, 'message' => '', 'data' => $allusers], 200);
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
        $user = User::find($id);
        return response()->json(['error' => false, 'message' => '', 'data' => $user], 200);
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

    // public function all() {
    //     $allusers = User::all();
    //     return response()->json(['error' => false, 'message' => '', 'data' => $allusers], 200);
    // }

    // public function userById($id) {
    //     $user = User::where('ID', 'like', '%'.$id.'%')->orWhere('Name', 'like', '%'.$id.'%')->get();
    //     return response()->json(['error' => false, 'message' => '', 'data' => $user], 200);
    // }

    // public function userByName($name) {
    //     $query = User::where('Name', '=', $name)->get();
    //     if(!$query) {
    //         return response()->json(['error' => true, 'message' => 'Aucun utilisateur pour ce nom.', 'data' => null], 404);
    //     } else {
    //         return response()->json(['error' => false, 'message' => '', 'data' => $query], 200);
    //     }
    // }
}