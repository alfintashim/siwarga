<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\UserAndroid;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = UserAndroid::all();

        return response()->json($user, 200);
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
        $user = new UserAndroid;
        $user->no_KK = $request->no_KK;
        $comment->password = $request->password;

        $success = $user->save();

        if(!$success) {
            return response()->json('Eror saving'. 500);
        }
        else
            return response()->json('success', 200);
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
        $user = UserAndroid::find($id);

        return is_null($user) ? response()->json('Not found', 404) : response()->json($user);
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
        $user = UserAndroid::find($id);

        if(is_null($request->no_KK)) {
            $user->no_KK = $request->no_KK;
        }
        if(is_null($request->password)) {
            $user->password = $request->password;
        }
        
        $success = $user->save;

        if(!$success) {
            return response()->json('Error saving', 500);
        }
        else
            return response()->json('success', 200);
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
        $user = UserAndroid::find($id);

        if(is_null($user)) {
            return response()->json('not found', 404);
        }

        $success = $user->save();

        if(!$success) {
            return response()->json('error deleting', 500);
        }
        else
            return response()->json('success', 200);
    }
}
