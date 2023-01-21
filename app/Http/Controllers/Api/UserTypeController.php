<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserType;
use Illuminate\Http\Request;
use App\Http\Resources\UserTypeResource;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usertypes = UserType::All();
        return response()->json($usertypes,200);
    }
    public function showAll()
    {
        $usertypes = UserType::All();
        return response()->json($usertypes,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOne()
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
        $usertypes= UserType::create($request->all());

        return new UserTypeResource($usertypes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserType  $type_id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $usertypes = UserType::Find($id);
        return response()->json($usertypes,200);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserType  $type_id
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserType  $type_id
     * @return \Illuminate\Http\Response
     * 
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserType  $type_id
     * @return \Illuminate\Http\Response
     */
        public function update(UserType $id)
    {
        $usertype= UserType::find($id);
        return new UserTypeResource($usertype);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserType  $type_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserType $type_id)
    {
        //
    }
}
